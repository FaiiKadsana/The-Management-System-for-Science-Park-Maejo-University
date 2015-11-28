<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Serviceplatformreport extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->library('session');

	}
	public function index($S_id){

		$this->db->select('*');
		$this->db->join('contact_person','contact_person.P_id = service.P_id');
		$this->db->join('company','company.C_id = service.C_id');
		$this->db->where("S_id",$S_id);
	
		$service1 = $this->db->get('service');
		
		//print_r ($this->db->last_query());

		$data['service'] = $service1->result();

		$data['action']=site_url('frontend/serviceplatformreport/index/');	
		$this->load->view('frontend/serviceplatformreport',$data);
		$this->load->view('frontend/script');	
	
	}

}