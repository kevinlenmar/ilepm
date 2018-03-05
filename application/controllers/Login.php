<?php

/**
* 
*/
class Login extends CI_Controller
{
	
	public function login_user(){

		if($this->session->userdata('id') == NULL){

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run()){
				$username 	=	$this->input->post('username');
				$password 	= 	$this->input->post('password');

				if($data = $this->login_model->can_login($username, $password)){

					$session_data = array(
						'id'		=>	$data[0]->id,
						'username'	=>	$username,
						'name'		=>	$data[0],
						'login'		=>	TRUE,
						);
					$this->session->set_userdata($session_data);
					redirect(base_url() . 'home');
				}else{
					$this->session->set_flashdata('error', 'Invalid Username and Password');
					redirect(base_url() . 'login');
				}
			}else{
				$this->load->view('pages/login/login');
			}
		}else{
			redirect(base_url() . 'home');
		}
		
	}

	public function signout(){
		$this->session->unset_userdata('id');
		redirect(base_url() . 'login');
	}
}