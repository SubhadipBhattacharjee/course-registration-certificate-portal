<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {


   //-----------------------------------------------Admin-Login-Section-----------------------------------------//

    function login_by_email($email)
    {
       $sql="SELECT * from admin WHERE email='".$email."' ";
       $query=$this->db->query($sql);
       return $query->row();
    }

    function login_by_pass($pass)
    {
       $sql="SELECT * from admin WHERE password='".$pass."' ";
       $query=$this->db->query($sql);
       return $query->row();
    }

    function data_by_id($id)
    {
      $sql="SELECT * from admin WHERE id='".$id."' ";
      $query=$this->db->query($sql);
      return $query->row();
    }

    function update_password($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('admin', $data);
    }


    //-----------------------------------------------Franchise-Login-Section-----------------------------------------//


    function fran_login_by_email($email)
    {
       $sql="SELECT * from branch_address WHERE f_mail='".$email."' ";
       $query=$this->db->query($sql);
       return $query->row();
    }

    function fran_login_by_pass($pass)
    {
       $sql="SELECT * from branch_address WHERE pass='".$pass."' ";
       $query=$this->db->query($sql);
       return $query->row();
    }

    function fran_data_by_id($id)
    {
      $sql="SELECT * from branch_address WHERE id='".$id."' ";
      $query=$this->db->query($sql);
      return $query->row();
    }

    function fran_update_password($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('branch_address', $data);
    }


 }