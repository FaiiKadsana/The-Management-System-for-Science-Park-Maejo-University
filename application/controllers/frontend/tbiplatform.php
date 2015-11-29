<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Tbiplatform extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');

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
	
			$search1 = $this->db->get('service');
			//print_r ($this->db->last_query());
			$data['search'] = $search1->result();
			//print_r($data['search']);
		}
	
		
		$data["action"]=base_url("frontend/tbiplatform",$data);
		$this->load->view('frontend/tbiplatform',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
	
	}

	
}