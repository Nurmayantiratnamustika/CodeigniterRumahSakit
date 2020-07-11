<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bayar_model');
        $this->load->library('form_validation');
        
        
    }
    

    public function index()
    {
        $data["bayar"] = $this->bayar_model->tampilbayar();
        $this->load->view("admin/pembayaran/list_bayar",$data);

    }

    public function addBayar()
    {
    
        $this->form_validation->set_rules('tarif','Tarif','required|numeric');
        $this->form_validation->set_rules('tanggal','Tanggal','required|date');
      
       
        if ($this->form_validation->run()){
        $this->bayar_model->tambahbayar(); 
        $this->session->set_flashdata('flash-data', 'ditambahkan');
        redirect('admin/pembayaran','refresh');
        }
        else{
            $this->load->view("admin/pembayaran/form_bayar");//tampil form add, yamg tampil viewnya

        }


    }

    public function editBayar($id)
    {
        $data['bayar']=$this->bayar_model->getbayar($id);
        $this->form_validation->set_rules('tarif','Tarif','required|numeric');
        $this->form_validation->set_rules('tanggal','Tanggal','required|date');
    
    
        if ($this->form_validation->run()){
            $this->bayar_model->ubahdatabayar(); 
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('admin/pembayaran','refresh');
        }
        else{
            $data["bayar"] = $this->bayar_model->getbayar($id);//mengambil data untuk disimpan dalam form
            $this->load->view("admin/pembayaran/edit_bayar",$data);

        }
    }
    public function delete($id)
    { 
       if($this->bayar_model->hapus($id)){
            redirect(site_url('admin/pembayaran'));
        }
    }
}
