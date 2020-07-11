<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class userbayar extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('bayar_model');
        
    }
    

    public function index()
    {
      

    }

    public function bayar()
    {
        $data["bayar"] = $this->bayar_model->getallbayar();
        $data["total"] = $this->bayar_model->gettotal();
        $this->load->view("user/userbayar/listbayar",$data);

        

    }

    public function laporan_pdf($id){
        $this->load->library('pdf');

        $data['bayar']=$this->bayar_model->cetakById($id);
        $data["total"] = $this->bayar_model->gettotal();
        
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename="laporan";
        $this->pdf->load_view('user/userbayar/printbayar',$data);
    }
}

