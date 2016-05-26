<?php 
	
class user_model extends CI_Model{

	public function add_user($data){
		$this->db->insert('users',$data);

	}

	public function get_data_by_email($email){
		
		$this->db->where(array('email' => $email));
		$data =  $this->db->get('users');
		return $data->result();
	}
} 


 ?>