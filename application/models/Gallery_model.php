<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery_model extends CI_Model {


    function save_gallery($data)
    {
        $this->db->insert('gallery',$data);
        //return true;
    }

    function fetch_gallery()
    {
        $sql="SELECT * from gallery ORDER BY id DESC";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function fetch_gallery_byid($id)
    {
        $sql="SELECT * from gallery WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function delete_gallery($id)
    {
       $this->db->where('id',$id);
       $this->db->delete('gallery');
    }




    //-----------------------------------------------Query for View section---------------------------------------------//


    



 }