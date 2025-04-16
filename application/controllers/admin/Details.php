<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Details extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library('session');
        $this->load->model('Details_model');

        if(!$this->session->userdata('a_email'))
        {
          redirect('admin');
        }
    }


    //-----------------------------------------Footer-Section--------------------------------------------//


    public function index()
    {

        $data['value']=$this->Details_model->fetch_details();
        $this->load->view('admin/details/table_details',$data);

    } 

    public function edit_details($id)
    {
       $data['value']=$this->Details_model->details_byid($id);
       $this->load->view('admin/details/edit_details',$data);
    } 


    public function update_details($id)
    {
 
      $data=array(

         'name'=>$this->input->post('name'),
         'description'=>$this->input->post('desc'),
         'g_contact'=>$this->input->post('g_contact'),
         's_contact'=>$this->input->post('s_contact'),
         'f_contact'=>$this->input->post('f_contact'),
         'mail'=>$this->input->post('mail'),
         'address'=>$this->input->post('address'),
         'corp_add'=>$this->input->post('corp_address'),
         'fb'=>$this->input->post('fb'),
         'twitter'=>$this->input->post('twitter'),
         'pinterest'=>$this->input->post('pinterest'),
         'instagram'=>$this->input->post('instagram')
        
      );

       $this->Details_model->update_details($id,$data);
       $this->session->set_flashdata('update-details','Details updated...');
       redirect(base_url().'admin/general-details/edit/'.$id);
      
    } 



}