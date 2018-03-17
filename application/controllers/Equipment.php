<?php

/**
* 
*/
class Equipment extends CI_Controller
{

	public function equipment_new_category(){
		if($this->session->userdata('id')){
			$this->form_validation->set_rules('category', 'Category', 'required');

			if($this->form_validation->run()){
				$param['category']	= $this->input->post('category');

				$this->equipment_model->add_equipments_category($param);
				redirect(base_url() . 'equipments/new-equipments-category');

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
		if($this->session->userdata('id')){
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
		if($this->session->userdata('id')){

			$data['table'] 		= $this->equipment_model->getEquipmentTable();
			$data['category']	= $this->equipment_model->getEquipmentCategory();
			$data['list_year']	= $this->equipment_model->getEquipmentYear();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/equipments/equipments_list', $data);
			
		}else{
			redirect(base_url() . 'login');
		}

	}

	public function create_list_equipment(){
		$param['year']	=	$this->input->post('year');

		$this->equipment_model->createEquipmentTableByYear($param);

		$data['table'] = $this->equipment_model->getEquipmentTableByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/equipments/equipments_list', $data);
	}

	public function equipment_duplicate_table(){
		$param['year']		=	$this->input->post('year');
		$param['yearone']	=	$this->input->post('yearone');

		$this->equipment_model->duplicateEquipmentsTableByYear($param);

		$data['table']	=	$this->equipment_model->getEquipmentTableByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/equipments/equipments_list', $data);
	}

	public function equipment_csv()
	{
		if($this->session->userdata('id')){
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

	public function get_equipment_year_show(){

		$param['year']		=	$this->input->post('yearone');

		if($this->equipment_model->getEquipmentTableByYear($param)){
			echo 'true';
		}else{
			echo 'false';
		}
	}

	public function get_equipment(){
		$param['category']	=	$this->input->post('category');
		$param['year']		=	$this->input->post('yearone');
		$param['filter']	=	$this->input->post('filter');

		if($this->equipment_model->getEquipmentTableByYear($param)){

			$data['table']	=	$this->equipment_model->getEquipmentTableByCategoryByYear($param);

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/equipments/equipments_list', $data);

		}else{
			echo 'false';
		}
	}

	public function getEquipmentTableListById(){
		$draw = intval($this->input->post("draw"));
		$start = intval($this->input->post("start"));
		$length = intval($this->input->post("length"));

		$param['id']	=	$this->input->post('id');
		$param['year'] 	=	$this->input->post('year');

		$equipments = $this->equipment_model->getEquipmentTableById($param);

		$data = array();

		foreach ($equipments->result() as $items) {
			$data[] = array(
				$items->ctrl_no,
				$items->product_name,
				$items->serial_no,
				$items->firstremark,
				$items->secondremark,
				$items->summerremark,
				$items->id,
				$items->year,
				);
		}

		$output = array(
			"draw" => $draw,
			"recordsTotal" => $equipments->num_rows(),
			"recordsFiltered" => $equipments->num_rows(),
			"data" => $data
			);

		echo json_encode($output);
		exit();
	}

	public function get_equipment_modal(){
		$id = $this->input->post('id');

		$data = $this->equipment_model->getEquipmentListByModal($id);

		echo json_encode($data);
	}

	public function filter(){
		$param['filter'] 	=	$this->input->post('filter');
		$param['year']		=	$this->input->post('yearone');
		$param['category']	=	$this->input->post('category');

		$data['table']		=	$this->equipment_model->getEquipmentTableByFilter($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/equipments/equipments_list', $data);
	}

	public function flag(){	

		$id					= $this->input->post('id');
		$param['category'] 	= $this->input->post('category');
		$param['filter']	= $this->input->post('filter');
		$param['year']		= $this->input->post('year');

		$this->equipment_model->updateFlag($id);

		$data['table']	=	$this->equipment_model->getEquipmentTableByCategoryByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/equipments/equipments_list', $data);
	}

	public function unflag(){
		$id					= $this->input->post('id');
		$param['category'] 	= $this->input->post('category');
		$param['filter']	= $this->input->post('filter');
		$param['year']		= $this->input->post('year');

		$this->equipment_model->updateUnflag($id);

		$data['table']	=	$this->equipment_model->getEquipmentTableByCategoryByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/equipments/equipments_list', $data);
	}

	public function editEquipmentTable(){
		$param['id']				=	$this->input->post('id');
		$param['ctrl_no']			=	$this->input->post('ctrl_no');
		$param['product_name']		=	$this->input->post('product_name');
		$param['serial_no']			=	$this->input->post('serial_no');
		$param['category']			=	$this->input->post('category');
		$param['filter']			=	$this->input->post('filter');
		$param['year']				=	$this->input->post('year');

		$this->equipment_model->updateEquipmentTableEquipment($param);

		$data['table']	=	$this->equipment_model->getEquipmentTableByCategoryByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/equipments/equipments_list', $data);
	}

	public function editEquipmentTableQuantity(){
		$param['id']			= $this->input->post('id');
		$param['first']			= $this->input->post('first');
		$param['second']		= $this->input->post('second');
		$param['summer']		= $this->input->post('summer');
		$param['yearone']		= $this->input->post('year');
		$param['category']		= $this->input->post('category');
		$param['year']			= $this->input->post('yearone');
		$param['filter']		= $this->input->post('filter');

		$this->equipment_model->updateEquipmentTableQuantity($param);

		$data['table']	=	$this->equipment_model->getEquipmentTableByCategoryByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/equipments/equipments_list', $data);
	}

	public function update_equipment_modal(){
		$param['id']				=	$this->input->post('id');
		$param['procedures'] 		= 	$this->input->post('procedures');
		$param['standard_criteria']	=	$this->input->post('standard_criteria');

		$this->equipment_model->updateEquipmentModal($param);
	}

	public function history(){

		$this->load->view('templates/header');
		$this->load->view('pages/equipments/history');	
	}
}