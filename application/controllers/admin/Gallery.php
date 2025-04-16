<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Gallery extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library('session');
        $this->load->model('Gallery_model');

        if(!$this->session->userdata('a_email'))
        {
          redirect('admin');
        }
    }



    public function gallery()
    {

        $data['value']=$this->Gallery_model->fetch_gallery();
        $this->load->view('admin/gallery/table_gallery',$data);

    } 

    public function form_gallery()
    {
       //$data['value']=$this->Home_model->news_byid($id);
       $this->load->view('admin/gallery/form_gallery');
    } 

    public function save_gallery()
    {
 
      /*----File Uploading---*/

      $config['upload_path'] = 'files/gallery'; 
      $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif'; 
      $config['max_size'] = '102400'; // max_size in kb 
      $config['file_name'] = $_FILES['file']['name'] ;

      $this->load->library('upload',$config);
      $this->upload->initialize($config);

      $this->upload->do_upload('file');
        
      $uploadData = $this->upload->data();
      $picture ='files/gallery/'.$uploadData['file_name'];

      $data=array(

          'file'=> $picture
      );

       $this->Gallery_model->save_gallery($data);
       $this->session->set_flashdata('save-gallery','Image saved...');
       redirect('admin/gallery/form');
      
    } 

    
    public function delete_gallery($id)
    {

         /*--Fetching Previous file--*/ 
         $images=array();
         $images=$this->Gallery_model->fetch_gallery_byid($id); 
         $this->Gallery_model->delete_gallery($id);
 
         /*--Removing Previous file--*/ 
         unlink($images->file);
         $this->session->set_flashdata('delete-gallery','Image Deleted...');
         redirect('admin/gallery');
        
    } 



}