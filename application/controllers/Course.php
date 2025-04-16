<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Course extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file','cookie'));
        $this->load->database('database');
        $this->load->library(array('session','form_validation'));
        $this->load->model(array('Home_model','Course_model','Details_model'));

       

    }


    public function index()
    {
        $meta= array('title'=>'Courses Offered');

        $general['details']=$this->Details_model->fetch_details();

        $data['cats']=$this->Course_model->all_trades();
        $data['trades']=$this->Course_model->join_trades();
        $data['courses']=$this->Course_model->all_course();
        

        $this->load->view('html/common/header',$meta); 
        $this->load->view('html/course',$data);
        $this->load->view('html/common/footer',$general);

    }

    // public function dummy()
    // {

    //     $data['trades']=$this->Course_model->join_trades();
    //     //$data['courses']=$this->Course_model->all_course();

    //     print_r($data['trades']);

    //     //echo $data['trades'][0]->id;

    // }


    
}