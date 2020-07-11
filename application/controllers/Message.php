<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//function ini akan meload folder view dg nama file welcome
		$this->load->view('welcome_message');
	}

	public function about(){
		// fungsi untuk me-load view about.php
		$this->load->view('about');
	}

	public function contact(){
		// fungsi untuk me-load view contact.php
		$this->load->view('contact');
	}

	public function percobaan()
	{
		//untuk mencoba ini maka menggunakan http://localhost:8080/tokofurniture/index.php/welcome/percobaan
		//welcome adalah nama kelas
		//percobaan nama function
		echo "ini adalah function percobaan";
	}
}
