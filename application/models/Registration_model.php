<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Registration_model extends CI_Model {


    function save_registration($data)
    {
        $this->db->insert('registration',$data);
        return $this->db->insert_id();
    }


    //--------------------------------------------------Registration(Admin)------------------------------------------------//

    function all_pending_registration()
    {
        $sql="SELECT a.*,b.name as course,b.fees AS fee, c.name as trade from registration a left join course b on a.course_name=b.id left join trades c on a.category=c.id
               WHERE a.status=0 ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function all_approved_registration()
    {
        $sql="SELECT a.*,b.name as course,b.fees AS fee, c.name as trade from registration a left join course b on a.course_name=b.id left join trades c on a.category=c.id
               WHERE a.status=1 ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function change_status($id,$data)
    {
        $this->db->where('id',$id);
        $this->db->update('registration',$data);
    }

    function fetch_record_byid($id)
    {
        $sql="SELECT a.*,b.name as course,c.name as trade from registration a left join course b on a.course_name=b.id left join trades c on a.category=c.id
              WHERE a.id='".$id."' ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function fetch_dob($id)
    {
        $sql="SELECT dob_proof from registration WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function fetch_documents($id)
    {
        $sql="SELECT edu_proof from registration WHERE id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function checking_record($mail)
    {
        $sql="SELECT * from registration WHERE mail='".$mail."' ";
        $query=$this->db->query($sql);
        return $query->row();

    }

    function fetch_record($id)
    {
        $sql="SELECT a.*,b.name as title from registration a left join course b on a.course_name=b.id WHERE a.id='".$id."' ";
        $query=$this->db->query($sql);
        return $query->row();
    }


    //--------------------------------------------------Registration(Franchise)------------------------------------------------//


    function get_franchise_code($fid)
    {
        $sql="SELECT * from branch_address WHERE id='".$fid."' ";
        $query=$this->db->query($sql);
        return $query->row();

    }

    function count_pending_registration($code)
    {
        $sql="SELECT COUNT(code) AS number from registration WHERE code='".$code."' && status=0 ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function count_approved_registration($code)
    {
        $sql="SELECT COUNT(code) AS number from registration WHERE code='".$code."' && status=1 ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function select_distinct_data($fid)
    {
        $sql="SELECT * from branch_address WHERE id='".$fid."' LIMIT 1 ";
        $query=$this->db->query($sql);
        return $query->row();
    }

    function all_franchise_pending_registration($code)
    {
        $sql="SELECT a.*,b.name as course,b.fees AS fee,c.name as trade from registration a left join course b on a.course_name=b.id left join trades c on a.category=c.id
              WHERE a.code='".$code."' && a.status=0 ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    function all_franchise_approved_registration($code)
    {
        $sql="SELECT a.*,b.name as course,b.fees AS fee,c.name as trade from registration a left join course b on a.course_name=b.id left join trades c on a.category=c.id
              WHERE a.code='".$code."' && a.status=1 ORDER BY id DESC ";
        $query=$this->db->query($sql);
        return $query->result();
    }

}