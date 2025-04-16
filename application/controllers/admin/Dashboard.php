<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Dashboard extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library('session');
        $this->load->model('');

        if(!$this->session->userdata('a_email'))
        {
          redirect('admin');
        }
    }



    public function index()
    {
       $this->load->view('admin/dashboard');
    }


    
  }