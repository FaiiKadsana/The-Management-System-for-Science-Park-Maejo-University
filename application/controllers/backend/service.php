<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Service extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		//แบ่งหน้า
		$config["base_url"]=base_url()."/backend/service/service";
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
		$this->db->limit($config['per_page'],$this->uri->segment(4));		

		//*************************Project_แถบล่าง__type1

		$this->db->select('service.S_id, company.C_name, contact_person.P_title,contact_person.P_name, contact_person.P_lastname, service.S_date, service.S_status');
		$this->db->join('contact_person','contact_person.P_id = service.P_id');
		$this->db->join('company','company.C_id = service.C_id');
		$this->db->order_by("S_date", "desc");
 
		$this->db->limit(10,0);

		$service = $this->db->get('service');
		
		//print_r ($this->db->last_query());

		$data['service'] = $service->result();

		//**************************//
		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			$data['S_date'] = $this->input->post('S_date');
			$data['S_status'] = $this->input->post('S_status');
			$this->db->or_like('S_date',$data['S_date']);
			$this->db->or_like('S_status',$data['S_status']);
			$this->db->select('*');
			$this->db->from('service');
			$this->db->join('contact_person','contact_person.P_id = service.P_id');
			$this->db->join('company','company.C_id = service.C_id');
			//$this->db->where('S_status = 2');
			$this->db->group_by("service.S_id"); 
			$this->db->order_by("service.S_id", "desc"); 
			$rssearch = $this->db->get();
			$data['rssearch'] = $rssearch->result_array();

		}

		$data["action"]=base_url("backend/service",$data);
		
		$data['page']=$this->pagination->create_links();
		$this->load->view('backend/service',$data);
		$this->load->view('backend/script');	
		
	}
	
	
}