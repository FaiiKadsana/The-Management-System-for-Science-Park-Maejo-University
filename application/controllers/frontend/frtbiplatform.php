<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Frtbiplatform extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/frtbiplatform');
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
	
	}

	
}