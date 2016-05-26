<?php 
class device_model extends CI_Model{

	public function get_data(){
		$key = $this->session->userdata('id');
		$this->db->where(array('key'=>$key));
		$data =	$this->db->get('devices');
		return $data->result();
	}

	public function get_data_by_id($id){

		$this->db->where(array('id' => $id));
		$data =  $this->db->get('devices');
		return $data->result();
	}


	public function add_device($data){
		
		$this->db->insert('devices',$data);
	}
	public function edit_device($id,$data){
		$this->db->where(array('id' => $id));
		$this->db->update('devices',$data);

	} 

	public function delete_device($id){

		$this->db->where(['id' => $id]);
		$this->db->delete('devices');
	}

	public function add_parameter($data){
		
		$this->db->insert('parameters',$data);
	}

	public function get_parameter_by_id($device_id){
		
		$this->db->where(array('device_id' =>  $device_id));
		$data =  $this->db->get('parameters');
		return $data->result();
	}

	public function edit_parameter($id,$data){
		$this->db->where(array('id' => $id));
		$this->db->update('parameters',$data);


	}

}


 ?>