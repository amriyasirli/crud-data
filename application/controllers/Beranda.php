<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	
	public function index()
	{
		$data['judul']	= 'Beranda';
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar', $data);
		$this->load->view('konten/beranda_v', $data);
		$this->load->view('template/footer', $data);
	}
}
