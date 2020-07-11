<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class verifi_model extends CI_Model {


     public function getactive()
    {
       
        $this->db->select('*');
        $this->db->from('login');
        $this->db->where('active', 0);
        
       $query=$this->db->get();
       return $query->result_array();
       
        
        
        
    }

    public function verifi($id){
       
       $hasil=$this->db->query("UPDATE login SET active ='1' WHERE id=$id");
       return $hasil;

    
    }
}


