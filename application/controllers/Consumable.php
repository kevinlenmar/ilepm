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
				redirect(base_url() . 'consumables/new-consumables-unit');
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
				redirect(base_url() . 'consumables/new-consumables-unit');
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

			$this->form_validation->set_rules('category', 'Category', 'required');

			$data['category']	= $this->consumable_model->getConsumablesCategory();
			$data['table'] 		= $this->consumable_model->getConsumablesTable();

			if($this->form_validation->run()){
				$param['category']			= $this->input->post('category');

				$data['table'] = $this->consumable_model->getConsumablesTableByCategory($param);

				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/consumables/consumable_list', $data);
				
			}else{
				$this->load->view('templates/header');
				$this->load->view('templates/sidebar');
				$this->load->view('pages/consumables/consumable_list', $data);
			}
		}else{
			redirect(base_url() . 'login');
		}
	}

	public function consumable_year(){
		$param['category']	=	$this->input->post('category');
		$param['year']		=	$this->input->post('yearone');

		if($this->consumable_model->getConsumablesTableByCategoryByYear($param)){
			$data['table']	=	$this->consumable_model->getConsumablesTableByCategoryByYear($param);

			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/consumables/consumable_list', $data);
		}else{
			echo "There's no data for this year. Do you want to create?";
		}
	}

	public function consumable_create_year(){
		$param['year']		=	$this->input->post('year');

		$data['table'] = $this->consumable_model->createConsumablesTableByYear($param);
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
}