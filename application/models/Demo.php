<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Model {

 function __construct() {
         parent::__construct();
         $this->load->database();
    }

    public function createDatabaseSchema()
    {
    	$this->load->dbforge();
    	$result=0;
    	$result +=$this->_createCost();
    	$result +=$this->_createPackage();
    	$result +=$this->_createRegister();
    	return $result;

    }

    public function _createCost()
    {
    	$field = array('cost_id' =>array(
    							'type' => 'int',
    							'constraint' => 10,
    							'unsigned' =>true,
    							'auto_increament' => true

    						),
    					'Days' =>array(
    							'type' => 'varchar',
    							'constraint' => 50
    						),
    					'Rate' =>array(
    							'type' => 'varchar',
    							'constraint' => 10
    							

    						),
    					'package_id' =>array(
    							'type' => 'int',
    							'constraint' => 10
    							

    						),


   				 );

    	$this->dbforge->add_field($field);
    	$this->dbforge->add_key('cost_id',true);
    	$attributes = array('ENGINE' => 'InnoDB');
    	$this->dbforge->create_table('cost',true,$attributes);
    }

    public function _createPackage()
    {
    	$field = array('package_id' =>array(
    							'type' => 'int',
    							'constraint' => 10,
    							'unsigned' =>true,
    							'auto_increament' => true

    						),
    					'package_name' =>array(
    							'type' => 'varchar',
    							'constraint' => 50
    						)

   				 );

    	$this->dbforge->add_field($field);
    	$this->dbforge->add_key('package_id',true);
    	$attributes = array('ENGINE' => 'InnoDB');
    	$this->dbforge->create_table('package',true,$attributes);
    }
    public function _createRegister()
    {
    	$field = array('id' =>array(
    							'type' => 'int',
    							'constraint' => 10,
    							'unsigned' =>true,
    							'auto_increament' => true

    						),
    					'name' =>array(
    							'type' => 'varchar',
    							'constraint' => 50
    						),
    					'email' =>array(
    							'type' => 'varchar',
    							'constraint' => 80    							

    						),
    					'phone' =>array(
    							'type' => 'int',
    							'constraint' => 10    							

    						),
    					'age' =>array(
    							'type' => 'int',
    							'constraint' => 10    							

    						),
    					'dob' =>array(
    							'type' => 'date'   													

    						),
    					'address' =>array(
    							'type' => 'varchar',
    							'constraint' => 100    							

    						),
    					'package' =>array(
    							'type' => 'varchar',
    							'constraint' => 20    							

    						),
    					'days' =>array(
    							'type' => 'varchar',
    							'constraint' => 30    							

    						),
    					'workshop' =>array(
    							'type' => 'varchar',
    							'constraint' => 10    							

    						),
    					'cost' =>array(
    							'type' => 'int',
    							'constraint' => 20    							

    						),



   				 );

    	$this->dbforge->add_field($field);
    	$this->dbforge->add_key('id',true);
    	$attributes = array('ENGINE' => 'InnoDB');
    	$this->dbforge->create_table('register',true,$attributes);
    }









	public function getData($table,$where,$id)
	{
	
		$data=$this->db->where($where,$id)
					->db->get($table);					
	}
	public function add($table,$data)
	{
		$this->db->insert($table,$data);
	}
}