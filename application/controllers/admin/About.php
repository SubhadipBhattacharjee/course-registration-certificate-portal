<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class About extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library('session');
        $this->load->model(array('Home_model','About_model'));

        if(!$this->session->userdata('a_email'))
        {
          redirect('admin');
        }
    }


    //-----------------------------------------Footer-Section--------------------------------------------//


    public function index()
    {

        //$data['value']=$this->Home_model->fetch_footer();
        $this->load->view('admin/footer/table_footer',$data);

    } 


    public function content()
    {

        $data['value']=$this->About_model->fetch_content();
        $this->load->view('admin/about/table_about',$data);

    } 

    public function edit_content($id)
    {
       $data['value']=$this->About_model->content_byid($id);
       $this->load->view('admin/about/edit_about',$data);
    } 


    public function update_content($id)
    {
 
      $picture="";

      if(!empty($_FILES['file']['name']))
      {
           $config['upload_path'] = 'files/about'; 
           $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif'; 
           $config['max_size'] = '102400'; // max_size in kb 
           $config['file_name'] = $_FILES['file']['name'];
 
           $this->load->library('upload',$config);
           $this->upload->initialize($config);
 
           $this->upload->do_upload('file');
           
           $uploadData = $this->upload->data();
           $picture = 'files/about/'.$uploadData['file_name'];
      }


      $data=array(

         'who'=>$this->input->post('who'),
         'mission'=>$this->input->post('mission'),
         'vision'=>$this->input->post('vision'),
         'policy'=>$this->input->post('policy')
        
         
      );

      if($picture!="")
      {
        $data['file']=$picture;

         /*--Removing Previous file--*/ 
         $images=array();
         $images=$this->About_model->select_file_by_id($id);
         unlink($images->file);

      }

       $this->About_model->update_content($id,$data);
       $this->session->set_flashdata('update-content','Details updated...');
       redirect(base_url().'admin/about-us/edit/'.$id);
      
    } 




}