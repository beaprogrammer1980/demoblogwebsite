<?php

class Login extends CI_controller{
function index(){

    $this->load->model('User_model');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('username','Username','required');
	$this->form_validation->set_rules('password','Password','required');

if($this->form_validation->run()){
			$uname=$this->input->post('username');
			$pass=$this->input->post('password');
			$this->load->model('User_model');
			$login_id=$this->User_model->isvalidate($uname,$pass);
			if($login_id)
			{
				$this->load->library('session');
				$this->session->set_userdata('id',$login_id);
				$this->load->view('Auth/dashboard');
				
			}
			else
			{
				$this->load->view('Auth/login');

			}

		}
		else
		{
			
			$this->load->view('Auth/login');
			
		}
		
	}
	
	}

?>