<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Contact extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library('session');
        $this->load->model(array('Home_model','Contact_model'));

        if(!$this->session->userdata('a_email'))
        {
          redirect('admin');
        }
    }


    //-----------------------------------------Footer-Section--------------------------------------------//


    public function index()
    {

        $data['value']=$this->Contact_model->all_contact_details();
        $this->load->view('admin/contact/table_contact',$data);

    } 


}