<?php 


//defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';
class JSON extends REST_Controller{
	
public function authorize($auth){
		$this->load->model('device_model');
		$result = $this->device_model->get_data_by_id($auth['device_id']);
		foreach ($result as $row) {
			if($row->key == $auth['user_id'] && $row->passcode == $auth['passcode']){
				return True;

			}
			else{return False;}
			
		}
	}
public function cat_get() {
	//$dir = $this->uri->segment(3);	
	//if ($handle = opendir('../owncloud/media/'.$dir.'/')) {
	  //  $blacklist = array('.', '..', 'ads', 'somefile.php');
		$i=4;
		$data = array();
	    while ($this->uri->segment($i-1) != FALSE) {
		//if (!in_array($file, $blacklist)) {
			$index = $this->uri->segment($i-1);	   
		    $data[$index] = $this->uri->segment($i);        
		    $i+=2;
		//}
	    }
	    
	    if($this->authorize($data)){

	    echo "IT worked";
	    $this->add_values($data);
	    //$this->response($data, REST_Controller::HTTP_OK);
	 		}
	 	else
	 	{
	 		echo 0;
	 	}
	 		
		 		
	}

	public function add_values($url)
	{
		$parameters = $this->device_model->get_parameter_by_id($url['device_id']);
		$this->load->model('value_model');
		foreach ($parameters as $parameter) {
			$para[$parameter->parameter_name] = $parameter->parameter_id; 
		}

		foreach ($para as $name => $id) {
			try{
			$data=[];

			$data['device_id'] = $url['device_id'];
			$data['value'] = $url[$name];
			$data['parameter_id'] = $id;
			$this->value_model->add_value($data);
		}
		catch(exception $e){
			echo $e;
		// 	$data=[];

		// 	$data['device_id'] = $url['device_id'];
		// 	$data['value'] = 0;
		// 	$data['parameter_id'] = $id;
		// 	$this->value_model->add_value($data);	
		// }
		}

	}
		//}


	
	

}
}



 ?>