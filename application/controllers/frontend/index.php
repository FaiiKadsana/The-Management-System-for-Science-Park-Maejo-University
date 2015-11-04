<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Index extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
		
		//$this->load->library('session');

	}
	public function index(){
		$data = array();
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');

		//แบ่งหน้า
		$config["base_url"]=base_url()."/frontend/index/index";
		$config["total_rows"] = $this->db->count_all("news");
		$config["per_page"]=10;
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<ul>'; 
		$config['full_tag_close'] = '</ul>'; 
		$config['num_tag_open'] = '<li>'; 
		$config['num_tag_close'] = '</li>'; 
		$config['cur_tag_open'] = '<li class="active"><a><span>'; 
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></span></li>'; 
		$config['prev_tag_open'] = '<li>'; 
		$config['prev_tag_close'] = '</li>'; 
		$config['next_tag_open'] = '<li>'; 
		$config['next_tag_close'] = '</li>'; 
		$config['first_link'] = '&laquo;'; 
		$config['prev_link'] = '&lsaquo;'; 
		$config['last_link'] = '&raquo;'; 
		$config['next_link'] = '&rsaquo;'; 
		$config['first_tag_open'] = '<li>'; 
		$config['first_tag_close'] = '</li>'; 
		$config['last_tag_open'] = '<li>'; 
		$config['last_tag_close'] = '</li>'; 
            //จบแบ่งหน้า
		$this->pagination->initialize($config);
		
			//ดึกข้อมูลสำหรับบ่งหน้า
		$this->db->limit($config['per_page'],$this->uri->segment(4));
		
			

		$this->db->select('*');
		$this->db->from('news');
		$this->db->group_by("ne_date_up"); 
		$this->db->order_by("ne_date_cre", "desc");

		//print_r($this->db->last_query());

		$this->db->limit(10,0);
		$newlist = $this->db->get();
		$data['news'] = $newlist->result();

		$data['page']=$this->pagination->create_links();

		$this->load->view('frontend/index',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
		
		
	}

	
}

