<?php

class Overview extends CI_Controller{
    public function __construct()
    {
        parent::__construct();

    }

    public function index()
    {

        $this->load->view("user/overview");
        if($this->session->userdata('level') != 'pasien'){
         
            redirect('login','refresh');
            
        }
    }
}