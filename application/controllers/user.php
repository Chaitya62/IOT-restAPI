<?php 
class user extends CI_Controller{

	public function login(){
		echo 'Hurah! it worked';
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$mobile_number = $this->input->post('mobile_number');
		$data = array(
			'name' => $name,
			'email'  =>  $email,
			'password'      =>  $password,
			'mobile_number' => $mobile_number
			);
		$this->user_model->add_user($data);
		redirect('home/signup');
	}


public function Login_request(){
	$pass_key= null;
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		 $result = $this->user_model-> get_data_by_email($email);
		foreach ($result as $row) {
			$pass_key = $row->password;
			$id = $row->id;
		}
		if($pass_key == $password){
			$result =  True;
			
			$this->session->set_userdata('id',$id);
		}
		else{
			$result = False;
		}
		$this->login1($result);

	}
public function login1($result){
		if ($result==True)
   {
   	   $this->device();
   	    //user continues loading page
   }
else
   {
   echo "fail"; //user is redirected to sign up page
   }
	}

	public function device(){
		$this->load->model('device_model');
		$result = $this->device_model->get_data();
		$data["result"] = $result;
		$parameters= [];
		$passcode = [];
		foreach ($result as $row) {
			$id = $row->id;
			$parameters[$id] = $this->device_model->get_parameter_by_id($id);
			$passcode[$id]  = $row->passcode;
		}
		$data["parameters"] = $parameters;
		$data["passcode"] = $passcode;
		$this->load->view('device_page',$data);
	}
	public function add_device(){
		$this->load->view('forms/add_device');
	}

}


 ?>