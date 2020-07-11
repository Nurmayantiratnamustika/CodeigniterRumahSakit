<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('riwayat_model');
        $this->load->library('form_validation');
        
        
    }
    

    public function index()
    {
        $data["riwayat"] = $this->riwayat_model->getallriwayat();
        $this->load->view("admin/riwayat/datariwayat",$data);

    }

    public function addRiwayat()
    {
    
        $this->form_validation->set_rules('tanggal_periksa','Tanggal Periksa','required|date');
        $this->form_validation->set_rules('keluhan_utama','Keluhan Utama','required');
      
       
        if ($this->form_validation->run()){
        $this->riwayat_model->tambahriwayat(); 
        $this->session->set_flashdata('flash-data', 'ditambahkan');
        redirect('admin/riwayat','refresh');
        }
        else{
            $this->load->view("admin/riwayat/form_riwayat");//tampil form add, yamg tampil viewnya

        }


    }

    public function editRiwayat($id)
    {
        $data['verifi']=$this->riwayat_model->getRiwayatById($id);
        $this->form_validation->set_rules('tanggal_periksa','Tanggal Periksa','required|date');
        $this->form_validation->set_rules('keluhan_utama','Keluhan Utama','required');
    
    
        if ($this->form_validation->run()){
            $this->riwayat_model->ubahdatariwayat(); 
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('admin/riwayat','refresh');
        }
        else{
            $data["verifi"] = $this->riwayat_model->getRiwayatById($id);//mengambil data untuk disimpan dalam form
            $this->load->view("admin/riwayat/edit_riwayat",$data);

        }
    }

    public function delete($id)
    {
        if(!isset($id)) show_404();

        if($this->riwayat_model->hapus($id)){
            redirect(site_url('admin/riwayat'));
        }
    }

}


