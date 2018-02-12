<?php

/**
* 
*/
class ILEPM_Model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
		
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

	/*						Create														*/

	/*				Users						*/
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

	/*				Consumables						*/

	public function add_consumables_unit($param){

		$consumable = array(
			'part_number'		=>	$param['part_no'],
			'description'		=>	$param['description'],
			'category'			=>	$param['category'],
			);

		$this->db->insert('consumable', $consumable);

		$idConsumable = $this->db->insert_id();

		$quantityperconsumableunit = array(
			'idConsumableUnit'	=>	$idConsumable,
			'first'				=>	NULL,
			'second'			=>	NULL,
			'summer'			=>	NULL,
			'year'				=>	NULL,
			'qty'				=>	0,
			);

		$this->db->insert('quantityperconsumableunit', $quantityperconsumableunit);

		return $this->db->trans_complete();
	}

	public function add_consumables_category($param){
		$consumable_category = array(
			'category_name'			=>	$param['category'],
			);

		return $this->db->insert('consumable_category', $consumable_category);
	}

	public function addConsumablesCSV($param){

	}

	public function getConsumablesCategory(){

		$this->db->from('consumable_category');
		$this->db->order_by('category_name', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

	public function getConsumablesTable(){		

		$this->db->select('cs.part_number, cs.description, qs.first, qs.second, qs.summer');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');

		$query = $this->db->get();

		return $query->result();	

	}

	public function getConsumablesTableByCategory($param){

		$this->db->select('cs.part_number, cs.description, qs.first, qs.second, qs.summer');
		$this->db->from('consumable cs');
		$this->db->join('quantityperconsumableunit qs', 'qs.idConsumableUnit = cs.id ', 'left');
		$this->db->where('cs.category', $param['category']);
		$this->db->where('qs.year', $param['yearone']);

		$query = $this->db->get();

		return $query->result();
	}

	/*				Equipments						*/

	public function add_equipments($param){
		$data = array(
			'ctrl_no'			=>	$param['ctrl_no'],
			'product_name'		=>	$param['prod_name'],
			'serial_no'			=>	$param['serial_no'],
			'unit_name'			=>	$param['unit_name'],
			'procedures'		=>	$param['procedure'],
			'standard_criteria'	=>	$param['criteria'],
			);

		return $this->db->insert('equipments', $data);
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

	public function getEquipmentTable(){
		
		$this->db->from('equipments');

		$query = $this->db->get();
		
		return $query->result();
	}

	public function getEquipmentUnitNames(){

		$this->db->from('equipment_unit_names');
		$this->db->order_by('unit', 'asc');

		$query = $this->db->get();

		return $query->result();
	}

	/*public function getEquipmentTableByUnit($unit_name){

		$this->db->from($unit_name);

		$query = $this->db->get();

		return $query->result();
	}*/
}