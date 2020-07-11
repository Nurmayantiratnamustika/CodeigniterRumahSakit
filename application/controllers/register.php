<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class  register extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('register_model');
        
        
    }
    

    public function index()
    {
     
     $this->load->view('register/register');
     
    
    
    }

    public function register(){

        $this->form_validation->set_rules('nama','Username','required');
        $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[login.email]');
        $this->form_validation->set_rules('password','Password','required');
        
        if ($this->form_validation->run()==false){

            $this->load->view("register/register");
        
        }
        else{
            $this->register_model->register();
            redirect('login','refresh');

        }

    }

}

/* End of file .php */
