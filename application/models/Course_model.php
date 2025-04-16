<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Course_model extends CI_Model {


    //----------------------------------------Stream-Section----------------------------------------//

    function save_stream($data)
    {
        $this->db->insert('trades',$data);
        //return true;
    }

    function fetch_stream()
    {
        $sql="SELECT * from trades";
        $query=$this->db->query($sql);
        return $query->result();
    }


    function stream_byid($id)
    {
        $sql="SELECT * from trades WHERE id='".$id."'";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function update_stream($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('trades', $data);
    }

    function delete_stream($id)
    {
       $this->db->where('id',$id);
       $this->db->delete('trades');
    }



    //----------------------------------------Course-Section----------------------------------------//



    function all_trades()
    {
        $sql="SELECT * from trades  ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function save_course($data)
    {
        $this->db->insert('course',$data);
        //return true;
    }

    function fetch_course()
    {
        $sql="SELECT a.*,b.name AS cat from course a left join trades b on a.p_id=b.id WHERE b.status=1 ORDER BY a.id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function fetch_course_byid($id)
    {
        $sql="SELECT a.*,b.name AS cat from course a left join trades b on a.p_id=b.id WHERE a.id='".$id."' && b.status=1 ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function update_course($id,$data)
    {
         $this->db->where('id', $id);
         $this->db->update('course', $data);
    }

    function delete_course($id)
    {
       $this->db->where('id',$id);
       $this->db->delete('course');
    }



    //----------------------------------------------View Page query(Course Page)-----------------------------------------------------------//


    function join_trades()
    {
        $sql="SELECT distinct b.duration as time, a.* from trades a left join course b on a.id=b.p_id ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }
    function all_course()
    {
        $sql="SELECT * from course ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }


     //----------------------------------------------View Page query(Students Registration Page)-----------------------------------------------------------//

     function fetch_course_duration($id)
     {
        $sql="SELECT distinct duration from course WHERE p_id= '".$id."' ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
     }

     function fetch_course_name($p_id,$duration)
     { 
        $sql="SELECT * from course WHERE p_id= '".$p_id."' && duration='".$duration."' ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
     }

 }