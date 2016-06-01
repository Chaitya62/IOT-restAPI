<?php
class JSON extends CI_Controller {
	/*example uri localhost/IOT/index.php/JSON/user_get/id/2/parameter_id/32/user_id/5/temperature/10 
	  example output {"id":"2","parameter_id":"32","user_id":"5","temperature":"10"}

	*/	
	public  function user_get(){
	$data1 = [];
	$count = 4;
  	while($this->uri->segment($count) != FALSE){
  		$index = $this->uri->segment($count-1);
  		$index = htmlentities($index);
  		$data1[$index] = $this->uri->segment($count);
  		$count+=2;
  	}
	//$data["json"] = json_encode($data1);
	//$this->load->view("JSON_view",$data);
	$data1 = json_encode($data1);
	echo $data1;
	}
}
 ?>
 