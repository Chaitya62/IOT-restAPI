<?php 
class value_model extends CI_Model{

	public function add_value($data){
		
		$this->db->insert('parameter_values',$data);
	}

	public function get_last_values(){
		$this->load->model('device_model');
		$result = [];
		 $devices = $this->device_model->get_data();
		foreach ($devices as $device) {
			$parameters = $this->device_model-> get_parameter_by_id($device->id);
			foreach ($parameters as $parameter) {
				$parameter_id =  $parameter->parameter_id;
				$this->db->where(array('parameter_id' => $parameter_id));
				$result[$parameter_id] = $this->db->get('parameter_values')->result();
			}
		}
		return $result;
	}


}