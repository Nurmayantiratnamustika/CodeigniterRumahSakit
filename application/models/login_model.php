<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model {

    function login($username,$password){

        $this->db->select('username,active,password,level');
        $this->db->from('login');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $this->db->limit(1);
        
    
        $query=$this->db->get();
        if ($query->num_rows()==1) {
            return $query->result();
        }
        else{
            return false;
        }
    }

    function user(){
        $this->db->select('username,email');
        $this->db->from('login');
        $this->db->where('level', 'pasien');
        $this->db->where('active', 1);
        
        $query=$this->db->get();
        return $query->result_array();
    }

    function total_rows($q=null){
        $this->db->like("id",$q);
        $this->db->or_like('username',$q);
        $this->db->or_like('email',$q);
        $this->db->or_like('password',$q);
        $this->db->or_like('active',$q);
        $this->db->or_like('level',$q);
        $this->db->from('login');
        return $this->db->count_all_result();
        
    }


}
