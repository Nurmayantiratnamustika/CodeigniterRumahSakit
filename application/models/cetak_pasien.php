<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class cetak_pasien extends CI_Model {

    public function cetakById($id)
    {
            // row adalah fungsi untuk mengembalikan satu data hasil query
            // sama seperti select * from peoducts where product_id = id
            $query=$this->db->get_where('pasien',array('id'=>$id));
            return $query->row_array();
        
    }
    

}
?>
  