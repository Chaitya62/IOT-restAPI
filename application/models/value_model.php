<?php 
class value_model extends CI_Model{

	public function add_value($data){
		
		$this->db->insert('parameter_values',$data);
	}



}