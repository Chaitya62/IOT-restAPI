<!--localhost/IOT/index.php/example/cat/user_id/18/device_id/2/passcode/0/YAright/3/test/4/Wtf/4/jk/6-->
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Example extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();

        //$this->load->model('media_model');
    }
    public function large_get(){
        $get = $this->uri->segment(1);
        echo $get;
    }

	public function cat_get() {
 //    //$dir = $this->uri->segment(3);    
 //    //if ($handle = opendir('../owncloud/media/'.$dir.'/')) {
 //      //  $blacklist = array('.', '..', 'ads', 'somefile.php');
         $i=4;
        $data = array();
        while ($this->uri->segment($i-1) != FALSE) {
        //if (!in_array($file, $blacklist)) {
            $index = $this->uri->segment($i-1);    
            $data[$index] = $this->uri->segment($i);        
            $i+=2;
        //}
        }
        
        if($this->authorize_data($data)){

        echo "IT worked";
        $this->add_values($data);
        $this->response($data, REST_Controller::HTTP_OK);
           }
        else
        {
            echo 0;
        }
            
                
   }
	
    public function authorize_data($auth){
        $this->load->model('device_model');
        $result = $this->device_model->get_data_by_id($auth['device_id']);
        foreach ($result as $row) {
            if($row->key == $auth['user_id'] && $row->passcode == $auth['passcode']){
                return True;

            }
            else{return False;}
            
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
            $data= [
            'device_id' => NULL,
            'parameter_id' => NULL,
            'value' => NULL

        ];
        //try{

            $data['device_id'] = $url['device_id'];
            $data['value'] = $url[$name];
            $data['parameter_id'] = $id;
            $this->value_model->add_value($data);
        }
    }

	public function category_get()
	{
			$cat = $this->media_model->category();
			 $this->response($cat, REST_Controller::HTTP_OK);
	}
	public function main_category_get()
	{
			$cat = $this->media_model->main_category();
			 $this->response($cat, REST_Controller::HTTP_OK);
	}
	public function genre_get()
	{
			$cat = $this->media_model->genre();
			$this->response($cat, REST_Controller::HTTP_OK);
	}
	public function channel_get()
	{
			$cat = $this->media_model->channel();
			$this->response($cat, REST_Controller::HTTP_OK);
	}
	public function language_get()
	{
			$cat = $this->media_model->language();
			$this->response($cat, REST_Controller::HTTP_OK);
	}
	public function data_sub_get()
	{
			$id = $this->uri->segment(3);
			$cat = $this->media_model->data_sub($id);
			$this->response($cat, REST_Controller::HTTP_OK);
	}
	public function data_sub_details_get()
	{
			$id = $this->uri->segment(3);
			$cat = $this->media_model->data_sub_details($id);
			$this->response($cat, REST_Controller::HTTP_OK);
	}
	
	
	
	
    public function users_get()
    {
        // Users from a data store e.g. database
        $users = [
            ['id' => 1, 'name' => 'John', 'email' => 'john@example.com', 'fact' => 'Loves coding'],
            ['id' => 2, 'name' => 'Jim', 'email' => 'jim@example.com', 'fact' => 'Developed on CodeIgniter'],
            ['id' => 3, 'name' => 'Jane', 'email' => 'jane@example.com', 'fact' => 'Lives in the USA', ['hobbies' => ['guitar', 'cycling']]],
        ];

        $id = $this->get('id');

        // If the id parameter doesn't exist return all the users

        if ($id === NULL)
        {
            // Check if the users data store contains users (in case the database result returns NULL)
            if ($users)
            {
                // Set the response and exit
                $this->response($users, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
            }
            else
            {
                // Set the response and exit
                $this->response([
                    'status' => FALSE,
                    'message' => 'No users were found'
                ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
            }
        }

        // Find and return a single record for a particular user.

        $id = (int) $id;

        // Validate the id.
        if ($id <= 0)
        {
            // Invalid id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // Get the user from the array, using the id as key for retreival.
        // Usually a model is to be used for this.

        $user = NULL;

        if (!empty($users))
        {
            foreach ($users as $key => $value)
            {
                if (isset($value['id']) && $value['id'] === $id)
                {
                    $user = $value;
                }
            }
        }

        if (!empty($user))
        {
            $this->set_response($user, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
        else
        {
            $this->set_response([
                'status' => FALSE,
                'message' => 'User could not be found'
            ], REST_Controller::HTTP_NOT_FOUND); // NOT_FOUND (404) being the HTTP response code
        }
    }

    public function users_post()
    {
        // $this->some_model->update_user( ... );
        $message = [
            'id' => 100, // Automatically generated by the model
            'name' => $this->post('name'),
            'email' => $this->post('email'),
            'message' => 'Added a resource'
        ];

        $this->set_response($message, REST_Controller::HTTP_CREATED); // CREATED (201) being the HTTP response code
    }

    public function users_delete()
    {
        $id = (int) $this->get('id');

        // Validate the id.
        if ($id <= 0)
        {
            // Set the response and exit
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        }

        // $this->some_model->delete_something($id);
        $message = [
            'id' => $id,
            'message' => 'Deleted the resource'
        ];

        $this->set_response($message, REST_Controller::HTTP_NO_CONTENT); // NO_CONTENT (204) being the HTTP response code
    }

}
