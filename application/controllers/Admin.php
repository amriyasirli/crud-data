<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Admin extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Admin_model');
	}
	
	public function index(){
		$data['admin']=$this->Admin_model->tampil();
		$data['judul']	= 'Data Admin';
		
		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('konten/admin_v', $data);
		$this->load->view('template/footer');
	}

	// public function add(){
	// 	$this->load->view('add');
	// }

	public function tambah(){
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' 		=> $this->input->post('alamat')
		);
		$this->Admin_model->tambah($data);
		redirect('admin');
	}

	public function edit(){
		$data['judul']	= 'Edit Data';

		$id = $this->uri->segment(3);
		$data['admin']=$this->Admin_model->getid($id);

		$this->load->view('template/header', $data);
		$this->load->view('template/sidebar');
		$this->load->view('konten/admin_edit', $data);
		$this->load->view('template/footer');
	}

	public function edit_data(){
		$id = $this->uri->segment(3);
		$data = array(
			'nama' 			=> $this->input->post('nama'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'alamat' 		=> $this->input->post('alamat')
		);
		$this->Admin_model->edit($data,$id);
		redirect('admin');
	}

	public function del(){
		$id = $this->uri->segment(3);
		$this->Admin_model->delete($id);
		// $this->session->set_flashdata('success','Delete');
		redirect('admin');
	}
        
}
        
    /* End of file  admin.php */
        
                            