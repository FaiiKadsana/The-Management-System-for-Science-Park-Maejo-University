<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Serviceplatform extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');

		$this->db->select('S_id');
		$this->db->from('service');

		//$this->db->select('COUNT(S_id) as COUNTnum') ;
		//$this->db->from('service');

		//$num=count($rowservice->S_id);

		$service = $this->db->get();
		$data['service'] = $service->result();

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