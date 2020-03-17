<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Grafik extends CI_Controller {

    public function index(){
		
		$data['judul']	= 'Belum Tersedia !';
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('konten/grafik', $data);
		$this->load->view('template/footer');
	}
        
}
        
    /* End of file  grafik.php */
        
                            