<?php
/**
 * 
 */
class User_model extends CI_model
{
	
public function isvalidate($username,$password){
  $q=$this->db->query("select * from users where username='$username' and password='$password'");
  //$this->db->where(['username'=>'$username','password'=>'$password']);
  //get(user);
  if($q->num_rows()){
  	return true;
  }
  else{
  	return false;
  }
 }
}

	/*
	function doLogin($username,$password){
		$this->db->where('username','$username');
		$this->db->where('password','$password');
		$query=$this->db->get('users');
		echo $this->db->last_query();
		$user=$query->row_array();

		return $user;
	}*/


?>