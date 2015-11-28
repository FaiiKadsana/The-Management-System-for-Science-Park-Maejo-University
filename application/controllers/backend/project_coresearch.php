<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Project_coresearch extends CI_Controller {

	public function __construct (){
		parent::__construct();
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		$data['action']=site_url('backend/project_coresearch/index/');
		$this->load->view('backend/project_coresearch',$data);
		$this->load->view('backend/script');	
		
	}

	
}