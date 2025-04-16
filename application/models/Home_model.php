<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {



    

    //-----------------------------//NEWS-SECTION//-------------------------------------//

    function save_news($data)
    {
        $this->db->insert('news_update',$data);
        //return true;
    }

    function fetch_news()
    {
        $sql="SELECT * from news_update ORDER BY id DESC";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function delete_news($id)
    {
       $this->db->where('id',$id);
       $this->db->delete('news_update');
    }


    //-----------------------------//Content-SECTION//-------------------------------------//


    function fetch_content()
    {
        $sql="SELECT * from home_content";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function content_byid($id)
    {
        $sql="SELECT * from home_content WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function update_content($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('home_content', $data);
    }


    //-----------------------------//Banner-SECTION//-------------------------------------//

    function save_banner($data)
    {
        $this->db->insert('banner',$data);
        //return true;
    }

    function fetch_banner()
    {
        $sql="SELECT * from banner ORDER BY id DESC";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function fetch_banner_byid($id)
    {
        $sql="SELECT * from banner WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function delete_banner($id)
    {
       $this->db->where('id',$id);
       $this->db->delete('banner');
    }


    //-----------------------------//Logo-SECTION//-------------------------------------//

    function save_logo($data)
    {
        $this->db->insert('logo',$data);    
    }

    function fetch_logo()
    {
        $sql="SELECT * from logo ORDER BY id DESC";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function fetch_logo_byid($id)
    {
        $sql="SELECT * from logo WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function delete_logo($id)
    {
       $this->db->where('id',$id);
       $this->db->delete('logo');
    }

 }