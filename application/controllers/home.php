<?php 
class Home extends CI_Controller{
	public function values_for_chart(){

		$this->load->model('value_model');
		$values = [];
		$parameter_values  =  $this->value_model->get_values_by_parameter_id(24);   //parameter_id goes here 
		$count = 0;
		foreach ($parameter_values as $parameter_value) {
			$values[$count++] = $parameter_value->value; 
		}
		echo  "<pre>";
		echo print_r($values);
		echo "</pre>";


	}
	
	public function cards(){
		$this->load->model('device_model');
		$this->load->model('value_model');
		// $data["parameters"]= $this->device_model->
		$data["devices"] = $this->device_model->get_data();
		$value_per_page = 3;
		foreach($data["devices"] as $device) {
			
			$data ['parameter'.$device->id] = $this->device_model->get_parameter_by_id($device->id);

			$value_count = $this->device_model-> get_parameter_count_by_id($device->id);
			$data["carousel_count".$device->id] = ($value_count%$value_per_page == 0 ? floor($value_count/$value_per_page) 
														: floor($value_count/$value_per_page) + 1 );
			//print_r($data ['parameter'.$device->id]);
			$data['parameter'.$device->id]['count'] = $value_count;
			//print_r($data ['parameter'.$device->id]);
		}
		$value_data = $this->value_model->get_last_values(); 
		//cleaning the data 
		$values = [];
		foreach($value_data as $val){
			if(isset($val[0])){
				$values[$val[0]->parameter_id] = $val[0]->value;
				$values['timestamp'] = $val[0]->time;
					
			}
			
		}
		$data["values"] = $values;
       
		$this->load->view('public/device_cards',$data);
	}

	public function view(){
		$this->load->view('public/homepage');
	}

	public function signup(){
		$this->load->view('forms/signup');
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
	public function test(){
		$this->load->model('device_model');
		$this->load->model('value_model');
		$data["devices"] = $this->device_model->get_data();
		$value_per_page = 3;
		foreach($data["devices"] as $device) {
			$data ['parameter'.$device->id] = $this->device_model->get_parameter_by_id($device->id);

			$value_count = $this->device_model-> get_parameter_count_by_id($device->id);
			$data["carousel_count".$device->id] = ($value_count%$value_per_page == 0 ? floor($value_count/$value_per_page) 
														: floor($value_count/$value_per_page) + 1 );
			//print_r($data ['parameter'.$device->id]);
			$data['parameter'.$device->id]['count'] = $value_count;	
		}
		$value_data = $this->value_model->get_last_values(); 
		//cleaning the data 
		$values = [];
		foreach($value_data as $val){
			if(isset($val[0])){
				$values[$val[0]->parameter_id] = $val[0]->value;
				$values['timestamp'] = $val[0]->time;
					
			}
			
		}
		$data["values"] = $values;
		echo "<pre>";
		print_r($data);
		echo "</pre>";
		
		$this->load->view('public/carousel_test',$data);
	}
	// public function test2(){
	// 	$this->load->model('device_model');
	// 	$v = $this->device_model->get_parameter_by_id(12);
	// 	echo "<pre>";
	// 	print_r($v);
	// 	echo "</pre>";
	// }


}






 ?>