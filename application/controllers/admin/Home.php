<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Home extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library('session');
        $this->load->model('Home_model');

        if(!$this->session->userdata('a_email'))
        {
          redirect('admin');
        }
    }


    

    //-----------------------------------------News-Section--------------------------------------------//


    public function news()
    {

        $data['value']=$this->Home_model->fetch_news();
        $this->load->view('admin/home/table_news',$data);

    } 

    public function form_news()
    {
       //$data['value']=$this->Home_model->news_byid($id);
       $this->load->view('admin/home/form_news');
    } 

    public function save_news()
    {
 
      $data=array(
         'news'=>$this->input->post('name')   
      );

       $this->Home_model->save_news($data);
       $this->session->set_flashdata('save-news','Details saved...');
       redirect('admin/news-update/form');
      
    } 

    public function delete_news($id)
    {
        $this->Home_model->delete_news($id);
        $this->session->set_flashdata('delete-news','Details Deleted...');
        redirect('admin/news-update');
    }


    //-----------------------------------------Content-Section--------------------------------------------//



    public function content()
    {

        $data['value']=$this->Home_model->fetch_content();
        $this->load->view('admin/home/table_content',$data);

    } 

    public function edit_content($id)
    {
       $data['value']=$this->Home_model->content_byid($id);
       $this->load->view('admin/home/edit_content',$data);
    } 


    public function update_content($id)
    {
 
      $data=array(

         'gen_desc'=>$this->input->post('w_desc'),
         'chairman_desc'=>$this->input->post('chair_desc')
        
         
      );

       $this->Home_model->update_content($id,$data);
       $this->session->set_flashdata('update-content','Details updated...');
       redirect(base_url().'admin/home-content/edit/'.$id);
      
    } 



    //-----------------------------------------Banner-Section--------------------------------------------//


    public function banner()
    {

        $data['value']=$this->Home_model->fetch_banner();
        $this->load->view('admin/home/table_banner',$data);

    } 

    public function form_banner()
    {
       //$data['value']=$this->Home_model->news_byid($id);
       $this->load->view('admin/home/form_banner');
    } 

    public function save_banner()
    {
 
      /*----File Uploading---*/

      $config['upload_path'] = 'files/banner'; 
      $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif'; 
      $config['max_size'] = '102400'; // max_size in kb 
      $config['file_name'] = $_FILES['file']['name'] ;

      $this->load->library('upload',$config);
      $this->upload->initialize($config);

     

        $this->upload->do_upload('file');
        
        $uploadData = $this->upload->data();
        $picture ='files/banner/'.$uploadData['file_name'];

         $data=array(

            'name'=>$this->input->post('name'),
            'file'=> $picture
         );

         $this->Home_model->save_banner($data);
         $this->session->set_flashdata('save-banner','file saved...');
         redirect('admin/banner/form');

      
      
    } 

    
    public function delete_banner($id)
    {

         /*--Fetching Previous file--*/ 
         $images=array();
         $images=$this->Home_model->fetch_banner_byid($id); 
         $this->Home_model->delete_banner($id);
 
         /*--Removing Previous file--*/ 
         unlink($images->file);
         $this->session->set_flashdata('delete-banner','File Deleted...');
         redirect('admin/banner');
        
    }



    //-----------------------------------------Logo-Section--------------------------------------------//


    public function logo()
    {

        $data['value']=$this->Home_model->fetch_logo();
        $this->load->view('admin/home/table_logo',$data);

    } 

    public function form_logo()
    {
       //$data['value']=$this->Home_model->news_byid($id);
       $this->load->view('admin/home/form_logo');
    } 

    public function save_logo()
    {
 
      /*----File Uploading---*/

      $config['upload_path'] = 'files/logo'; 
      $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif'; 
      $config['max_size'] = '102400'; // max_size in kb 
      $config['file_name'] = $_FILES['file']['name'] ;

      $this->load->library('upload',$config);
      $this->upload->initialize($config);

     

        $this->upload->do_upload('file');
        
        $uploadData = $this->upload->data();
        $picture ='files/logo/'.$uploadData['file_name'];

         $data=array(

           // 'name'=>$this->input->post('name'),
            'file'=> $picture
         );

         $this->Home_model->save_logo($data);
         $this->session->set_flashdata('save-banner','file saved...');
         redirect('admin/logo-section/form');
  
    } 

    
    public function delete_logo($id)
    {

         /*--Fetching Previous file--*/ 
         $images=array();
         $images=$this->Home_model->fetch_logo_byid($id); 
         $this->Home_model->delete_logo($id);
 
         /*--Removing Previous file--*/ 
         unlink($images->file);
         $this->session->set_flashdata('delete-banner','File Deleted...');
         redirect('admin/logo-section');
        
    }



}