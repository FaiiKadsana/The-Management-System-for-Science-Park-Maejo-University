<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Calendar extends CI_Controller {
	
	function display($year = null, $month = null){
		
		$this->load->model('backend/calendar_model');
		$data['calendar'] = $this->calendar_model->generate($year, $month);
		$this->load->view('backend/calendar' , $data);
		}
}
	
	