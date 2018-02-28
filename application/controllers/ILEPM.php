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

	public function getDashboardYear(){

		$year = $this->ilepm_model->getDashboard();
		
		echo json_encode($year);
	}	

	public function getEDashboardYear(){

		$year = $this->equipment_model->getEDashboard();
		
		echo json_encode($year);
	}

	public function users_new(){
		if($this->session->userdata('username')){

			
			
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/users/users_new');
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
}
