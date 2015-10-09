<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Calendar_Model extends CI_Model {

	var $conf;

	 function Calendar_model (){
	// 	parent::Model();
	 	parent::__construct();
		$this->conf = array(
			'start_day' => 'sunday',
			'month_type' => 'long',
			'day_type' => 'shot',
			'show_next_prev' => TRUE,
			'next_prev_url' => base_url() .'backend/index/display' 
			);
		
		$this->conf['template'] = '
		{table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar">{/table_open}

		{heading_row_start}<tr>{/heading_row_start}

		{heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
		{heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
		{heading_next_cell}<th><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

		{heading_row_end}</tr>{/heading_row_end}

		{week_row_start}<tr>{/week_row_start}
		{week_day_cell}<td>{week_day}</td>{/week_day_cell}
		{week_row_end}</tr>{/week_row_end}

		{cal_row_start}<tr class="days">{/cal_row_start}
		{cal_cell_start}<td>{/cal_cell_start}

		{cal_cell_content}
		<div class="day_num">{day}</div>
		<div class="content">{content}</div>
		{/cal_cell_content}

		{cal_cell_content_today}
		<div class="day_num highlight">{day}</div>
		<div class="content">{content}</div>
		{/cal_cell_content_today}

		{cal_cell_no_content}<div class="day_num">{day}</div>{/cal_cell_no_content}
		{cal_cell_no_content_today}<div class="day_num highlight">{day}</div>{/cal_cell_no_content_today}

		{cal_cell_blank}&nbsp;{/cal_cell_blank}

		{cal_cell_end}</td>{/cal_cell_end}
		{cal_row_end}</tr>{/cal_row_end}

		{table_close}</table>{/table_close}

		';
	}

	/*public function get_calendar_data($year, $month){

		$query = $this->db->select('Cd_date' , 'Cd_detail')->from('calendar')->like('Cd_date', "$year-$month" , 'after')->get();
	
		//$query = $this->db->select('date' , 'Cd_detail')->from('calendar')->where('date',"$year-$month",'after')->get();

		//print_r($this->db->last_query());

		$cal_data = array();

		foreach ($query->result() as $row) {

			if (isset($cal_data[0]->subject))
			{
				
				$cal_data[substr($row->date,8,2)] = $row->data;

			}
		}
		return $cal_data ; 
	}

	public function generate ($year, $month){
		print_r($year);
		print_r($month);
		$this->load->library('calendar',$this->conf);
		
		$cal_data = $this->get_calendar_data($year, $month);
		
		return $this->calendar->generate($year,$month,$cal_data);

	}
}*/
function get_calendar_data($year, $month)
	{
		//$query = $this->db->select(‘date, data’)->from(‘calendar’)->like(‘date’, “$year-$month”, ‘after’)->get();

		$query = $this->db->select('Cd_date','Cd_detail')->from('calendar')->like('Cd_date', "$year-$month" , '$day')->get();

		//$query = $this->db->select('date' , 'Cd_detail')->from('calendar')->where('date',"$year-$month",'after')->get();

		print_r($this->db->last_query());

		$cal_data = array();

		foreach ($query->result() as $row)
		if (isset($cal_data[0]->subject))
			{
				
				$cal_data[substr($row->date,8,2)] = $row->data;

			}
		return $cal_data;
	}

	function add_calendar_data($date, $data){
		
		if ($this->db->select('Cd_date')->from('calendar')->where('Cd_date', $date)->count_all_results()) {
			$this->db->where('Cd_date', $date)->update('calendar', array('Cd_date' => $date,'Cd_detail' => $data
			
			));

	} else {
		$this->db->insert('calendar', array('Cd_date' => $date,'Cd_detail' => $data
			));
	}
}

	function generate ($year, $month){
		
	$this->load->library('calendar', $this->conf);
	$cal_data = $this->get_calendar_data($year, $month);
	return $this->calendar->generate($year, $month, $cal_data);
}
}