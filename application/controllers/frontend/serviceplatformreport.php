<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Serviceplatformreport extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/serviceplatformreport');
		$this->load->view('frontend/script');	
	
	}

	
}