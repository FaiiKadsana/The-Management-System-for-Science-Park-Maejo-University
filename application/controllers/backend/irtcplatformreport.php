<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Irtcplatformreport extends CI_Controller {

	public function __construct (){
		parent::__construct();
	

	}
	public function index(){
		
		$this->load->view('backend/irtcplatformreport');
		
	}

	
}