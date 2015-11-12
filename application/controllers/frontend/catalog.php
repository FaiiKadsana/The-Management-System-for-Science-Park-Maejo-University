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
		$config["base_url"]=base_url()."/index/catalog/catalog";
		$config["total_rows"] = $this->db->count_all("catalog");
		$config["per_page"]=12;
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
		$this->db->from('catalog');
		$this->db->join('research','research.Re_id = catalog.Re_id');
		$this->db->join('researchers','project.p_id = upload.up_id_data');
		$this->db->where('project.p_status = 1');
		$this->db->where('upload.up_id_type = 2');
		$this->db->group_by("project.p_id"); 
		$this->db->order_by("project.p_date", "desc"); 

		$this->db->limit(10,0);
		$catalog = $this->db->get();
		$data['catalog'] = $catalog->result();
		//**************************//

		$data['page']=$this->pagination->create_links();

		$this->load->view('frontend/catalog',$data);

		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');

	}

	
}