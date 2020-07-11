<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class bayar_model extends CI_Model {

    
    public function getallbayar(){
        $usr=$this->session->userdata('user');
        $this->db->select('pembayaran.id_bayar,pasien_id,nama_dokter,tanggal,id_tindakan,tindakan.id_bayar,tindakan.id_pasien,jenis_tindakan,tarif');
        $this->db->from('pembayaran');
        $this->db->join('tindakan', 'pembayaran.id_bayar = tindakan.id_bayar', 'inner');
        $this->db->join('pasien', 'pembayaran.pasien_id = pasien.id', 'inner');
        
        $this->db->where('pasien.nama',$usr);        
        $query=$this->db->get();

            return $query->result_array();
       
}
        
public function gettotal(){
    $usr=$this->session->userdata('user');
    
        $this->db->select('sum(tarif) as total');
        $this->db->from('pembayaran');
        $this->db->join('tindakan', 'pembayaran.id_bayar = tindakan.id_bayar', 'inner');
        $this->db->join('pasien', 'pembayaran.pasien_id = pasien.id', 'inner');
        
        $this->db->where('pasien.nama',$usr);
        
        $query=$this->db->get();

            return $query->row_array();
         
}

    public function getBayarById($id)
    {
        // row adalah fungsi untuk mengembalikan satu data hasil query
        // sama seperti select * from peoducts where product_id = id
        $query=$this->db->get_where('pasien',array('id'=>$id));
        return $query->row_array();
    }


    public function tambahbayar()
    {

        $data= 
        [
        "id_bayar"=>$this->input->post("id_bayar",true),
        "pasien_id"=>$this->input->post("id_pasien",true),
        "nama_dokter"=>$this->input->post('nama_dokter',true),
        "tanggal"=>$this->input->post('tanggal',true)

         ] ;
         $this->db->insert('pembayaran',$data);
         $data1=[
            "id_tindakan"=>$this->input->post("id_tindakan",true),
            "id_bayar"=>$this->input->post("id_bayar1",true),
            "id_pasien"=>$this->input->post("id_pasien1",true),
            "jenis_tindakan"=>$this->input->post("tindakan",true),
            "tarif"=>$this->input->post('tarif',true)
         ];    
          $this->db->insert('tindakan',$data1);
    }

    public function tampilbayar(){
        $this->db->select('*');
        $this->db->from('pembayaran');
        $this->db->join('tindakan', 'pembayaran.id_bayar = tindakan.id_bayar', 'inner');
        $query=$this->db->get();
        return $query->result_array();
   
    }
       
    public function ubahdatabayar()
    {
      
        $id_bayar1 = $this->input->post("id_bayar");
        $pasien_id= $this->input->post("id_pasien");
        $nama_dokter = $this->input->post('nama_dokter');
        $tanggal =$this->input->post('tanggal');
       
       
        $id_tindakan = $this->input->post('id_tindakan');
        $id_bayar2 = $this->input->post('id_bayar1');
        $id_pasien =$this->input->post('id_pasien1');
        $jenis_tindakan =$this->input->post('tindakan');
        $tarif =$this->input->post('tarif');  

        $hasil=$this->db->query("UPDATE pembayaran,tindakan SET pembayaran.id_bayar='$id_bayar1',pembayaran.pasien_id='$pasien_id',
        pembayaran.nama_dokter='$nama_dokter',pembayaran.tanggal='$tanggal',tindakan.id_tindakan='$id_tindakan',tindakan.id_bayar='$id_bayar2',
        tindakan.id_pasien='$id_pasien',tindakan.jenis_tindakan='$jenis_tindakan',tindakan.tarif='$tarif' WHERE pembayaran.id_bayar=tindakan.id_bayar and pembayaran.id_bayar=$id_bayar1");
        return $hasil;
        
    
        }
    
        public function getbayar($id){
        
                $this->db->select('pembayaran.id_bayar,pasien_id,nama_dokter,tanggal,id_tindakan,tindakan.id_bayar,tindakan.id_pasien,jenis_tindakan,tarif');
            
                $this->db->from('pembayaran');
                $this->db->join('tindakan', 'pembayaran.id_bayar = tindakan.id_bayar', 'inner');
                $this->db->where('pembayaran.id_bayar',$id);        
                $query=$this->db->get();
        
                    return $query->row_array();
                 
        }
        public function hapus($id)
        {
            $hasil=$this->db->query("DELETE pembayaran,tindakan FROM pembayaran INNER JOIN tindakan   
            on pembayaran.id_bayar= tindakan.id_bayar where  pembayaran.id_bayar = $id");
            return $hasil;
            
        
        }

        public function cetakById($id)
        {
            $this->db->select('pembayaran.id_bayar,pasien_id,nama_dokter,tanggal,id_tindakan,tindakan.id_bayar,tindakan.id_pasien,jenis_tindakan,tarif');
            $this->db->from('pembayaran');
            $this->db->join('tindakan', 'pembayaran.id_bayar = tindakan.id_bayar', 'inner');
            $this->db->join('pasien', 'pembayaran.pasien_id = pasien.id', 'inner');
            $this->db->where('pembayaran.pasien_id', $id);
            
        
            $query=$this->db->get();
            return $query->result_array();
          
        }

}

