<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Contact extends CI_Controller {

    function __construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file','cookie'));
        $this->load->database('database');
        $this->load->library(array('session','form_validation'));
        $this->load->model(array('Home_model','Details_model','Contact_model'));
    }


    public function index()
    {
        $meta= array('title'=>'Contact Us');

        $general['details']=$this->Details_model->fetch_details();


        $this->load->view('html/common/header',$meta); 
        $this->load->view('html/contact',$general);
        $this->load->view('html/common/footer',$general);

    }


    public function submit()
    {
        $value=array(
      
          'name'=>$this->input->post('name'),
          'contact'=>$this->input->post('phone'),
          'mail'=>$this->input->post('mail'),
          'message'=>$this->input->post('msg')
        );
     
         $id=$this->Contact_model->save_contact($value);
         $row=$this->Contact_model->fetch_last_user_id($id);

         $name=$row->name;
      
         echo json_encode(array('status'=>'success','message'=>'Thank you <b><i> '.$name.' </i></b>,we will contact you very soon !!' ));
         exit();

    }



}