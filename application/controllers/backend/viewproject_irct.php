<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Viewproject_irct extends CI_Controller {

	public function __construct (){
		parent::__construct();
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');
		$this->load->view('backend/viewproject_irct');
		$this->load->view('backend/script');	
		
	}

	
}