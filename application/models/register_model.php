<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class register_model extends CI_Model {

    public function register() 
    {
       
        $data= 
        [
        "username"=>$this->input->post("nama",true),
        "password"=>$this->input->post('password',true),
        "email"=>$this->input->post('email',true),
        "active"=> 0,
        "level"=>'pasien'
         ] ;
          $this->db->insert('login',$data);
    }
    

}

/* End of file register_model.php */
