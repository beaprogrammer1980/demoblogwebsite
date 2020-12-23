<?php

class AuthDashboard extends CI_controller{

	function index(){
		//echo "i am logged in now";
		//echo "<a href='".base_url().'AuthDashboard/signOut'."'>SignOut</a>";
		$this->load->view("Auth/dashboard");
	}

	function signOut(){
      
      //$this->load->view('Auth/login');
      $this->session->unset_userdata('user');
      redirect(base_url().'login');
	}
}

?>