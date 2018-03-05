<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ILEPM extends CI_Controller {

	/*							ILEPM functions											*/

	public function home(){
		if($this->session->userdata('id')){
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('pages/home');

		}else{
			redirect(base_url() . 'login');
		}
	}
	
	/*						Dashboard											*/

	public function dashboard()
	{
		if($this->session->userdata('id')){
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

	public function profile()
	{
		if($this->session->userdata('id')){
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
