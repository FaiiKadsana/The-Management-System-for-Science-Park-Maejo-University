<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Catalog extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');

			//แบ่งหน้า
		$config["base_url"]=base_url()."/frontend/catalog/catalog";
		$config["total_rows"] = $this->db->count_all("catalog");
		$config["per_page"]=8;
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<ul class="pagination">'; 
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
		$config['prev_link'] = '<'; 
		$config['last_link'] = '&raquo;'; 
		$config['next_link'] = '>'; 
		$config['first_tag_open'] = '<li>'; 
		$config['first_tag_close'] = '</li>'; 
		$config['last_tag_open'] = '<li>'; 
		$config['last_tag_close'] = '</li>'; 
        //จบแบ่งหน้า
		$this->pagination->initialize($config);
		
		//ดึกข้อมูลสำหรับบ่งหน้า
		$this->db->limit($config['per_page'],$this->uri->segment(4));		

		//*************************Project_แถบล่าง__type1
		$this->db->select('*');
		$this->db->join('research','catalog.Re_id = research.Re_id');
		$this->db->join('researchers','catalog.Rec_id = researchers.Rec_id' );
		$this->db->order_by("Cl_id", "desc");

		$this->db->limit(8,0);

		$catalog = $this->db->get('catalog');
		
		//print_r ($this->db->last_query());

		$data['catalog'] = $catalog->result();

		//**************************//
		
		$data['page']=$this->pagination->create_links();


		$this->load->view('frontend/catalog',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');

	}

	
}