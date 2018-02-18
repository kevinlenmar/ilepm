<?php

/**
* 
*/
class Equipment extends CI_Controller
{

	public function equipment_new_category(){
		if($this->session->userdata('username')){
			$this->form_validation->set_rules('category', 'Category', 'required');

			if($this->form_validation->run()){
				$param['category']	= $this->input->post('category');

				$this->equipment_model->add_equipments_category($param);
				redirect(base_url() . 'equipments/new-equipment-category');

			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/equipments/equipments_new_category');
			}

		}else{
			redirect(base_url() . 'login');
		}
	}
	
	public function equipment_new_unit()
	{
		if($this->session->userdata('username')){
			$this->form_validation->set_rules('ctrl_no', 'Control No.', 'required');
			$this->form_validation->set_rules('prod_name', 'Product Name', 'required');
			$this->form_validation->set_rules('serial_no', 'Serial No', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('procedure', 'Procedure', 'required');
			$this->form_validation->set_rules('criteria', 'Standard/Criteria', 'required');

			$data['category']	=	$this->equipment_model->getEquipmentCategory();

			if($this->form_validation->run()){
				$param['ctrl_no']		=	$this->input->post('ctrl_no');
				$param['prod_name']		=	$this->input->post('prod_name');
				$param['serial_no']		=	$this->input->post('serial_no');
				$param['category']		=	$this->input->post('category');
				$param['procedure']		=	$this->input->post('procedure');
				$param['criteria']		=	$this->input->post('criteria');

				$this->equipment_model->add_equipments_unit($param);
				redirect(base_url() . 'equipments/new-equipments-unit');
			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/equipments/equipments_new_unit', $data);
			}

		}else{
			redirect(base_url() . 'login');
		}
		
	}

	public function equipment_list()
	{
		if($this->session->userdata('username')){

			$this->form_validation->set_rules('category', 'Category', 'required');

			$data['table'] 	= $this->equipment_model->getEquipmentTable();
			$data['category']	= $this->equipment_model->getEquipmentCategory();

			if($this->form_validation->run()){

				$param['category'] 		= $this->input->post('category');

				$data['table']	= $this->equipment_model->getEquipmentTableByCategory($param);
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/equipments/equipments_list', $data);
			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/equipments/equipments_list', $data);
			}
		}else{
			redirect(base_url() . 'login');
		}

	}

	public function equipment_year(){
		$param['category']	=	$this->input->post('category');
		$param['year']		=	$this->input->post('yearone');

		if($this->equipment_model->getEquipmentTableByCategoryByYear($param)){
			$data['table']	=	$this->equipment_model->getEquipmentTableByCategoryByYear($param);

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/equipments/equipments_list', $data);
		}else{
			echo "There's no data for this year. Do you want to create?";
		}
	}

	public function equipment_create_year(){
		$param['year']		=	$this->input->post('year');

		$data['table'] = $this->equipment_model->createEquipmentTableByYear($param);
	}

	public function equipment_csv()
	{
		if($this->session->userdata('username')){
			$data['category']		=	$this->equipment_model->getEquipmentCategory();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/equipments/equipments_csv', $data);
		}else{
			redirect(base_url() . 'login');
		}
	}

	public function addEquipmentCSV(){

		$this->form_validation->set_rules('category', 'Category', 'required');
		
		$data['category']		=	$this->equipment_model->getEquipmentCategory();

		if($this->form_validation->run()){
			$data = array();
			$filename=$_FILES["csvfile"]["tmp_name"];

			$category = $this->input->post('category');			

			if($_FILES["csvfile"]["size"] > 0){
				$file = fopen($filename, "r");
				fgets($file);
				while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
				{
					$this->db->query("INSERT INTO equipment(id, ctrl_no, product_name, serial_no, procedures, standard_criteria, category) VALUES(DEFAULT, '".$getData[0]."', '".$getData[1]."', '".$getData[2]."', '".$getData[3]."', '".$getData[4]."', '".$category."')");
				}
			}
			redirect(base_url() . 'equipments/csv');
		}else{
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/equipments/equipments_csv', $data);
		}
	}
}