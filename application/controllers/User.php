<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class User extends CI_Controller {

    public function index(){
		
		$data['judul']	= 'Untuk Bagian User, silahkan buat sendiri ya !';
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('konten/user_v', $data);
		$this->load->view('template/footer');
	}
        
}
        
    /* End of file  user.php */
        
                            