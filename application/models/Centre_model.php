<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Centre_model extends CI_Model {


    //---------------------------------------------Admin-Section---------------------------------------------//

    function save_branch($data)
    {
        $this->db->insert('branch_address',$data);
        return $this->db->insert_id();
    }

    function check_franchise_code($code)
    {
        $sql="SELECT * from branch_address WHERE code='".$code."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function select_adhar_byid($id)
    {
        $sql="SELECT * from branch_address WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }
    

    function fetch_branch()
    {
        $sql="SELECT * from branch_address ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function fetch_branch_byid($id)
    {
        $sql="SELECT * from branch_address WHERE id='".$id."'";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function update_branch_address($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('branch_address', $data);
    }

    function delete_branch($id)
    {
       $this->db->where('id',$id);
       $this->db->delete('branch_address');
    }


 //---------------------------------------------Franchise-page-Content(View)---------------------------------------------//

    function fetch_page()
    {
        $sql="SELECT * from franchise_page_content";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function page_byid($id)
    {
        $sql="SELECT * from franchise_page_content WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function update_page($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('franchise_page_content', $data);
    }

 //---------------------------------------------Franchise-table-Content(View)---------------------------------------------//

    function save_table($data)
    {
        $this->db->insert('franchise_table_content',$data);
        return true;
    }

    function fetch_table()
    {
        $sql="SELECT * from franchise_table_content ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function fetch_franchise_req()
    {
        $sql="SELECT * from franchise_table_content WHERE section='franchise' ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function fetch_table_byid($id)
    {
        $sql="SELECT * from franchise_table_content WHERE id='".$id."'";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function update_table($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('franchise_table_content', $data);
    }

    function delete_table($id)
    {
       $this->db->where('id',$id);
       $this->db->delete('franchise_table_content');
    }



 }