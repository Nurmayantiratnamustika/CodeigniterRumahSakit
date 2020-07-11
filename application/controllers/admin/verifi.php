<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class verifi extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('verifi_model');
        
    }
    

    public function index()
    {
             $data["verifi"] = $this->verifi_model->getactive();
             $this->load->view('admin/verifikasi',$data);
             
    }

    public function verifi($id){
        $data['verifi']=$this->verifi_model->verifi($id);
        $this->load->view('admin/verifisukses',$data);
    }

}
