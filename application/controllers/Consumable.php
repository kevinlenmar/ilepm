<?php

/**
* 
*/
class Consumable extends CI_Controller
{
	public function consumable_new_category(){
		if($this->session->userdata('username')){
			$this->form_validation->set_rules('category', 'Category', 'required');

			if($this->form_validation->run()){
				$param['category']		=	$this->input->post('category');

				$this->consumable_model->add_consumables_category($param);
				redirect(base_url() . 'consumables/new-consumables-category');
			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/consumables/consumables_new_category');
			}

		}else{
			redirect(base_url() . 'login');
		}
	}

	public function consumable_new_unit(){

		if($this->session->userdata('username')){

			$this->form_validation->set_rules('part_no', 'Part Number', 'required');
			$this->form_validation->set_rules('category', 'Category', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');

			$data['category']	=	$this->consumable_model->getConsumablesCategory();

			if($this->form_validation->run()){
				$param['part_no']		=	$this->input->post('part_no');
				$param['category']		=	$this->input->post('category');
				$param['description']	=	$this->input->post('description');

				$this->consumable_model->add_consumables_unit($param);
				
				redirect(base_url() . 'new-consumables-unit');
			}else{

				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/consumables/consumable_new_unit', $data);
			}
		}else{
			redirect(base_url(). 'login');
		}

		
	}

	public function consumable_list(){	
		if($this->session->userdata('username')){
			
			$data['category']		= $this->consumable_model->getConsumablesCategory();
			$data['list_year'] 		= $this->consumable_model->getConsumablesYear();
			$data['table'] 			= $this->consumable_model->getConsumablesTable();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/consumables/consumable_list', $data);
		}else{
			redirect(base_url() . 'login');
		}
	}

	public function get_consumable(){
		$param['category']	=	$this->input->post('category');
		$param['year']		=	$this->input->post('yearone');
		$param['filter']	=	$this->input->post('filter');

		if($this->consumable_model->getConsumablesTableByYear($param)){

			$data['table']	=	$this->consumable_model->getConsumablesTableByCategoryByYear($param);

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/consumables/consumable_list', $data);

		}else{
			echo 'false';
			
		}
	}

	public function get_consumable_year_show(){

		$param['year']		=	$this->input->post('yearone');

		if($this->consumable_model->getConsumablesTableByYear($param)){
			echo 'true';
		}else{
			echo 'false';
		}
	}

	public function get_consumable_year(){
		$param['category']	=	$this->input->post('category');
		$param['year']		=	$this->input->post('yearone');

		$data['table'] = $this->consumable_model->getConsumablesTableByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/consumables/consumable_list', $data);
	}

	public function consumable_create_year(){
		$param['year']		=	$this->input->post('year');

		$this->consumable_model->createConsumablesTableByYear($param);

		$data['table'] = $this->consumable_model->getConsumablesTableByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/consumables/consumable_list', $data);
	}

	public function consumable_duplicate_table(){
		$param['year']		=	$this->input->post('year');
		$param['yearone']	=	$this->input->post('yearone');

		$this->consumable_model->duplicateConsumablesTableByYear($param);

		$data['table']	=	$this->consumable_model->getConsumablesTableByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/consumables/consumable_list', $data);
	}

	public function consumable_csv(){
		if($this->session->userdata('username')){

			$data['category']		=	$this->consumable_model->getConsumablesCategory();

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/consumables/consumables_csv', $data);
		}else{
			redirect(base_url() . 'login');
		}
	}

	public function addConsumablesCSV(){

		$this->form_validation->set_rules('category', 'Category', 'required');

		$data['category']		=	$this->consumable_model->getConsumablesCategory();

		if($this->form_validation->run()){
			$data = array();
			$filename=$_FILES["csvfile"]["tmp_name"];

			$category = $this->input->post('category');			

			if($_FILES["csvfile"]["size"] > 0){
				$file = fopen($filename, "r");
				fgets($file);
				while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
				{
					$this->db->query("INSERT INTO consumable(id, part_number, description, category) VALUES(DEFAULT, '".$getData[0]."', '".$getData[1]."', '".$category."')");
				}
			}
			redirect(base_url() . 'consumables/csv');
		}else{
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/consumables/consumables_csv', $data);
		}
	}

	public function getConsumableTableListById(){
		$draw = intval($this->input->post("draw"));
		$start = intval($this->input->post("start"));
		$length = intval($this->input->post("length"));

		$param['id']	=	$this->input->post('id');
		$param['year'] 	=	$this->input->post('year');

		$consumables = $this->consumable_model->getConsumableTableById($param);

		$data = array();

		foreach ($consumables->result() as $items) {
			$data[] = array(
				$items->part_number,
				$items->description,
				$items->first,
				$items->second,
				$items->summer,
				$items->id,
				$items->year,
				);
		}

		$output = array(
			"draw" => $draw,
			"recordsTotal" => $consumables->num_rows(),
			"recordsFiltered" => $consumables->num_rows(),
			"data" => $data
			);

		echo json_encode($output);
		exit();
	}

	public function filter(){
		$param['filter'] 	=	$this->input->post('filter');
		$param['year']		=	$this->input->post('yearone');
		$param['category']	=	$this->input->post('category');

		$data['table']		=	$this->consumable_model->getConsumablesTableByFilter($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/consumables/consumable_list', $data);
	}

	/*					UPDATE 					*/

	public function editConsumableTable(){
		$param['id']			= $this->input->post('id');
		$param['part_number'] 	= $this->input->post('part_number');
		$param['description'] 	= $this->input->post('description');
		$param['category']		= $this->input->post('category');
		$param['filter']		= $this->input->post('filter');
		$param['year']			= $this->input->post('year');

		$this->consumable_model->updateConsumableTableConsumable($param);

		$data['table']	=	$this->consumable_model->getConsumablesTableByCategoryByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/consumables/consumable_list', $data);
	}

	public function editConsumableTableQuantity(){
		$param['id']			= $this->input->post('id');
		$param['first'] 		= $this->input->post('first');
		$param['second'] 		= $this->input->post('second');
		$param['summer']		= $this->input->post('summer');
		$param['yearone']		= $this->input->post('year');
		$param['category']		= $this->input->post('category');
		$param['year']			= $this->input->post('yearone');
		$param['filter']		= $this->input->post('filter');

		$this->consumable_model->updateConsumableTableQuantity($param);

		$data['table']	=	$this->consumable_model->getConsumablesTableByCategoryByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/consumables/consumable_list', $data);
	}

	public function flag(){	

		$id					= $this->input->post('id');
		$param['category'] 	= $this->input->post('category');
		$param['filter']	= $this->input->post('filter');
		$param['year']		= $this->input->post('year');

		$this->consumable_model->updateFlag($id);

		$data['table']	=	$this->consumable_model->getConsumablesTableByCategoryByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/consumables/consumable_list', $data);
	}

	public function unflag(){
		$id					= $this->input->post('id');
		$param['category'] 	= $this->input->post('category');
		$param['filter']	= $this->input->post('filter');
		$param['year']		= $this->input->post('year');

		$this->consumable_model->updateUnflag($id);

		$data['table']	=	$this->consumable_model->getConsumablesTableByCategoryByYear($param);

		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('pages/consumables/consumable_list', $data);
	}
}