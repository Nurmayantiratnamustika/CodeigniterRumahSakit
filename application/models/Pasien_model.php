<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien_model extends CI_Model
{

    public $image="default.jpg";
    public $id;


    public function getallpasien(){
        return $this->db->get('pasien')->result_array();
    }

    public function getalldatapasien(){
        $usr=$this->session->userdata('user');
       $this->db->select('*');
       $this->db->from('pasien');
       $this->db->where('nama', $usr);

       $query=$this->db->get();
       return $query->result_array();
       
       
       
    }
    
    

    
    public function tambahdatapasien()
    {
        

        $this->id = uniqid();
        $data= 
        [
        "nama"=>$this->input->post("nama",true),
        "alamat"=>$this->input->post('alamat',true),
        "umur"=>$this->input->post('umur',true),
        "keluhan"=>$this->input->post('keluhan',true),
        "ruanginap"=>$this->input->post('ruanginap',true),
        "email"=>$this->input->post('email',true),
        "telepon"=>$this->input->post('telepon',true),
        "image"=>$this->_uploadImage()

         ] ;
          $this->db->insert('pasien',$data);
    }

    private function _uploadImage()
{
    $config['upload_path']          = './upload/pasien/';//alamat file yg terupload
    $config['allowed_types']        = 'gif|jpg|png';//menentukan format file
    $config['file_name']            = $this->id;
    $config['overwrite']			= true;//menindih file yg sudah di upload saat di upload file baru
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    
    return "default.jpg";
}

private function _deleteImage($id)
{
    $pasien = $this->getPasienById($id);
    if ($pasien['image'] != "default.jpg") {
	    $filename = explode(".", $pasien['image'])[0];
		return array_map('unlink', glob(FCPATH."upload/pasien/$filename.*"));
    }
}

public function getPasienById($id)
    {
        // row adalah fungsi untuk mengembalikan satu data hasil query
        // sama seperti select * from peoducts where product_id = id
        $query=$this->db->get_where('pasien',array('id'=>$id));
        return $query->row_array();
    }

    public function ubahdatamhs()
    {
        
            $post = $this->input->post();
            $this->id = $post["id"];
            $this->nama= $post["nama"];
            $this->alamat =$post['alamat'];
            $this->umur =$post['umur'];
            $this->keluhan =$post['keluhan'];
            $this->ruanginap =$post['ruanginap'];
            $this->email =$post['email'];
            $this->telepon =$post['telepon'];
            if(!empty($_FILES["image"]["name"])){
                $this->image = $this->_uploadImage();
    
            }
            else{
                $this->image = $post["old_image"];
            }

            $this->db->update('pasien',$this, array('id' => $post['id']));
    
        }
    

    public function hapus($id)
    {

        $this->_deleteImage($id);
        return $this->db->delete('pasien',array("id" => $id));
    }
}

   
   /*
    private $_table="products";

    public $product_id;
    public $name;
    public $price;
    public $image="default.jpg";
    public $description;

    
    public function rules()
    {
        return[
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],

            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        // result= fungsi untuk mengambil semua data dari query
        // ini sama seprti select * from products;
        // akan mengembalikan array yang berisi object dari row
        return $this->db->get($this->_table)->result();
      
    }

    public function getById($id)
    {
        // row adalah fungsi untuk mengembalikan satu data hasil query
        // sama seperti select * from peoducts where product_id = id
        return $this->db->get_where($this->_table,["product_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post(); //ambil data dari form
        $this->product_id = uniqid(); //membuat id unik
        $this->name= $post["name"]; //isi field nama
        $this->price=$post['price']; //isi field price
        $this->image=$this->_uploadImage();
        $this->description= $post["description"]; //isi field description
        $this->db->insert($this->_table,$this);// this yang terakhir berisi data yang akan disimpan
    }

    public function update()
    {
        $post = $this->input->post();
        $this->product_id = $post["id"];
        $this->name= $post["name"];
        $this->price =$post['price'];

        if(!empty($_FILES["image"]["name"])){
            $this->image = $this->_uploadImage();

        }
        else{
            $this->image = $post["old_image"];
        }

        $this->description = $post["description"];
        $this->db->update($this->_table,$this, array('product_id' => $post['id']));

    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table,array("product_id" => $id));
    }

    
*/

