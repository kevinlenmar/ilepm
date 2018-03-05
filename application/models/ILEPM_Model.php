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

	

	/*				Equipments						*/

	public function getUserByUsername($username){
		$this->db->from('users');
		$this->db->where('username', $username);

		$query = $this->db->get();

		return $query->result();
	}
}