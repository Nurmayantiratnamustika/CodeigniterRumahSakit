<?php

class Overview extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {
        
        $this->load->view("admin/overview",$data);

        if($this->session->userdata('level') != 'admin'){
         
            redirect('login','refresh');
            
        }
    }
}