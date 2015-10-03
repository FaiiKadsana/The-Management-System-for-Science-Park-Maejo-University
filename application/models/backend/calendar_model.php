<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Calendar_Model extends CI_Model {

  		public function generate ($year, $month){
			$conf = array(
               'start_day' => 'monday',
               'show_naxt_prev' => true,
               'naxt_prev_url' => base_url() . 'backend/calendar/display' 
		);
		
		$this->load->library('calendar',$conf);
			$cal_data = array(
			15 => 'foo',
			17 => 'bar'
		);
		return $this->calendar->generate($year,$month,$cal_data);
	
	}
}