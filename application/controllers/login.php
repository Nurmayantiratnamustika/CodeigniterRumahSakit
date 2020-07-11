<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        $this->load->library('session');
        
        
    }
    

    public function index()
    {
        
     $this->load->view('login/index');

        
    }

    public function proses_login(){
        $username=htmlspecialchars($this->input->post('username'));
        $password=htmlspecialchars($this->input->post('pass'));

        $cekLogin=$this->login_model->login($username,$password);

        if($cekLogin){
            foreach ($cekLogin as $row) ;
            
               
              $this->session->set_userdata('user',$row->username);
              $this->session->set_userdata('level',$row->level);
              $this->session->set_userdata('active',$row->active);

             if($this->session->userdata('level')=="admin" ){
                 
                 redirect('admin/Pasien');
             
             }
                elseif($this->session->userdata('level')=="pasien" && $this->session->userdata('active')== 1){
                     
                     redirect('user/datapasien');
                     
             }

             else if($this->session->userdata('level')=="pasien" && $this->session->userdata('active')== 0){

                $this->session->set_flashdata('message', 'Account must be verified');
                
                redirect('login','refresh');
                
                
             }
        }
        
        else{
            $data['pesan']="Username dan passsword anda salah";
            $data['title']="Login";
            $this->load->view('login/index',$data);
            // redirect('login/index','refresh');
                
        }
    }
                 

    public function logout(){
        
        $this->session->sess_destroy();
        
        redirect('login/index','refresh');
        
        
    }

}

/* Endloginollername.php */
