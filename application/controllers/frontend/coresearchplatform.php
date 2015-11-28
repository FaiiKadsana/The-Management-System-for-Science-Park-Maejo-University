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

		$this->db->select('co-research_irct.Co_id,company.C_name,co-research_irct.Co_name_pro,co-research_irct.Co_date,co-research_irct.Co_status');
		$this->db->join('company','co-research_irct.C_id = company.C_id');
		$this->db->order_by("Co_date", "desc");
 
		$this->db->limit(10,0);

		$service = $this->db->get('co-research_irct');
		
		//print_r ($this->db->last_query());

		$data['service'] = $service->result();

		//**************************
		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->db->select('co-research_irct.Co_id,company.C_name,co-research_irct.Co_name_pro,co-research_irct.Co_date,co-research_irct.Co_status');
			$this->db->join('company','co-research_irct.C_id = company.C_id');
			$this->db->like('Co_id',$data['keyword']);
			$search1 = $this->db->get('co-research_irct');
			$data['search'] = $search1->result();

		}

		$data["action"]=base_url("frontend/coresearchplatform",$data);
		$this->load->view('frontend/coresearchplatform',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
	
	}

	
}