<?php

Class Blog_model extends CI_model{
	 function create($data){
		return $this->db->insert('blogs',$data);
		
	}

	function getAllBlogs(){
		
 		$query = $this->db->select('*')->from('blogs')->get();
        return $query->result();
		
	}

	public function updatej_data($id,$data){
		$this->db->where('blog_id',$id);
		$this->db->update('blogs',$data);
	}
	
	 
}


?>