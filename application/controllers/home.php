<?php 
class Home extends CI_Controller{
	public function cards(){
		$this->load->model('device_model');
		$this->load->model('value_model');
		// $data["parameters"]= $this->device_model->
		$data["devices"] = $this->device_model->get_data();
		foreach($data["devices"] as $device) {
			$data ['parameter'.$device->id] = $this->device_model->get_parameter_by_id($device->id);

			//print_r($data ['parameter'.$device->id]);
		}
		$values = $this->value_model->get_last_values(); 
        //$get = $this->uri->segment(1);
        // foreach ($values as $values_array) {
        // 		foreach ($values_array as $value) {
        // 			array_push($data['parameter'.$value->device_id],array('parameter_value'=>$value->value)); 
        // 	// 		echo "Parameter id:". $key->parameter_id;
        // 	// 		echo "<br>";
        // 	// 		echo "Value:" . $key->value;
        // 	// echo "<br>";	
        // 		}
        		
        // }
        
		// foreach ($data["devices"] as $key) {
		// 	print_r($key->device_name);
		// 	echo "<br>";
		// }
		// print_r($data["devices"]);
		$this->load->view('public/device_cards',$data);
	}

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