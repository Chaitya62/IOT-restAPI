<?php
class Home extends CI_Controller{

	public function view(){
		$this->load->view('public/homepage');
	}

	public function signup(){
		$this->load->view('forms/signup');
	}
	public function test(){
		$this->load->view('test');
	}

	public function login(){
		$this->load->view('forms/login');
	}

	public function test_form(){
	   $h = $this->input->post("hello[]");
	   print_r($h);
	}
	
	public function add_parameters($device_id){
		$data["device_id"] = $device_id;
		$this->load->view("forms/add_parameters",$data);
	}
	public function edit_device($id){
		$this->load->model('device_model');
		$result = $this->device_model->get_data_by_id($id);
		$data["result"] = $result;
		$this->load->view('forms/edit_device',$data);
	}
	
}




 ?>