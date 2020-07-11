<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class userriwayat extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('riwayat_model');
        
    }
    

    public function index()
    {
        $data["riwayat"] = $this->riwayat_model->getriwayat();
        $this->load->view("user/riwayat/userriwayat",$data);

    }

    public function detail($id)
    {
        $data["riwayat"] = $this->riwayat_model->getRiwayatById($id);
        $this->load->view("user/riwayat/detailriwayat",$data);

    }

    public function laporan_pdf($id){
        $this->load->library('pdf');

        $data["riwayat"]=$this->riwayat_model->getRiwayatById($id);

        
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename="laporan";
        $this->pdf->load_view('user/riwayat/printriwayat',$data);
    }

}

