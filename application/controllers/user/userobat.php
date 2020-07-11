<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class userobat extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('obat_model');
        
    }
    
    public function index()
    {
        
    }

    public function obat()
    {

        $data["obat"] = $this->obat_model->gettotalharga();
        $data["obattot"] = $this->obat_model->gettotalhar();
        $this->load->view("user/userobat/userobat",$data);

        

    }

    public function laporan_pdf($id){
        $this->load->library('pdf');

        $data['obat']=$this->obat_model->cetakById($id);
        $data["obattot"] = $this->obat_model->gettotalhar();
        
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->filename="laporan";
        $this->pdf->load_view('user/userobat/printobat',$data);
    }
}


