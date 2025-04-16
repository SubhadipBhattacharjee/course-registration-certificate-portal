<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Login extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file','cookie'));
        $this->load->database('database');
        $this->load->library(array('session','form_validation'));
        $this->load->model('Login_model');

       

    }



    public function index()
    {

      if($this->session->userdata('f_email'))
        {
          redirect('partner/dashboard');
        }
        $this->load->view('partner/login');

    }


    public function change_password()
    {

       $this->load->view('admin/change_pass');

    }

     public function check()
    {

    	$email=$this->input->post('fmail');
    	$pass=$this->input->post('fpassword');
      $check_box=$this->input->post('check');

        //echo $check_box; exit();

    	$check_email=$this->Login_model->fran_login_by_email($email);
    	$check_pass=$this->Login_model->fran_login_by_pass($pass);

     

    	 if(empty($check_email) && !empty($check_pass))
            {
              $this->session->set_flashdata('error-email','You entered invalid Email');
              redirect('partner');
            }
            elseif(empty($check_pass) && !empty($check_email))
            {
              $this->session->set_flashdata('error-password','You entered invalid Password');
              redirect('partner');
            }
            elseif(empty($check_email) && empty($check_pass))
            {
              $this->session->set_flashdata('error','Please cheak both of your Email and Password');
              redirect('partner');
            }
            elseif( !empty($check_email) && !empty($check_pass))
            { 

              // echo $check_pass->f_name; die();
                $setdata=array(

                    "f_id"=>$check_pass->id,
                    "f_name"=>$check_pass->f_name,
                    "f_email"=>$check_email->f_mail
                   
                 );

                if($check_box)
                {    
                	$this->load->helper('cookie');
                	$this->input->set_cookie('email',$email,'3600');
                	$this->input->set_cookie('password',$pass,'3600');

                }
                elseif(!$check_box)
                {
                	delete_cookie('email');
                	delete_cookie('password');
                }

                $this->session->set_userdata($setdata);
                $this->session->set_flashdata('success-login','Welcome to the Franchise Section');
                redirect('partner/dashboard');
            }
        
    }

   

    public function change_pass()
    {


       $pass=$this->input->post('c_pass');
       $new_pass1=$this->input->post('n_pass');
       $new_pass2=$this->input->post('confirm_pass');

       $check_pass=$this->Login_model->login_by_pass($pass);

       //echo $check_pass->phone;exit();
       if(empty($check_pass))
       {
       	$this->session->set_flashdata('error-pass','Entered <b>Current Password</b> is not valid.<br>Try Again!');
       	redirect('admin/login/change_password');
       }
       elseif(!empty($check_pass) && ($new_pass1!=$new_pass2))
       {
        $this->session->set_flashdata('error-new-pass','Your <b>New password</b> is not matched with <b>Confirmed New Password</b>.');
        redirect('admin/login/change_password');
       }
       elseif(!empty($check_pass) && ($new_pass1==$new_pass2))
       {
          $id=$check_pass->id;

          $data['password']=$new_pass2;
          $this->Login_model->update_password($id,$data);

          $this->session->set_flashdata('success','Your <b>New password</b> has been saved.');
          redirect('admin/login/change_password');
        }

       
    }

   

    public function logout()
    {
    	 $this->load->library('session');

    	 $setdata=array(
                    "f_id"=>"",
                    "f_name"=>"",
                    "f_email"=>""   
                );

     if($this->session->userdata('a_id'))
     {
    	  $this->session->unset_userdata("f_id");
        $this->session->unset_userdata("f_name");
        $this->session->unset_userdata("f_email");
    	 //$this->session->sess_destroy();
        redirect('partner');
     }
     else
     {
        $this->session->unset_userdata("f_id");
        $this->session->unset_userdata("f_name");
        $this->session->unset_userdata("f_email");
        
        $this->session->sess_destroy();
        redirect('partner');
     }
    

    }




  }

