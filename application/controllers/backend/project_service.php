<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Project_Service extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model("backend/project_service_model");
		$this->load->library('session');
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		$data=array();
		$data['action']=base_url('backend/project_service/add');
		$this->load->view('backend/project_service',$data);

		$this->load->view('backend/script');	
		
	}
	public function add (){

		// Start  row ประวัติส่วนตัว

		$nth=$this->input->post('nth');
		$lnth=$this->input->post('lnth');
		$neng=$this->input->post('neng');
		$lneng=$this->input->post('lneng');
		$idres=$this->input->post('idres');
		$tell=$this->input->post('tell');
		$address=$this->input->post('address');
		$email=$this->input->post('email');
		$pos_detail=$this->input->post('pos_detail');
		$work_unit=$this->input->post('work_unit');
		$upimg=$this->input->post('upimg');
		$detail=$this->input->post('detail');
		// End  row ประวัติส่วนตัว

		// Start  row ผลงานวิจัย
		$recname=$this->input->post('recname');
		$recname_eng=$this->input->post('recname_eng');
		$ret_detail=$this->input->post('ret_detail');
		$m_id=$this->input->post('m_id');
		$patent=$this->input->post('patent');
		$status=$this->input->post('status');
		$re_start=$this->input->post('re_start');
		$re_end=$this->input->post('re_end');
		$abstract=$this->input->post('abstract');
		$award=$this->input->post('award');
		$rea_type=$this->input->post('rea_type');
		$rea_date=$this->input->post('rea_date');
		// End  row ผลงานวิจัย

		// ประวัติการทำงาน
		$work_start=$this->input->post('work_start');
		$work_end=$this->input->post('work_end');
		$work_office=$this->input->post('work_office');
		// End  row ประวัติการทำงาน

		// Start  row ประวัติการศึกษา
		$degree=$this->input->post('degree');
		$dct_year=$this->input->post('dct_year');
		$faculty=$this->input->post('faculty');
		$major=$this->input->post('major');
		$university=$this->input->post('university');
		// End  row ประวัติการศึกษา

		$this->project_service_model->adddata();
		redirect("project_service");
		
	}

	
}