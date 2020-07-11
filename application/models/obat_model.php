<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class obat_model extends CI_Model {

    public function getallobat(){
        return $this->db->get('obat')->result_array();
    }

    public function gettotal(){
        
            $this->db->select('id_obat,id_pasien,nama_obat,jumlah,harga, (jumlah * harga) as total');
            $this->db->from('obat');
            
            
            $query=$this->db->get();
    
                return $query->result_array();
          
        }   

        public function getObatById($id)
        {
            // row adalah fungsi untuk mengembalikan satu data hasil query
            // sama seperti select * from peoducts where product_id = id
            $query=$this->db->get_where('obat',array('id_obat'=>$id));
            
        }

        public function tambahobat()
    {
        
        $data= 
        [
        "id_pasien"=>$this->input->post("id_pasien",true),
        "nama_obat"=>$this->input->post('nama_obat',true),
        "jumlah"=>$this->input->post('jumlah',true),
        "harga"=>$this->input->post('harga',true),
        
         ] ;
          $this->db->insert('obat',$data);
    }

    public function gettotalharga(){
        
        $usr=$this->session->userdata('user');
        $this->db->select('id_obat,id_pasien,nama_obat,jumlah,harga, (jumlah * harga) as total');
        $this->db->from('obat');
        $this->db->join('pasien', 'obat.id_pasien = pasien.id', 'inner');
        $this->db->where('pasien.nama', $usr);
    
        $query=$this->db->get();
        return $query->result_array();
      
    }   

    public function gettotalhar(){
        
        $usr=$this->session->userdata('user');
        $this->db->select('id_pasien,sum(jumlah * harga) as totalobat');
        $this->db->from('obat');
        $this->db->join('pasien', 'obat.id_pasien = pasien.id', 'inner');
        $this->db->where('pasien.nama', $usr);

        $query=$this->db->get();

      return $query->row_array();
      
    }

    public function ubahdataobat()
    {
        $id_obat = $this->input->post("id");
        $id_pasien = $this->input->post("id_pasien");
        $nama_obat= $this->input->post("nama_obat");
        $jumlah = $this->input->post('jumlah');
        $harga =$this->input->post('harga');
       
       
        $hasil=$this->db->query("UPDATE obat SET id_pasien='$id_pasien',nama_obat='$nama_obat', jumlah='$jumlah',harga='$harga' WHERE id_obat='$id_obat'");
        return $hasil;
        
    
        }

        public function hapus($id)
        {
    
            return $this->db->delete('obat',array("id_obat" => $id));
        }

        public function cetakById($id)
        {
            $this->db->select('id_obat,id_pasien,nama_obat,jumlah,harga, (jumlah * harga) as total');
            $this->db->from('obat');
            $this->db->where('id_pasien', $id);
        
            $query=$this->db->get();
            return $query->result_array();
          
        }
        

    }



