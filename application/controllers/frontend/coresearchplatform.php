<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Coresearchplatform extends CI_Controller {

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

		$service = $this->db->get('co-research_irct');
		
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
			$this->db->join('contact_person','contact_person.P_id = service.P_id');
			$this->db->join('company','company.C_id = service.C_id');
			//$this->db->where('S_status = 2');
			$this->db->group_by("service.S_id"); 
			$this->db->order_by("service.S_id", "desc"); 
			$rssearch = $this->db->get('co-research_irct');
			$data['rssearch'] = $rssearch->result_array();

		}

		$data["action"]=base_url("frontend/coresearchplatform",$data);
		$this->load->view('frontend/coresearchplatform',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
	
	}

	
}