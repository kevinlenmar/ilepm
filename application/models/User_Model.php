<?php

/**
* 
*/
class User_Model extends CI_Model
{
	
	public function __construct()
	{
		$this->load->database();
	}

	public function add_users($param){

		$data = array(
			'username'		=>	$param['username'],
			'password'		=>	sha1('123456'),
			'department'	=>	$param['department'],
			'firstname'		=>	$param['firstname'],
			'lastname'		=>	$param['lastname'],
			'contactnumber'	=>	$param['contact'],
			);

		return $this->db->insert('users', $data);
	}

	public function getUsersTable(){
		
		$this->db->from('users');

		$query = $this->db->get();

		return $query->result();
	}
}