<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Email extends CI_Controller {

    public function __Construct() {

     parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library(array('session','form_validation','phpmailer_lib'));
        $this->load->model('Login_model');

    }


    public function forgot_password()
    {

       $this->load->view('admin/forget_pass');

    }

    public function send($id)
    {      

             // Load PHPMailer library
             $this->load->library('phpmailer_lib');
             
             // PHPMailer object
             $mail = $this->phpmailer_lib->load();


             $row=$this->Login_model->data_by_id($id);

           
             // SMTP configuration
             $mail->isSMTP();
             $mail->Host     = 'smtp.gmail.com';
             $mail->SMTPAuth = true;
             $mail->Username = 'subhadip.siterank@gmail.com';
             $mail->Password = '@subhadip2021';
             $mail->SMTPSecure = 'tsl';
             $mail->Port     = 587;
             
             //sender info
             $mail->setFrom('subhadip.siterank@gmail.com', 'Subhadip');
             $mail->addReplyTo('subhadip.siterank@gmail.com', 'Subhadip');

        
             // Add a recipient
             $mail->addAddress($row->email);
        
              // Add cc or bcc 
             //  $mail->addCC('cc@example.com');
            //   $mail->addBCC('bcc@example.com');

            // Set email format to HTML
             $mail->isHTML(true);

        
             // Email subject
             $mail->Subject = 'Email from SiteRank to retreive Password';

        
             // Email body content
               $mailContent = "<h1>Confidential!!</h1><br>
               <p>Your Admin Panel password is ".$row->password."</p>";
               $mail->Body = $mailContent;


             // Send email
             if(!$mail->send()){

                  echo 'Message could not be sent.';
                  echo 'Mailer Error: ' . $mail->ErrorInfo;
               }
               else
               {
                  $this->session->set_flashdata('rec-success','Password has been sent to your Email.<br>Go to LogIn Panel!!');
                  redirect('admin/email/forgot_password');
               }    

    }


    public function check_mail()
    {
        //retreive email
        $email=$this->input->post('rec_email');   
        $row=$this->Login_model->login_by_email($email);
 
        if(!$row)
        {

            $this->session->set_flashdata('rec-error','You entered Invalid Email Id.<br>Try Again!!');
            redirect(base_url().'admin/email/forgot_password');

        }  
        else
        {
            $id=$row->id;
            redirect(base_url().'admin/email/send/'.$id);
        }

    }
    



}