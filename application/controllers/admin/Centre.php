<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Centre extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library(array('session','phpmailer_lib'));
        $this->load->model('Centre_model');

        if(!$this->session->userdata('a_email'))
        {
          redirect('admin');
        }
    }


   //-----------------------------------------------Franchise -Section------------------------------------------//

    public function branch()
    {

        $data['value']=$this->Centre_model->fetch_branch();
        $this->load->view('admin/centre/table_branch',$data);

    } 

    public function add_branch()
    {
      $this->load->view('admin/centre/form_branch');
    } 


    public function view_adhar($id)
    {
        $row=$this->Centre_model->fetch_branch_byid($id);
        $path=$row->file;

        header("Content-type: application/pdf"); 
        header("Content-disposition: inline; filename=".base_url($path));
        header('content-Transfer-Encoding:binary');
        header('Accept-Ranges:bytes');
        readfile(base_url('/').$path);
        
    }

    public function save_branch()
    {
 
       $code=$this->input->post('code');
       $val=$this->Centre_model->check_franchise_code($code);

       if($val)
       {

          $this->session->set_flashdata('code','Please chnage the Franchise code,it must be Unique..');
          redirect('admin/branch-office/form');

       }
       else
       {
  
          $config['upload_path'] = 'files/franchise'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif|pdf|docs|docx'; 
          $config['max_size'] = '102400'; // max_size in kb
          $config['file_name'] = $_FILES['file']['name'];
  
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
  
          $this->upload->do_upload('file');
            
          $uploadData = $this->upload->data();
          $adhar = 'files/franchise/'.str_replace(" ","_",$uploadData['file_name']);

          $data=array(

           'f_name'=>$this->input->post('f_name'),
           'f_contact'=>$this->input->post('f_contact'),
           'f_mail'=>$this->input->post('f_mail'),
           'f_add'=>$this->input->post('f_add'),
           'adhar'=>$this->input->post('adhar'),
           'file'=>$adhar,
           'pass'=>$this->input->post('pass'),

           'name'=>$this->input->post('name'),
           'code'=>$this->input->post('code'),
           'address'=>$this->input->post('address'),
           'contact'=>$this->input->post('contact'),
           'mail'=>$this->input->post('mail'),
           'status'=>$this->input->post('status')
        
          );

            $id=$this->Centre_model->save_branch($data);

            if($id)
            {
              redirect(base_url().'admin/centre/send/'.$id);
            }
            
        }

    } 

    public function send($id)
    {      

             // Load PHPMailer library
             $this->load->library('phpmailer_lib');
             
             // PHPMailer object
             $mail = $this->phpmailer_lib->load();


             $row=$this->Centre_model->fetch_branch_byid($id);

           
             // SMTP configuration
             $mail->isSMTP();
             $mail->Host     = 'smtp.gmail.com';
             $mail->SMTPAuth = true;
             $mail->Username = 'imsubhadip14@gmail.com';
             $mail->Password = '14081993';
             $mail->SMTPSecure = 'tsl';
             $mail->Port     = 587;
             
             //sender info
             $mail->setFrom('imsubhadip14@gmail.com', 'APJ Abdul Kalam Youth Computer Education');
             $mail->addReplyTo('imsubhadip14@gmail.com', 'APJ Abdul Kalam Youth Computer Education');

        
             // Add a recipient
             $mail->addAddress($row->f_mail);
        
              // Add cc or bcc 
             //  $mail->addCC('cc@example.com');
            //   $mail->addBCC('bcc@example.com');

            // Set email format to HTML
             $mail->isHTML(true);

        
             // Email subject
             $mail->Subject = "APJ Abdul Kalam Youth Computer Education";

        
             // Email body content
             $mailContent = "<h4>Thank You..<i> ".$row->f_name. "</i>. Franchise registration was successful..</h4><br>

             <p>The Centre Name :- <b>".$row->name."</b></p>
             <p>Franchise/Centre Code :- <b>".$row->code."</b></p>
             <p>Address of the Centre :- <b>".$row->address."</b></p>
             <p>Login URL of Franchise Panel :- <b>".base_url('partner')."</b></p>
             <p>Login Email :- <b>".$row->f_mail."</b></p>
             <p>Login Password :- <b>".$row->pass."</b></p><br>

             <p><b>*After successfully Login at the Franchise panel,You are advised to change the password since this password is Weak and Auto-Generated.</b></p>
             <p><b>**Please Contact Centre for any further details...</b></p>";
             $mail->Body = $mailContent;


             // Send email
             if(!$mail->send()){

                  echo 'Message could not be sent.';
                  echo 'Mailer Error: ' . $mail->ErrorInfo;
               }
               else
               {
                    $this->session->set_flashdata('save-branch-address','Franchise Registration Successful..');
                    redirect('admin/branch-office/form');
               }    

    }


    public function edit_branch($id)
    {
       $data['value']=$this->Centre_model->fetch_branch_byid($id);
       $this->load->view('admin/centre/edit_branch',$data);
    } 


    public function update_branch($id)
    {

      $adhar='';

      if(!empty($_FILES['file']['name']))
      {

          $config['upload_path'] = 'files/franchise'; 
          $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif|pdf|docs|docx'; 
          $config['max_size'] = '102400'; // max_size in kb
          $config['file_name'] = $_FILES['file']['name'];
  
          $this->load->library('upload',$config);
          $this->upload->initialize($config);
  
          $this->upload->do_upload('file');
            
          $uploadData = $this->upload->data();
          $adhar = 'files/franchise/'.str_replace(" ","_",$uploadData['file_name']);
      }
 
      $data=array(

         'f_name'=>$this->input->post('f_name'),
         'f_contact'=>$this->input->post('f_contact'),
         'f_mail'=>$this->input->post('f_mail'),
         'f_add'=>$this->input->post('f_add'),
         'adhar'=>$this->input->post('adhar'),
         'pass'=>$this->input->post('pass'),
         
         'name'=>$this->input->post('name'),
         'code'=>$this->input->post('code'),
         'address'=>$this->input->post('address'),
         'contact'=>$this->input->post('contact'),
         'mail'=>$this->input->post('mail'),
         'status'=>$this->input->post('status')
        
      );

      if($adhar!="")
      {
         $data['file']=$adhar;

         $images=array();
         $images=$this->Centre_model->select_adhar_byid($id);
         unlink($images->file);

      }

       $this->Centre_model->update_branch_address($id,$data);
       $this->session->set_flashdata('update-branch-address','Details updated...');
       redirect(base_url().'admin/branch-office/edit-branch/'.$id);
      
    } 


    public function delete_branch($id)
    {
        $this->Centre_model->delete_branch($id);
        $this->session->set_flashdata('delete-branch','Details Deleted...');
        redirect('admin/branch-office');
    }



    //-----------------------------------------------Franchise-Page-Content------------------------------------------//

    public function page()
    {

        $data['value']=$this->Centre_model->fetch_page();
        $this->load->view('admin/centre/table_page_content',$data);

    } 

    public function edit_page($id)
    {
       $data['value']=$this->Centre_model->page_byid($id);
       $this->load->view('admin/centre/edit_page_content',$data);
    } 


    public function update_page($id)
    {
 
      $data=array( 'content'=>$this->input->post('desc'));

       $this->Centre_model->update_page($id,$data);
       $this->session->set_flashdata('update-details','Details updated...');
       redirect(base_url().'admin/franchise-page-content/edit/'.$id);
      
    } 


    //-----------------------------------------------Franchise-Table-Content------------------------------------------//

    public function table()
    {
        $data['value']=$this->Centre_model->fetch_table();
        $this->load->view('admin/centre/table_fran_table',$data);
    } 

    public function add_table()
    {
      $this->load->view('admin/centre/form_table');
    } 

    public function save_table()
    {
        
       $data=array(

         'section'=>$this->input->post('status'),
         'particular'=>$this->input->post('name'),
         'value'=>$this->input->post('details')
         
        
       );

        $this->Centre_model->save_table($data);
        $this->session->set_flashdata('save-branch-address','Records saved...');
        redirect('admin/franchise-table-content/table');

    } 


    public function edit_table($id)
    {
       $data['value']=$this->Centre_model->fetch_table_byid($id);
       $this->load->view('admin/centre/edit_table',$data);
    } 


    public function update_table($id)
    {
 
      $data=array(

         'section'=>$this->input->post('status'),
         'particular'=>$this->input->post('name'),
         'value'=>$this->input->post('details')
        
      );

       $this->Centre_model->update_table($id,$data);
       $this->session->set_flashdata('update-branch-address','Details updated...');
       redirect(base_url().'admin/franchise-table-content/edit-table/'.$id);
      
    } 


    public function delete_table($id)
    {
        $this->Centre_model->delete_table($id);
        $this->session->set_flashdata('delete-branch','Details Deleted...');
        redirect('admin/franchise-table-content');
    }



  }