<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Dashboard extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library('session');
        $this->load->model(array('Registration_model','Course_model'));

        if(!$this->session->userdata('f_email'))
        {
          redirect('partner');
        }
    }



    public function index()
    {
       $fid=$this->session->userdata('f_id');
       $data['rows']=$this->Registration_model->get_franchise_code($fid);

       $code=$data['rows']->code;
       $data['count']=$this->Registration_model->count_pending_registration($code);
       $data['approve']=$this->Registration_model->count_approved_registration($code);

       $this->load->view('partner/dashboard',$data);
    }


    
  }