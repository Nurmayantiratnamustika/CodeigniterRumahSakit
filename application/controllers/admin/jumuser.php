<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class jumuser extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        
    }
    

    public function index()
    {
        $data["user"] = $this->login_model->user();
        $this->load->view("admin/namauser",$data);
    }

}


