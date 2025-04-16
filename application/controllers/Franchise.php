<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Franchise extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file','cookie'));
        $this->load->database('database');
        $this->load->library(array('session','form_validation'));
        $this->load->model(array('Home_model','Details_model','Centre_model'));

       

    }


    public function index()
    {

       $meta= array('title'=>'franchise');

       $data['contents']=$this->Centre_model->fetch_page();
       $data['rows']=$this->Centre_model->fetch_table();
       $data['franch']=$this->Centre_model->fetch_franchise_req();

       $general['details']=$this->Details_model->fetch_details();

        $this->load->view('html/common/header',$meta); 
        $this->load->view('html/franchise',$data);
        $this->load->view('html/common/footer',$general);
      
    }


    



}