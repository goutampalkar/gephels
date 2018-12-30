<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html

	 */

	function __construct() {
         parent::__construct();
        $this->load->model('Demo');
    }
    public function installSetup()
    {
    	$result=$this->Demo->createDatabaseSchema();
    	echo $result;
    }

	public function index()
	{
		$this->load->view('index');
	}

	public function request()
	{
		
		 $table='cost';
		if(!empty($this->input->post('package')))
		{
   
		    $package = $this->input->post('package');
		    $id=$package;
		    $where='packate_id';
		    $result=$this->Demo->getData($table,$where,$id);
		   
		    if($package !== 'Select'){
		       
		        foreach($result->result() as $value){
		            echo "<option value='$value->cost_id>". $value->Days . "</option>";
		        }
		       
		    } 
		}
		elseif (!empty($this->input->post('stay'))) {

			 
			$cost_id= $this->input->post('stay');
			$where='cost_id';
			 $result=$this->Demo->getData($table,$where,$id);
			  foreach($result->result() as $value){
			  	echo $value->Rate;
			  }

		}

	}

	public function register()
	{
		$table='register';
		$data = array(
					'name' => $this->input->post('uname'),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'age' => $this->input->post('age'),
					'dob' => $this->input->post('dob'),
					'address' => $this->input->post('address'),
					'package' => $this->input->post('package'),
					'days' => $this->input->post('days'),
					'workshop' => $this->input->post('workshop'),
					'cost' =>$this->input->post('cost')
					 );
				 $result=$this->Demo->add($table,$data);
				 if ($result) {
				 	echo "data inserted succesfully..!";
				 	
				 }
				 else
				 {
				 	echo "data inserted failed..!";
				 	
				 }

	}
	public function demo()
	{
		$this->load->view('demo');
	}

}
