<?php

/**
* 
*/
class Login_Model extends CI_Model
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
}