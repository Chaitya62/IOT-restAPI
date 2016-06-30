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
	public function update_password($user_id,$data){

		$this->db->where(array('id'=> $user_id));
		$this->db->update($data);


		

	}
} 


 ?>