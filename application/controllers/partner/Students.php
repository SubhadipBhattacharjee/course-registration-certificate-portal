<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Students extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library(array('session','phpmailer_lib'));
        $this->load->model(array('Registration_model','Course_model'));

        if(!$this->session->userdata('f_id'))
        {
          redirect('partner');
        }
    }


    public function registration()
    {
        $fid=$this->session->userdata('f_id');
        

        $data['rows']=$this->Registration_model->select_distinct_data($fid);
        $data['category']=$this->Course_model->all_trades();

        $this->load->view('partner/students/form_registration',$data);
    }

    public function show_pending()
    {
        $fid=$this->session->userdata('f_id');
        $row=$this->Registration_model->get_franchise_code($fid);
        $code=$row->code;


        $data['value']=$this->Registration_model->all_franchise_pending_registration($code);

        $this->load->view('partner/students/table_pending_registration',$data);

    }

    public function show_approved()
    {
        $fid=$this->session->userdata('f_id');
        $row=$this->Registration_model->get_franchise_code($fid);
        $code=$row->code;


        $data['value']=$this->Registration_model->all_franchise_approved_registration($code);

        $this->load->view('partner/students/table_approved_registration',$data);

    }

    public function view_registration($id)
    {
        $data['value']=$this->Registration_model->fetch_record_byid($id);
        $this->load->view('partner/students/view_registration',$data);
    }

    


    public function save()
    {

        $config['upload_path'] = 'files/students'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif|pdf|docs|docx'; 
        $config['max_size'] = '102400'; // max_size in kb 


        if(!empty($_FILES['dob_proof']['name']))
        {
           
           $config['file_name'] = $_FILES['dob_proof']['name'];
 
           $this->load->library('upload',$config);
           $this->upload->initialize($config);
 
           $this->upload->do_upload('dob_proof');
           
           $uploadData = $this->upload->data();
           $dob_proof = 'files/students/'.str_replace(" ","_",$uploadData['file_name']);
        }


        if(!empty($_FILES['edu_proof']['name']))
        {
           
           $config['file_name'] = $_FILES['edu_proof']['name'];
 
           $this->load->library('upload',$config);
           $this->upload->initialize($config);
 
           $this->upload->do_upload('edu_proof');
           
           $uploadData = $this->upload->data();
           $edu_proof = 'files/students/'.str_replace(" ","_",$uploadData['file_name']);
        }


        if(!empty($_FILES['photo']['name']))
        {
 
           $config['file_name'] = $_FILES['photo']['name'];
 
           $this->load->library('upload',$config);
           $this->upload->initialize($config);
 
           $this->upload->do_upload('photo');
           
           $uploadData = $this->upload->data();
           $photo = 'files/students/'.str_replace(" ","_",$uploadData['file_name']);
        }


       $data=array(

         'centre_name'=>$this->input->post('centre_name'),
         'code'=>$this->input->post('code'),
         'category'=>$this->input->post('category'),
         'duration'=>$this->input->post('duration'),
        // 'course_name'=>$this->input->post('course_name'),
         'c_name'=>$this->input->post('c_name'),
         'f_name'=>$this->input->post('f_name'),
         'dob'=>$this->input->post('dob'),    
         'nationality'=>$this->input->post('nationality'),
         'caste'=>$this->input->post('caste'),
         'religion'=>$this->input->post('religion'),
         'gender'=>$this->input->post('gender'),
         'education'=>$this->input->post('education'),      
         'address'=>$this->input->post('address'),
         'mail'=>$this->input->post('mail'),
         'contact'=>$this->input->post('contact'),
        // 'enrollment_num'=>time(),
         'dob_proof'=>$dob_proof,
         'edu_proof'=>$edu_proof,
         'photo'=>$photo,
          
       );

       $mail=$this->input->post('mail');
       //$id=$this->input->post('mail');
       $row=$this->Registration_model->checking_record($mail);

       if($row)
       {
           if($row->course_name==$this->input->post('course_name') )
           {
              $this->session->set_flashdata('error','You have been already registered with this course...');  
              redirect(base_url().'partner/enrolled-students/form');  
           }
           else
           {
              $data['course_name']=$this->input->post('course_name');
              $data['enrollment_num']= $row->enrollment_num;

              $id= $this->Registration_model->save_registration($data);

              if($id)
              {
                 redirect(base_url().'partner/students/send/'.$id);
              }

           }

       }
       else
       {
             $data['course_name']=$this->input->post('course_name');
             $data['enrollment_num']=time();

             $id= $this->Registration_model->save_registration($data);

             if($id)
             {
                   redirect(base_url().'partner/students/send/'.$id);
                
             }

       }

    
    }



    public function send($id)
    {      

             // Load PHPMailer library
             $this->load->library('phpmailer_lib');
             
             // PHPMailer object
             $mail = $this->phpmailer_lib->load();


             $row=$this->Registration_model->fetch_record($id);

           
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
             $mail->addAddress($row->mail);
        
              // Add cc or bcc 
             //  $mail->addCC('cc@example.com');
            //   $mail->addBCC('bcc@example.com');

            // Set email format to HTML
             $mail->isHTML(true);

        
             // Email subject
             $mail->Subject = "APJ Abdul Kalam Youth Computer Education";

        
             // Email body content
             $mailContent = "<h4>Thank You !!<i> ".$row->c_name. "</i>. You have been registered successfully..</h4><br>
             <p>Your Enrollment Number is :- <b>".$row->enrollment_num."</b></p>
             <p>The Centre You Choose :- <b>".$row->centre_name."</b></p>
             <p>Course Name :- <b>".$row->title."</b></p><br><br>
             <p><b>**Please Contact Centre for any further details...</b></p>";
             $mail->Body = $mailContent;


             // Send email
             if(!$mail->send()){

                  echo 'Message could not be sent.';
                  echo 'Mailer Error: ' . $mail->ErrorInfo;
               }
               else
               {
                   $this->session->set_flashdata('registration','You have been successfully registered...');
                   redirect(base_url().'partner/enrolled-students/form');
               }    

    }



    public function documents($id)
    {
        $row=$this->Registration_model->fetch_documents($id);
        $path=$row->edu_proof;
        
        header("Content-type: application/pdf"); 
        header("Content-disposition: inline; filename=".base_url($path));
        header('content-Transfer-Encoding:binary');
        header('Accept-Ranges:bytes');
        readfile(base_url().$path);

    }

    public function dob($id)
    {
        $row=$this->Registration_model->fetch_dob($id);
        $path=$row->dob_proof;

        header("Content-type: application/pdf"); 
        header("Content-disposition: inline; filename=".base_url($path));
        header('content-Transfer-Encoding:binary');
        header('Accept-Ranges:bytes');
        readfile(base_url('/').$path);
        
    }



}