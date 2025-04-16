<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class About_model extends CI_Model {



    //-----------------------------//Content-SECTION//-------------------------------------//


    function fetch_content()
    {
        $sql="SELECT * from about";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function content_byid($id)
    {
        $sql="SELECT * from about WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function update_content($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('about', $data);
    }

    function select_file_by_id($id)
    {
        $sql="SELECT file from about WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }



}