<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class datapasien extends CI_Controller
{
    // sebuauh konstruktor yang pertama kali di eksekusi saat controller di jalankan
    public function __construct()
    {
        parent::__construct();
        $this->load->model("pasien_model");
        $this->load->library('form_validation');
        $this->load->model('cetak_pasien');
        
    
    }

    public function index()
    {
        $data["pasien"] = $this->pasien_model->getalldatapasien();
        $this->load->view("user/userPasien/DataPasien",$data);

        $this->load->model('login_model');
        if($this->session->userdata('level') != 'pasien'){
         
        redirect('login/index','refresh');
    }
}

    public function detail($id){
        $data['pasien']=$this->pasien_model->getPasienByID($id);
        $this->load->view('user/userPasien/detailPasien',$data);
    }
    
    public function laporan_pdf($id){
        $this->load->library('pdf');

        $data['pasien']=$this->cetak_pasien->cetakById($id);
        
        $this->pdf->setPaper('A4','potrait');
        $this->pdf->set_option('isRemoteEnabled', TRUE);
        $this->pdf->filename="laporan";
        $this->pdf->load_view('user/userPasien/laporanpasien',$data);
    }


}