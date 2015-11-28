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
			//print_r ($_POST);
			
			$this->db->select('service.S_id, company.C_name, contact_person.P_title,contact_person.P_name, contact_person.P_lastname, service.S_date, service.S_status');
			$this->db->join('contact_person','contact_person.P_id = service.P_id');
			$this->db->join('company','company.C_id = service.C_id');
			$this->db->like('S_date',$data['keyword']);

			if($_POST['keyword']==0){
				$data['keyword1'] = $this->input->post('keyword1');
				$this->db->or_like('S_status',$data['keyword1']);
				echo '1';
			}
			
			//$this->db->group_by("service.S_id"); 
			//$this->db->order_by("service.S_id", "desc"); 
			$search1 = $this->db->get('service');

			
			$data['search'] = $search1->result();
			print_r ($this->db->last_query());
				//print_r($data['search']);
			
		}

		$data["action"]=base_url("backend/service",$data);
		$this->load->view('backend/service',$data);
		$this->load->view('backend/script');	
		
	}


}