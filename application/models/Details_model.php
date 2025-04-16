<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Details_model extends CI_Model {



    //-----------------------------//FOOTER-SECTION//-------------------------------------//


    function fetch_details()
    {
        $sql="SELECT * from details";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function details_byid($id)
    {
        $sql="SELECT * from details WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function update_details($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('details', $data);
    }


}