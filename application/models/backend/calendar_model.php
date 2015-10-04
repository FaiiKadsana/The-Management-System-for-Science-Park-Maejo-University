<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Calendar_Model extends CI_Model {
		var $conf;
		public function calendar_model (){
			
			$this->conf = array(
               'start_day' => 'sunday',
               'month_type' => 'long',
               'day_type' => 'shot',
               'show_naxt_prev' => TRUE,
               'naxt_prev_url' => base_url().'backend/index/display' 
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
  		public function generate ($year, $month){
  		
		$this->load->library('calendar',$this->conf);
			$cal_data = array(
			15 => 'foo',
			17 => 'bar'
		);
		
		return $this->calendar->generate($year,$month,$cal_data);
	
	}
}