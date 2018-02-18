<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	public function home(){

		if($this->session->userdata('username') == NULL){

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run()){
				$username 	=	$this->input->post('username');
				$password 	= 	$this->input->post('password');

				if($data = $this->login_model->can_login($username, $password)){

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
		}else{
			redirect(base_url() . 'dashboard');
		}
		
	}

	public function signout(){
		$this->session->unset_userdata('username');
		redirect(base_url() . 'login');
	}
}