<?php

/**
* 
*/
class ILEPM_Model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
		$this->load->dbforge();
	}

	public function can_login($username, $password){
		
		$this->db->from('users');
		$this->db->where('username', $username);
		$this->db->where('password', sha1($password));

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function add_users($param){
		$data = array(
			'username'		=>	$param['username'],
			'password'		=>	$param['password'],
			'department'	=>	$param['department'],
			'usertype'		=>	$param['usertype'],
			'firstname'		=>	$param['firstname'],
			'lastname'		=>	$param['lastname'],
			'contactnumber'	=>	$param['contactnumber'],

		);

		return $this->db->insert('users', $data);
	}

	public function add_equipments($param, $unit_name){
		$data = array(
			'product_name'			=>	$param['prod_name'],
			'serial_no'				=>	$param['serial_no'],
			'procedures'				=>	$param['procedure'],
			'standard_criteria'		=>	$param['criteria'],
		);

		return $this->db->insert($unit_name, $data);
	}

	public function add_equipments_unit($unit, $unit_name){

		$this->db->query('use ilepm');

		$fields = array(
		  'ctrl_no' => array(
		    'type' => 'INT',
		    'constraint' => 11,
		    'unsigned' => TRUE,
		    'auto_increment' => TRUE
		  ),
		  'product_name' => array(
		    'type' => 'VARCHAR',
		    'constraint' => 255
		  ),
		  'serial_no' => array(
		    'type' => 'VARCHAR',
		    'constraint' => 255
		  ),
		  'procedures' => array(
		    'type' => 'VARCHAR',
		    'constraint' => 255
		  ),
		  'standard_criteria' => array(
		    'type' => 'VARCHAR',
		    'constraint' => 255
		  )
 		);

		$this->dbforge->add_field($fields);
		$this->dbforge->add_key('ctrl_no', TRUE);
		$this->dbforge->create_table($unit, TRUE);

		$data = array(
			'unit'		=>		$unit_name,
		);

		return $this->db->insert('equipment_unit_names', $data);
	}

	public function add_consumables($param){
		$data = array(
			'part_number'			=>	$param['part_no'],
			'unit_name'				=>	$param['unit_name'],
			'description'			=>	$param['description'],
		);

		return $this->db->insert('consumables', $data);
	}

	public function add_consumables_unit($param){
		$data = array(
			'unit'					=>	$param['unit_name'],
		);

		return $this->db->insert('consumables_unit_names', $data);
	}

	public function getSampleTable(){
		$query = $this->db->query('SELECT * FROM users;');

		return $query->result();
	}
	public function getUserByUsername($username){
		$this->db->from('users');
		$this->db->where('username', $username);

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesUnitNames(){
		$this->db->from('consumables_unit_names');

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesTableByUnit($unit_name){

		$this->db->from('consumables');
		$this->db->where('unit_name', $unit_name);

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesTable(){		

		$this->db->from('consumables');

		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function getEquipmentTable(){
		
		$this->db->from('digitalmultimeters');

		$query = $this->db->get();
		
		return $query->result();
	}

	public function getEquipmentUnitNames(){

		$this->db->from('equipment_unit_names');

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function getEquipmentTableByUnit($unit_name){

		$this->db->from($unit_name);

		$query = $this->db->get();

		return $query->result();
	}
}