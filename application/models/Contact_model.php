<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_model extends CI_Model {


    function save_contact($data)
    {
        $this->db->insert('contact',$data);
        return $this->db->insert_id();
    }


    function fetch_last_user_id($id)
    {
        $sql="SELECT * from contact WHERE id='".$id."'";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function all_contact_details()
    {
        $sql="SELECT * from contact ORDER BY id DESC";
        $query=$this->db->query($sql);
        return $query->result();
    }


}