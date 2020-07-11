<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class riwayat_model extends CI_Model {

    public function getallriwayat(){
        return $this->db->get('riwayat')->result_array();
    }

    public function getriwayat(){
        
        $usr=$this->session->userdata('user');
        $this->db->select('*');
        $this->db->from('riwayat');
        $this->db->join('pasien', 'riwayat.id_pasien = pasien.id', 'inner');
        $this->db->where('pasien.nama', $usr);
    
        $query=$this->db->get();
        return $query->result_array();
      
    }   

    public function tambahriwayat()
    {
        
        $data= 
        [
        "id_pasien"=>$this->input->post("id_pasien",true),
        "tanggal_periksa"=>$this->input->post('tanggal_periksa',true),
        "keluhan_utama"=>$this->input->post('keluhan_utama',true),
        "riwayat_sekarang"=>$this->input->post('riwayat_sekarang',true),
        "riwayat_dahulu"=>$this->input->post('riwayat_dahulu',true),
        "riwayat_keluarga"=>$this->input->post('riwayat_keluarga',true),
        "riwayat_alergi"=>$this->input->post('riwayat_alergi',true)

        
         ] ;
          $this->db->insert('riwayat',$data);
    }

    public function ubahdatariwayat()
    {
        $id_riwayat = $this->input->post("id_riwayat");
        $id_pasien = $this->input->post("id_pasien");
        $tanggal_periksa= $this->input->post("tanggal_periksa");
        
        $riwayat_sekarang = $this->input->post('riwayat_sekarang');
        $riwayat_dahulu =$this->input->post('riwayat_dahulu');
        $riwayat_keluarga =$this->input->post('riwayat_keluarga');
        $riwayat_alergi =$this->input->post('riwayat_alergi');
       
        $hasil=$this->db->query("UPDATE riwayat SET id_pasien='$id_pasien',tanggal_periksa='$tanggal_periksa', riwayat_sekarang='$riwayat_sekarang',riwayat_dahulu='$riwayat_dahulu',riwayat_keluarga='$riwayat_keluarga',riwayat_alergi='$riwayat_alergi' WHERE id_riwayat='$id_riwayat'");
        return $hasil;
        
    
        }

        public function getRiwayatById($id)
    {
        // row adalah fungsi untuk mengembalikan satu data hasil query
        // sama seperti select * from peoducts where product_id = id
        $query=$this->db->get_where('riwayat',array('id_riwayat'=>$id));
        return $query->row_array();
    }

    public function hapus($id)
    {

        return $this->db->delete('riwayat',array("id_riwayat" => $id));
    }


    public function cetakRiwayat($id)
    {
        $query=$this->db->get_where('riwayat',array('id_riwayat'=>$id));
        return $query->row_array();
    }

    
}

