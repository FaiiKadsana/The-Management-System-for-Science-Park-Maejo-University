<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Index extends CI_Controller {

	public function __construct (){
		
		parent::__construct();
		$this->load->model("backend/calendar_model");
	}
	
	function display($year = null, $month = null){
		//echo 'year'.$year;
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');
		$data['calendar'] = $this->calendar_model->generate($year, $month);
		$this->load->view('backend/index' , $data);
		$this->load->view('backend/script');	
		
	}
}