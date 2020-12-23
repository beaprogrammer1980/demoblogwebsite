<?php
Class blogdisplay extends CI_controller{

	public function index($page=1){

		$this->load->model('Display_model');
		$this->load->helper('text');
         $data['query'] = $this->Display_model->getDisplayBlog();
         $this->load->view('Auth/Blog/blogview',$data);

         $this->load->library('pagination');
         //$perpage=3;
         //$perpage['offset']=$perpage;
         //$param['limit']=($page*$perpage)-$perpage;
         $this->load->model('Display_model','ar');
         $config=['base_url'=>base_url('blogdisplay/index'),
         		'per_page'=>3,
         		'total_rows='=>$this->ar->num_rows(),
         		'full_tag_open'=> "<u class='pagination'>",
         		'full_tag_close' => "</u>",
        		'next_tag_open' = "<li>",		
        		'next_tag_close' = "</li>",
        		'pre_tag_open' => "<li>"; 		
        		'pre_tag_close' => "</li>", 		 		
        		'num_tag_open'=> "<li>",
        		'num_tag_close'=> "</li>",
        		'cur_tag_open'=>"<li class='active'></li><a>" 				
         		'cur_tag_close'=>"</a></li>" 				
         	];
         	$this->pagination->initialize($config);
         	$art=$this->ar->

/*
		$config['first_link'] = 'First';
		$config['last_link'] = 'Last';
		$config['next_link'] = 'Prev';
		$config['prev_link'] = 'Next';
		$config['full_tag_open'] = '<u class='pagination'>';
		$config['full_tag_close'] = '</u>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';


		$config['uri_segment'] = 3;
		$config['num_links'] = 2;
		
		$config['page_query_string'] = TRUE;
		$config['reuse_query_string'] = FALSE;
		$config['prefix'] = '';
		$config['suffix'] = '';
		$config['use_global_url_suffix'] = FALSE;
		

		
		$config['first_tag_open'] = '<div>';
		$config['first_tag_close'] = '</div>';
		$config['first_url'] = '';

		
		$config['last_tag_open'] = '<div>';
		$config['last_tag_close'] = '</div>';

		

		
		$config['prev_tag_open'] = '<div>';
		$config['prev_tag_close'] = '</div>';*/
	}
}


?>