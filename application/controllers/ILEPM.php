<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class ILEPM extends CI_Controller {

	var $aw;

	function setAge($age){
		$this->aw = $age;

		 alert($aw);
	}

	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if($this->form_validation->run()){
			$username 	=	$this->input->post('username');
			$password 	= 	$this->input->post('password');

			if($data = $this->ilepm_model->can_login($username, $password)){
				
				$session_data = array(
					'username'	=>	$username,
					'name'		=>	$data[0],
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'dashboard');
			}else{
				$this->session->set_flashdata('error', 'Invalid Username and Password');
				redirect(base_url() . 'login');
			}
		}else{
			$this->load->view('pages/login/login');
		}
	}

	public function signout(){
		$this->session->unset_userdata('username');
		redirect(base_url() . 'login');
	}

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

	public function consumable_new()
	{
		if($this->session->userdata('username')){
			$this->form_validation->set_rules('part_no', 'Part Number', 'required');
			$this->form_validation->set_rules('unit_name', 'Unit Name', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			$data['example']	=	$this->ilepm_model->getConsumablesUnitNames();

			if($this->form_validation->run()){
				$param['part_no']		=	$this->input->post('part_no');
				$param['unit_name']		=	$this->input->post('unit_name');
				$param['description']	=	$this->input->post('description');

				$this->ilepm_model->add_consumables($param);
				redirect(base_url() . 'consumables/new-consumables');
			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/consumables/consumable_new', $data);
			}
			
		}else{
			redirect(base_url() . 'login');
		}
	}

	public function consumable_new_unit(){
		if($this->session->userdata('username')){
			$this->form_validation->set_rules('unit_name', 'Unit Name', 'required');

			if($this->form_validation->run()){
				$param['unit_name']		=	$this->input->post('unit_name');

				$this->ilepm_model->add_consumables_unit($param);
				redirect(base_url() . 'consumables/new-consumables-unit');
			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/consumables/consumables_new_unit');
			}

		}else{
			redirect(base_url() . 'login');
		}
	}

	public function consumable_manage()
	{	
		if($this->session->userdata('username')){

			$this->form_validation->set_rules('unit_name', 'Unit Name', 'required');

			$data['example']		= $this->ilepm_model->getConsumablesUnitNames();
			$data['sample'] 		= $this->ilepm_model->getConsumablesTable();

			if($this->form_validation->run()){
				$unit_name			= $this->input->post('unit_name');

				$data['sample']		= $this->ilepm_model->getConsumablesTableByUnit($unit_name);
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/consumables/consumable_manage', $data);
				
			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/consumables/consumable_manage', $data);
			}
		}else{
			redirect(base_url() . 'login');
		}
		
	}

	public function equipment_new()
	{
		if($this->session->userdata('username')){
			$this->form_validation->set_rules('prod_name', 'Product Name', 'required');
			$this->form_validation->set_rules('unit_name', 'Unit Name', 'required');
			$this->form_validation->set_rules('procedure', 'Procedure', 'required');
			$this->form_validation->set_rules('criteria', 'Standard/Criteria', 'required');

			$data['example']	=	$this->ilepm_model->getEquipmentUnitNames();

			if($this->form_validation->run()){
				$param['prod_name']		=	$this->input->post('prod_name');
				$param['serial_no']		=	$this->input->post('serial_no');
				$unit_name				=	$this->input->post('unit_name');
				$param['procedure']		=	$this->input->post('procedure');
				$param['criteria']		=	$this->input->post('criteria');

				$unit = explode(" ", $unit_name);
				$sum = "";

				for($i = 0; $i < count($unit); $i++){
					$sum .= $unit[$i];
				}


				$this->ilepm_model->add_equipments($param, $sum);
				redirect(base_url() . 'equipments/new-equipments');
			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/equipments/equipments_new', $data);
			}

		}else{
			redirect(base_url() . 'login');
		}
		
	}

	public function equipment_new_unit(){
		if($this->session->userdata('username')){
			$this->form_validation->set_rules('unit_name', 'Unit Name', 'required');

			if($this->form_validation->run()){
				$unit_name	= $this->input->post('unit_name');
				$unit = explode(" ", $unit_name);
				$sum = "";

				for($i = 0; $i < count($unit); $i++){
					$sum .= $unit[$i];
				}
				$this->ilepm_model->add_equipments_unit($sum, $unit_name);
				redirect(base_url() . 'equipments/new-equipment-unit');

			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/equipments/equipments_new_unit');
			}

		}else{
			redirect(base_url() . 'login');
		}
	}

	public function equipment_manage()
	{
		if($this->session->userdata('username')){

			$this->form_validation->set_rules('unit_name', 'Unit Name', 'required');

			$data['sample'] 	= $this->ilepm_model->getEquipmentTable();
			$data['example']	= $this->ilepm_model->getEquipmentUnitNames();

			if($this->form_validation->run()){

				$unit_name 		= $this->input->post('unit_name');
				$unit = explode(" ", $unit_name);
				$sum = "";

				for($i = 0; $i < count($unit); $i++){
					$sum .= $unit[$i];
				}

				$data['sample']	= $this->ilepm_model->getEquipmentTableByUnit($sum);
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/equipments/equipments_manage', $data);
			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/equipments/equipments_manage', $data);
			}
		}else{
			redirect(base_url() . 'login');
		}

	}

	public function users_new()
	{
		if($this->session->userdata('username')){
			$this->form_validation->set_rules('username', 'ID number', 'required');
			$this->form_validation->set_rules('department', 'Department', 'required');
			$this->form_validation->set_rules('usertype', 'Usertype', 'required');
			$this->form_validation->set_rules('firstname', 'First Name', 'required');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required');
			$this->form_validation->set_rules('contactnumber', 'Contact Number', 'required');

			if($this->form_validation->run()){
				$param['username'] 	=	$this->input->post('username');
				$param['password']	= 	sha1('123456');
				$param['department'] = 	$this->input->post('department');
				$param['usertype'] = 	$this->input->post('usertype');
				$param['firstname'] = 	$this->input->post('firstname');
				$param['lastname']	= 	$this->input->post('lastname');
				$param['contactnumber'] = 	$this->input->post('contactnumber');

				$this->ilepm_model->add_users($param);
				redirect(base_url() . 'users/new');
			}else{
				$this->load->view('templates/header'); 
				$this->load->view('templates/sidebar');
				$this->load->view('pages/users/users_new');
			}

		}else{
			redirect(base_url() . 'login');
		}
		
	}
	

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

	public function consumable_csv()
	{
		if($this->session->userdata('username')){
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/consumables/consumables_csv');
		}else{
			redirect(base_url() . 'login');
		}
	}

	public function equipment_csv()
	{
		if($this->session->userdata('username')){
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/equipments/equipments_csv');
		}else{
			redirect(base_url() . 'login');
		}
	}

	public function addConsumablesCSV(){
		// print_r($_FILES);
		$data = array();
		$filename=$_FILES["csvfile"]["tmp_name"]; 

	    if($_FILES["csvfile"]["size"] > 0){
            $file = fopen($filename, "r");
            fgets($file);
            while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
          	{
				$this->db->query("INSERT INTO consumables(part_number,unit_name,description) VALUES('".$getData[0]."', '".$getData[1]."', '".$getData[2]."')");
          	}
          	redirect(base_url() . 'consumables/csv');
         }
	}

	public function addEquipmentCSV(){
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
	}
}
