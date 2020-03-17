<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Admin_model extends CI_Model {
                        
    public function tampil(){
		return $query=$this->db->get('admin')->result();
	}

	public function getid($id){
		$this->db->where('id',$id);
		return $this->db->get('admin')->result();
	}

	public function tambah($data){
		return $this->db->insert('admin',$data);
		
	}

	public function edit($data,$id){
		$this->db->where('id',$id);
		return $this->db->update('admin',$data);
	}

	public function delete($id){
		$this->db->where('id',$id);
		return $this->db->delete('admin');
	}
                        
                            
                        
}
                        
/* End of file admin.php */
    
                        