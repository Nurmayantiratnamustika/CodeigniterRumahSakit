<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller
{
    // sebuauh konstruktor yang pertama kali di eksekusi saat controller di jalankan
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pasien_model");
        $this->load->library('form_validation');
        $this->load->library('session');
        
    
    }

    public function index()
    {
        $data["pasien"] = $this->pasien_model->getallpasien();
        $this->load->view("admin/pasien/list",$data);

        if($this->session->userdata('level') != 'admin'){
         
            redirect('login/index','refresh');
            
        }
    }

    public function add()
    {
    
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('keluhan','Keluhan','required');
        $this->form_validation->set_rules('umur','Umur','required|numeric');
       
        if ($this->form_validation->run()){
        $this->pasien_model->tambahdatapasien(); 
        $this->session->set_flashdata('flash-data', 'ditambahkan');
        redirect('admin/pasien','refresh');
        }
        else{
            $this->load->view("admin/pasien/new_form");//tampil form add, yamg tampil viewnya

        }


    }
// id data yg akan di edit
// diisi nilai null dulu
    public function edit($id)
    {
        $data['pasien']=$this->pasien_model->getPasienById($id);
        $this->form_validation->set_rules('nama','Nama','required');
        $this->form_validation->set_rules('alamat','Alamat','required');
        $this->form_validation->set_rules('keluhan','Keluhan','required');
        $this->form_validation->set_rules('umur','Umur','required|numeric');
        
    
        if ($this->form_validation->run()){
            $this->pasien_model->ubahdatamhs(); 
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('admin/pasien','refresh');
        }
        else{
            $data["pasien"] = $this->pasien_model->getPasienById($id);//mengambil data untuk disimpan dalam form
           if(!$data["pasien"]) show_404();
            $this->load->view("admin/pasien/edit_form",$data);

        }
    }

    public function delete($id)
    {
        if(!isset($id)) show_404();

        if($this->pasien_model->hapus($id)){
            redirect(site_url('admin/pasien'));
        }
    }


    
}