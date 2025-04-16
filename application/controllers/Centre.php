<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Centre extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file','cookie'));
        $this->load->database('database');
        $this->load->library(array('session','form_validation'));
        $this->load->model(array('Home_model','Centre_model','Details_model'));

       

    }

    public function index()
    {
        $meta= array('title'=>'Associate Centre');

        $data['centre']=$this->Details_model->fetch_details();
        $data['branch']=$this->Centre_model->fetch_branch();

        $general['details']=$this->Details_model->fetch_details();

        $this->load->view('html/common/header',$meta); 
        $this->load->view('html/centre',$data);
        $this->load->view('html/common/footer',$general);

    }

}