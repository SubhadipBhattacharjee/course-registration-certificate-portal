<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Home extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file','cookie'));
        $this->load->database('database');
        $this->load->library(array('session','form_validation'));
        $this->load->model(array('Home_model','Course_model','Details_model'));
    }


    public function index()
    {
        $meta= array('title'=>'Home');

        $data['banners']=$this->Home_model->fetch_banner();
        $data['content']=$this->Home_model->fetch_content();
        $data['details']=$this->Course_model->fetch_stream();
        $data['news']=$this->Home_model->fetch_news();
        $data['icons']=$this->Home_model->fetch_logo();
        
        $general['details']=$this->Details_model->fetch_details();

        $this->load->view('html/common/header',$meta); 
        $this->load->view('html/home',$data);
        $this->load->view('html/common/footer',$general);

    }

    




}