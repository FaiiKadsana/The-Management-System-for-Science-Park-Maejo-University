<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Project_irct extends CI_Controller {

	public function __construct (){
		parent::__construct();
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		$data['action']=site_url('backend/project_irct/index/');
		$this->load->view('backend/project_irct',$data);
		$this->load->view('backend/script');	
		
	}

	
}