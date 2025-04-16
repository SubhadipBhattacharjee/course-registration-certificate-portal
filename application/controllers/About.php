<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class About extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file','cookie'));
        $this->load->database('database');
        $this->load->library(array('session','form_validation'));
        $this->load->model(array('Home_model','Details_model','About_model'));

       

    }


    public function index()
    {
        $meta= array('title'=>'about Us');

        $data['contents']=$this->About_model->fetch_content();
        $general['details']=$this->Details_model->fetch_details();

        $this->load->view('html/common/header',$meta); 
        $this->load->view('html/about',$data);
        $this->load->view('html/common/footer',$general);

    }

}