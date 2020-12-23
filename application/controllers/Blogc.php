<?php

Class Blogc extends CI_controller{
	
    public function indexview(){
       $this->load->model('Blog_model');
      $data['query'] = $this->Blog_model->getAllBlogs();
      $this->load->view('Auth/Blog/list',$data); 
     	
    }
    public function viewblog(){
        $this->load->view('Auth/Blog/list');
        }
    
     
	public function add(){
     $this->load->view('Auth/Blog/add');

     $this->load->library('form_validation');  
     $this->load->model('Blog_model','user_add');


     $this->form_validation->set_rules('title','Title','required');
     $this->form_validation->set_rules('description','Description','required');
     $this->form_validation->set_rules('author','Author','trim|required');

     if($this->form_validation->run()){
     	$data=$this->input->post();
      $this->load->model('Blog_model');
      $data=array('title' => $this->input->post('title'),
                  'description' => $this->input->post('description'),
                  'author' => $this->input->post('author'),
                  'created_at' =>date('Y-m-d'));
     if($this->Blog_model->create($data)){
      echo "data inserted";
      redirect(base_url().'Blogc/inserted');
    }
    else{
      echo "not inserted";
        }
        }  
        else{
     
        }
     }
        public function inserted(){
        $this->load->view('Auth/Blog/add');
        }
        
}
    
	

?>