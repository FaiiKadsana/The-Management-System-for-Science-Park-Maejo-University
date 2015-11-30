<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Tbiplatformreport extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session'); 

	}
	public function index($Tbi_id3){

		$this->db->select('*');
		$this->db->join('tbi_person','tbi_person.Tbi_id= tbi.Tbi_id');
		$this->db->join('tbi_person1','tbi_person1.Tbi_id1 = tbi.Tbi_id1');
		$this->db->join('tbi_business','tbi_business.B_id = tbi.B_id');
		$this->db->join('tbi_service','tbi_service.Tbi_id2 = tbi.Tbi_id2');
		$this->db->where("Tbi_id3",$Tbi_id3);
	
		$service1 = $this->db->get('tbi');
		
		//print_r ($this->db->last_query());

		$data['tbi'] = $service1->result();

		$data['action']=site_url('frontend/tbiplatformreport/index/');		
		$this->load->view('frontend/tbiplatformreport',$data);
		$this->load->view('frontend/script');	
	
	}

	
}