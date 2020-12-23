<?php

Class Display_model extends CI_model{

	function getDisplayBlog(){
		$query = $this->db->select('*')->from('blogs')->get();
        return $query->result();
	}

	public function bloglist($limit,$offset){
		$id=$this->session->userdata('id');
		$q=$this->db->select()
					->from('blogs')
					->where(['user_id'=>$id])
					->limit($limit,$offset)
					->get();
					return $q->result();
	}
	public function num_rows(){
		$id=$this->session->userdata('id');
		$q=$this->db->select()
					->from('blogs')
					->where(['user_id'=>$id])
					->limit($limit,$offset)
					->get();
					return $q->num_rows();
	}
}


?>