<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Course extends CI_Controller {

    function __Construct() {

        parent::__construct();

        $this->load->helper(array('form','url','file'));
        $this->load->database('database');
        $this->load->library('session');
        $this->load->model('Course_model');

        if(!$this->session->userdata('a_email'))
        {
          redirect('admin');
        }
    }



    public function stream()
    {
        $data['value']=$this->Course_model->fetch_stream();
        $this->load->view('admin/course/table_trade',$data);
    }

    public function add_stream()
    {
        $this->load->view('admin/course/form_trade');
    }

    public function save_stream()
    {
             
      $data=array(

        'name'=>$this->input->post('name'),
        'description'=>$this->input->post('desc'),
        'status'=>$this->input->post('status')
        
      );

       $this->Course_model->save_stream($data);
       $this->session->set_flashdata('save-stream','Details has been saved...');
       redirect('admin/stream/form');


    }


    public function edit_stream($id)
    {

        $data['value']=$this->Course_model->stream_byid($id);
        $this->load->view('admin/course/edit_trade',$data);
    }


    public function update_stream($id)
    {
      $data=array(

        'name'=>$this->input->post('name'),
        'description'=>$this->input->post('desc'),
        'status'=>$this->input->post('status')
        
      );

       $this->Course_model->update_stream($id,$data);
       $this->session->set_flashdata('update-stream','Details updated...');
       redirect(base_url().'admin/stream/edit-stream/'.$id);
    }


    public function delete_stream($id)
    {
        $this->Course_model->delete_stream($id);
        $this->session->set_flashdata('delete-stream','Details Deleted...');
        redirect('admin/stream');
    }



    //-----------------------------------------------Courses Section------------------------------------------//

    public function content()
    {

        $data['value']=$this->Course_model->fetch_course();
        $data['category']=$this->Course_model->all_trades();
        
        $this->load->view('admin/course/table_course',$data);

    } 

    public function add_content()
    {
      $data['category']=$this->Course_model->all_trades();   
      $this->load->view('admin/course/form_course',$data);
    } 

    public function save_content()
    {
        
       $data=array(

         'name'=>$this->input->post('name'),
         'fees'=>$this->input->post('fees'),
         'p_id'=>$this->input->post('category'),
         'code'=>$this->input->post('code'),
         'duration'=>$this->input->post('duration'),
         'content'=>$this->input->post('desc'),
         'status'=>$this->input->post('status')
        
       );

        $this->Course_model->save_course($data);
        $this->session->set_flashdata('save-course','Records saved...');
        redirect('admin/course/form');

    } 


    public function edit_content($id)
    {
       $data['value']=$this->Course_model->fetch_course_byid($id);
       $data['category']=$this->Course_model->all_trades();

       $this->load->view('admin/course/edit_course',$data);
    } 


    public function update_content($id)
    {
 
      $data=array(

        'name'=>$this->input->post('name'),
        'fees'=>$this->input->post('fees'),
        'p_id'=>$this->input->post('category'),
        'code'=>$this->input->post('code'),
        'duration'=>$this->input->post('duration'),
        'content'=>$this->input->post('desc'),
        'status'=>$this->input->post('status')
        
      );

       $this->Course_model->update_course($id,$data);
       $this->session->set_flashdata('update-course','Details updated...');
       redirect(base_url().'admin/course/edit-course/'.$id);
      
    } 


    public function delete_content($id)
    {
        $this->Course_model->delete_course($id);
        $this->session->set_flashdata('delete-course','Details Deleted...');
        redirect('admin/course');
    }








    public function submit_post()
    {   
        /*----File Uploading---*/

        $config['upload_path'] = 'files/fashion'; 
        $config['allowed_types'] = 'jpg|jpeg|png|gif|jfif'; 
        $config['max_size'] = '1000000'; // max_size in kb 
        $config['file_name'] = $_FILES['file']['name'];

        $this->load->library('upload',$config);
        $this->upload->initialize($config);

        $this->upload->do_upload('file');
          
        $uploadData = $this->upload->data();
        $picture ='files/fashion/'.$uploadData['file_name'];



        //Decoding the base64 encoded image uploaded through SUMMERNOTE editor
        if ($this->input->post('desc')) {
             
            $detail=$this->input->post('desc');
            
            //Prepare HTML & ignore HTML errors
            $dom = new \domdocument();

           // $dom->loadHtml($detail, LIBXML_NOWARNING | LIBXML_NOERROR);
            $dom->loadhtml(mb_convert_encoding($detail, 'HTML-ENTITIES', 'UTF-8')); 

           
    
            //identify img element
            $images = $dom->getelementsbytagname('img');
    
             //loop over img elements, decode their base64 source data (src) and save them to folder,
             //and then replace base64 src with stored image URL.
              foreach($images as $k => $img){
    
                //collect img source data
                $data = $img->getattribute('src');
    
                //checking if img source data is image by detecting 'data:image' in string
                if (strpos($data, 'data:image')!==false){
                list($type, $data) = explode(';', $data);
                list(, $data)      = explode(',', $data);
                
                //decode base64
                $data = base64_decode($data);
    
                //naming image file
                $image_name= time().rand(000,999).$k.'.png';
    
                // image path (path) to use upload file to
                $path = 'files/texteditor/'. $image_name;
                $config['upload_path'] = $path; 
    
                //image path (path2) to save to DB so that summernote can display image in edit mode (When editing summernote content) NB: the difference btwn path and path2 is the forward slash "/" in path2
                $path2 = base_url().'/files/texteditor/'. $image_name;
    
                file_put_contents($path, $data);
    
               // modify image source data in summernote content before upload to DB
                $img->removeattribute('src');
                $img->setattribute('src', $path2);
  
            }
          }

            // final variable to store in DB
            $detail = $dom->savehtml();
        
        }




        $data=array(

            'parent_id'=>$this->input->post('category'),
            'author'=>$this->input->post('author'),
            'title'=>$this->input->post('title'),
            'file'=>$picture,
            'description'=>$detail,
            'date'=>$this->input->post('date'),
            'month'=>$this->input->post('month'),
            'year'=>$this->input->post('year'),
            'status'=>$this->input->post('status')

        );

        $this->Category_model->insert_category_post($data);
        $this->session->set_flashdata('fashion-post','Fashion Post has been successfully saved...');
        redirect('admin/magazine/add_post');

    }


    
  }