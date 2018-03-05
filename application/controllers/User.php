<?php

/**
* 
*/
class User extends CI_Controller
{
	
	public function users_new(){

		if($this->session->userdata('id')){

			$this->form_validation->set_rules('username', 'Employee ID', 'required');
			$this->form_validation->set_rules('firstname', 'First Name', 'required');
			$this->form_validation->set_rules('lastname', 'Last Name', 'required');
			$this->form_validation->set_rules('department', 'Department', 'required');
			$this->form_validation->set_rules('contactnumber', 'Contact Number', 'required');

			if($this->form_validation->run()){
				$param['username']		=	$this->input->post('username');
				$param['firstname']		=	$this->input->post('firstname');
				$param['lastname']		=	$this->input->post('lastname');
				$param['department']	=	$this->input->post('department');
				$param['contact']		=	$this->input->post('contactnumber');

				$this->user_model->add_users($param);
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
		if($this->session->userdata('id')){
			
			$data['sample'] = $this->user_model->getUsersTable();
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/users/users_manage',$data);
		}else{
			redirect(base_url() . 'login');
		}
		
	}

}