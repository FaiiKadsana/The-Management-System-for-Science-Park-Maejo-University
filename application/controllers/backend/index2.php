<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Index2 extends CI_Controller {

	public function __construct (){
		
		parent::__construct();
		$this->load->model("backend/calendar_model");
	}
	
	function display($year = null, $month = null){
		
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu2');

		if (!$year) {
			$year = date('Y');
		}
		if (!$month) {

			$month = date('m');
		}
	
		//$this->load->model('Calendar_model');
		if ($day = $this->input->post('day')) {
			$this->calendar_model->add_calendar_data('$year-$month-$day',$this->input->post('Cd_date')
			);
		}

		$data['calendar'] = $this->calendar_model->generate($year, $month);
		$this->load->view('backend/index2' , $data);
		$this->load->view('backend/script');	
		
	}
}
