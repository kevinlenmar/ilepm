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

	public function getDashboard(){
		$this->db->select('year, COUNT(year) as yearvalue');
		$this->db->from('quantityperconsumableunit');
		$this->db->group_by('year');
		$this->db->order_by('year desc');
		$query = $this->db->get();

		return $query->result();
	}

	public function getEDashboard(){
		$this->db->select('year, COUNT(year) as yearvalue');
		$this->db->from('quantityperequipmentunit');
		$this->db->group_by('year');
		$this->db->order_by('year desc');
		$query = $this->db->get();

		return $query->result();
	}

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

	

	/*				Equipments						*/

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

	

	/*public function getEquipmentTableByUnit($unit_name){

		$this->db->from($unit_name);

		$query = $this->db->get();

		return $query->result();
	}*/
}