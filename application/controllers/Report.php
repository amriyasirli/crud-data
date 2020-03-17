<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Report extends CI_Controller {

    public function index(){
		
		$data['judul']	= 'Belum Tersedia, Ya !';
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('konten/report', $data);
		$this->load->view('template/footer');
	}
        
}
        
    /* End of file  report.php */
        
                            