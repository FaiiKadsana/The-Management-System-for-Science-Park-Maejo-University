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

		// Start  row ข้อมูลนักวิจัย
		$rec_name_thai=$this->input->post('rec_name_thai');
		$rec_ln_thai=$this->input->post('rec_ln_thai');
		$rec_name_eng=$this->input->post('rec_name_eng');
		$rec_ln_eng=$this->input->post('rec_ln_eng');
		$rec_address=$this->input->post('rec_address');
		$rec_phone=$this->input->post('rec_phone');
		$rec_mail=$this->input->post('rec_mail');
		$rec_pos_detail=$this->input->post('rec_position');
		$rec_unit=$this->input->post('rec_unit');
		$rec_img=$this->input->post('rec_img');
		$rec_office=$this->input->post('rec_office');
		$sct_detail=$this->input->post('sct_detail');
		// End  row ข้อมูลนักวิจัย

		// Start  row ประวัติการศึกษา
		$dct_degree=$this->input->post('dct_degree');
		$dct_year=$this->input->post('dct_year');
		$dct_faculty=$this->input->post('dct_faculty');
		$dct_major=$this->input->post('dct_major');
		$dct_university=$this->input->post('dct_university');
		// End  row ประวัติการศึกษา

		// Start  row ข้อมูลผู้ติดต่อ
		$bus_title=$this->input->post('bus_title');
		$bus_name=$this->input->post('bus_name');
		$bus_ln=$this->input->post('bus_ln');
		$bus_code=$this->input->post('bus_code');
		$bus_position=$this->input->post('bus_position');
		$bus_phone=$this->input->post('bus_phone');
		$bus_mail=$this->input->post('bus_mail');
		// End  row ข้อมูลผู้ติดต่อ

		// Start  row ข้อมูลทางธุรกิจ
		$bus_name=$this->input->post('bus_name');
		$bus_owners=$this->input->post('bus_owners');
		$bus_address=$this->input->post('bus_address');
		$bus_phone=$this->input->post('bus_phone');
		$bus_fax=$this->input->post('bus_fax');
		$bus_website=$this->input->post('bus_website');
		$bus_id=$this->input->post('bus_id');
		$bus_type=$this->input->post('bus_type');
		$industry_type=$this->input->post('industry_type');
		$undertaking=$this->input->post('undertaking');
		$bus_mony=$this->input->post('bus_mony');
		$bus_amount=$this->input->post('bus_amount');
		// End  row ข้อมูลทางธุรกิจ

		// Start  row ข้อมูลโครงการ
		$re_name=$this->input->post('re_name');
		$re_name_eng=$this->input->post('re_name_eng');
		$ret_detail=$this->input->post('ret_detail');
		$m_id=$this->input->post('m_id');
		$re_start=$this->input->post('re_start');
		$re_end=$this->input->post('re_end');
		$re_id_patent=$this->input->post('re_id_patent');
		$re_status=$this->input->post('re_status');
		$re_finances_1=$this->input->post('re_finances_1');
		$re_finances_2=$this->input->post('re_finances_2');
		$re_abstract=$this->input->post('re_abstract');
		$res_award=$this->input->post('res_award');
		$rea_type=$this->input->post('rea_type');
		$rea_date=$this->input->post('rea_date');
		$re_picture=$this->input->post('re_picture');
		// End  row ข้อมูลโครงการ

		$this->project_service_model->adddata();
		redirect("project_service");
		
	}

	
}