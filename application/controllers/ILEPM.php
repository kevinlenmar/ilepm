<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ILEPM extends CI_Controller {

	/*							ILEPM functions											*/
	
	/*						Dashboard											*/

	public function dashboard()
	{
		if($this->session->userdata('username')){
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/dashboard');
		}else{
			redirect(base_url() . 'login');
		}
	}

	/* 							Consumables								*/

	/*public function addEquipmentCSV(){
		// print_r($_FILES);
		$data = array();
		$filename=$_FILES["csvfile"]["tmp_name"]; 

		$unit_name 		= $this->input->post('unit_name');

		$unit = explode(" ", $unit_name);
		$sum = "";

		for($i = 0; $i < count($unit); $i++){
			$sum .= $unit[$i];
		}

		if($_FILES["csvfile"]["size"] > 0){
			$file = fopen($filename, "r");
			fgets($file);
			while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
			{
				$this->db->query("INSERT INTO ".$sum."(ctrl_no, product_name, serial_no, procedures, standard_criteria) VALUES(".$getData[0].", '".$getData[1]."', '".$getData[2]."', '".$getData[3]."', '".$getData[4]."')");
			}
			redirect(base_url() . 'equipments/csv');
		}
	}*/


	

	public function users_manage()
	{
		if($this->session->userdata('username')){
			
			$data['sample'] = $this->ilepm_model->getSampleTable();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/users/users_manage',$data);
		}else{
			redirect(base_url() . 'login');
		}
		
	}

	public function profile()
	{
		if($this->session->userdata('username')){
			$username = $this->input->get('username');
			if($username == null){
				$username = $this->session->userdata('username');
			}
			$data['sample'] = $this->ilepm_model->getUserByUsername($username);
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/profile',$data);
		}else{
			redirect(base_url() . 'login');
		}
		
	}
}
