<?php 

class device extends CI_Controller{
	public function add_device(){
	$this->load->model('device_model');
	$device_name = $this->input->post('device_name');
	$device_id = $this->input->post('device_id');
	$about_device = $this->input->post('about_device');
	$key = $this->session->userdata('id'); //later stages will take users key
	$passcode = rand($key,$key+10000);
	$data = array(
			'device_name' => $device_name,
			'device_id'  =>  $device_id,
			'about_device'      =>  $about_device,
			'key' => $key,
			'passcode' =>  $passcode

			);
	$this->device_model->add_device($data);
	$this->session->set_userdata('passcode', $passcode);
	redirect('user/device');

	}
	public function edit_device($id){
	$this->load->model('device_model');
	$device_name = $this->input->post('device_name');
	$device_id = $this->input->post('device_id');
	$about_device = $this->input->post('about_device');
	$key = $this->session->userdata('id');; //later stages will take users key
	$data = array(
			'device_name' => $device_name,
			'device_id'  =>  $device_id,
			'about_device'      =>  $about_device,
			'key' => $key
			);
	$this->device_model->edit_device($id,$data);
	redirect('user/device');

	}

	public function delete_device($id){
		$this->load->model('device_model');
		$this->device_model->delete_device($id);
		redirect('user/device');
	}
	
	public function add_parameters($device_id){
		$parameters = $this->input->post("parameter_name[]");
		$this->load->model('device_model');
		foreach ($parameters as $parameter_name) {
			$data = [ 
				'parameter_name' => $parameter_name,
				'device_id' => $device_id
			];
			$this->device_model->add_parameter($data);
			
		}
		redirect("user/device");
	}

	public function update_parameter(){
		$this->load->model('device_model');
	$parameter_names = $this->input->post('parameter_name[]');
	$parameter_ids = $this->input->post('parameter_id[]');
	$count = 0;
	foreach ($parameter_names as $parameter_name){
		$id = $parameter_ids[$count];	
		$data = array('parameter_name' => $parameter_name);
		$this->device_model->edit_parameter($id,$data);
		$count = $count + 1;
	}
	 redirect('user/device');
	 }

}



 ?>