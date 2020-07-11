<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class obat extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('obat_model');
        $this->load->library('form_validation');
        
        
    }
    

    public function index()
    {
        $data["obat"] = $this->obat_model->gettotal();
        $this->load->view("admin/obat/list_obat",$data);
    }

    public function addObat()
    {
    
        $this->form_validation->set_rules('nama_obat','Nama Obat','required');
        $this->form_validation->set_rules('harga','Harga','required');
      
       
        if ($this->form_validation->run()){
        $this->obat_model->tambahobat(); 
        $this->session->set_flashdata('flash-data', 'ditambahkan');
        redirect('admin/obat','refresh');
        }
        else{
            $this->load->view("admin/obat/form_obat");//tampil form add, yamg tampil viewnya

        }


    }

    public function editObat($id)
    {
        $data['obat']=$this->obat_model->getObatById($id);
        $this->form_validation->set_rules('nama_obat','Nama Obat','required');
  
    
    
        if ($this->form_validation->run()){
            $this->obat_model->ubahdataobat(); 
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('admin/obat','refresh');
        }
        else{
            $data["obat"] = $this->obat_model->getObatById($id);//mengambil data untuk disimpan dalam form
            $this->load->view("admin/obat/edit_obat",$data);

        }
    }

    public function delete($id)
    {
        if(!isset($id)) show_404();

        if($this->obat_model->hapus($id)){
            redirect(site_url('admin/obat'));
        
        }
    }
}
