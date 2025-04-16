<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Gallery extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file','cookie'));
        $this->load->database('database');
        $this->load->library(array('session','form_validation'));
        $this->load->model(array('Home_model','Gallery_model','Details_model'));

       

    }

    public function index()
    {
        $meta= array('title'=>'Image Gallery');

        $data['images']=$this->Gallery_model->fetch_gallery();
        $general['details']=$this->Details_model->fetch_details();

        $this->load->view('html/common/header',$meta); 
        $this->load->view('html/gallery',$data);
        $this->load->view('html/common/footer',$general);

    }

}