<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Serviceplatform extends CI_Controller {

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
		/*$config["base_url"]=base_url()."/frontend/serviceplatform/serviceplatform";
		$config["total_rows"] = $this->db->count_all("service");
		$config["per_page"]=10;
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
		$this->db->limit($config['per_page'],$this->uri->segment(4));*/	

		//*************************
		$this->db->select('service.S_id, company.C_name, contact_person.P_title,contact_person.P_name, contact_person.P_lastname, service.S_date, service.S_status');
		$this->db->join('contact_person','contact_person.P_id = service.P_id');
		$this->db->join('company','company.C_id = service.C_id');
		$this->db->order_by("S_date", "desc");
 
		$this->db->limit(10,0);

		$service = $this->db->get('service');
		
		//print_r ($this->db->last_query());

		$data['service'] = $service->result();

		
		//SEARCH
		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->db->select('service.S_id, company.C_name, contact_person.P_title,contact_person.P_name, contact_person.P_lastname, service.S_date, service.S_status');
			$this->db->join('contact_person','contact_person.P_id = service.P_id');
			$this->db->join('company','company.C_id = service.C_id');
			//$this->db->where('S_id',$data['keyword']);
			$this->db->like('S_id',$data['keyword']);
			//$this->db->group_by("service.S_id"); 
			//$this->db->order_by("service.S_id", "desc"); 
			$search1 = $this->db->get('service');

			print_r ($this->db->last_query());
			$data['search'] = $search1->result_array();

		}

		$data["action"]=base_url("frontend/serviceplatform",$data);
		
		$data['page']=$this->pagination->create_links();
		$this->load->view('frontend/serviceplatform',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
	
	}
	public function count(){

		$this->db->select('COUNT(S_id) as COUNTnum') ;
		$this->db->from('service');

		$service = $this->db->get();
		$data['service'] = $service->result();
		$this->load->view('frontend/serviceplatform',$data);

	}

	
}