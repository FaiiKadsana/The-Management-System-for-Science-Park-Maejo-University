<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Index extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->model("frontend/calendar_model");
		$this->load->library('history');
		$this->history->exclude();
		
		//$this->load->library('session');

	}
	public function index(){
		$data = array();
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');

		//แบ่งหน้า
		
		$config["base_url"]=base_url()."/frontend/index/index";
		$config["total_rows"] = $this->db->count_all("news");
		$config["per_page"]=4;
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<ul class="pagination">'; 
		$config['full_tag_close'] = '</ul>'; 
		$config['num_tag_open'] = '<li>';  
		$config['num_tag_close'] = '</li>'; 
		$config['cur_tag_open'] = '<li class="active"><a><span>'; 
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></span></li>'; 
		$config['prev_tag_open'] = '<li>'; 
		$config['prev_tag_close'] = '</li>'; 
		$config['next_tag_open'] = '<li>'; 
		$config['next_tag_close'] = '</li>'; 
		$config['first_link'] = '&laquo;'; 
		$config['prev_link'] = '<'; 
		$config['last_link'] = '&raquo;'; 
		$config['next_link'] = '>'; 
		$config['first_tag_open'] = '<li>'; 
		$config['first_tag_close'] = '</li>'; 
		$config['last_tag_open'] = '<li>'; 
		$config['last_tag_close'] = '</li>'; 
        //จบแบ่งหน้า
		$this->pagination->initialize($config);
		
		//ดึกข้อมูลสำหรับบ่งหน้า
		$this->db->limit($config['per_page'],$this->uri->segment(4));		

		//*************************

		$this->db->select('news.Ne_id,news.Ne_sub,news.Ne_date_up,news.Ne_picture,news.Ne_text,news.Ne_view');
		
		$this->db->order_by("Ne_id", "desc");

		//$this->db->limit(4,0);

		$news1 = $this->db->get('news');

		$data['news'] = $news1->result();

		//print_r($data['news']);

		$data['page']=$this->pagination->create_links();


		$this->load->view('frontend/index',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
		
		
	}

	function display($year = null, $month = null){
		
		/*if (!$year) {
			$year = date('Y');
		}
		else if (!$month) {
			$month = date('m');
		}

		//$this->load->model('Calendar_model');
		if ($day = $this->input->post('day')) {
			$this->calendar_model->add_calendar_data('$year-$month-$day',$this->input->post('Cd_date')
				);
		}*/


		if (isset($_GET['day'])){
			$day = $_GET['day'];
		} else {
			$day = date("j");
		}
		if(isset($_GET['month'])){
			$month = $_GET['month'];
		} else {
			$month = date("n");
		}
		if(isset($_GET['year'])){
			$year = $_GET['year'];
		}else{
			$year = date("Y");
		}
		$currentTimeStamp = strtotime( "$day-$month-$year");
		$monthName = date("F", $currentTimeStamp);
		$numDays = date("t", $currentTimeStamp);
		$counter = 0;
		
		if(isset($_GET['add'])){
			$title =$_POST['txttitle'];
			$detail =$_POST['txtdetail'];
			$eventTime =$_POST['eventTime'];
			$PatientID =$_POST['PatientID'];
			$eventdate = $month."/".$day."/".$year;
			$sqlinsert = "INSERT into eventcalendar(Title,Detail,eventDate,eventTime,PatientID,dateAdded) values ('".$title."','".$detail."','".$eventdate."','".$eventTime."','".$PatientID."',now())";
			$resultinginsert = mysql_query($sqlinsert);
			if($resultinginsert ){
				echo "Event was successfully Added...";
			}else{
				echo "Event Failed to be Added....";
			}
		}
		

		$data['calendar'] = $this->calendar_model->generate($year, $month);
		$this->load->view('frontend/index' , $data);
		
	}

	
}

