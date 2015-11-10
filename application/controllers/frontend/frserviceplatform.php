<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Frserviceplatform extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->helper('string');
		
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			
				
			$insertData=array();
			$insertData["P_title"]=$this->input->post("P_title");
			$insertData["P_name"]=$this->input->post("P_name");
			$insertData["P_lastname"]=$this->input->post("P_lastname");
			$insertData["P_id_card"]=$this->input->post("P_id_card");
			$insertData["P_position"]=$this->input->post("P_position");
			$insertData["P_phone"]=$this->input->post("P_phone");
			$insertData["P_mail"]=$this->input->post("P_mail");

			
			$insertCompany=array();
			$insertCompany["C_name"]=$this->input->post("C_name");
			$insertAddress["C_address"]=$this->input->post("C_address");
			$insertCompany["C_phone"]=$this->input->post("C_phone");
			$insertCompany["C_fax"]=$this->input->post("C_fax");
			$insertCompany["C_website"]=$this->input->post("email");
			$insertCompany["C_no_com"]=$this->input->post("C_website");
			$insertCompany["C_no_com_etc"]=$this->input->post("C_no_com_etc");
			$insertCompany["C_company_type"]=$this->input->post("C_company_type");
			$insertCompany["C_company_type_etc"]=$this->input->post("C_company_type_etc");
			$insertCompany["C_undertaking"]=$this->input->post("C_undertaking");
			$insertCompany["C_undertaking_etc"]=$this->input->post("C_undertaking_etc");
			$insertCompany["C_industry_type"]=$this->input->post("C_industry_type");
			$insertCompany["C_industry_type_etc"]=$this->input->post("C_industry_type_etc");
			$insertCompany["C_investment"]=$this->input->post("C_investment");
			$insertCompany["C_no_year"]=$this->input->post("C_no_year");


			$insertservice=array();
			$insertservice["S_id"]=$this->input->post("S_id");
			$insertservice["S_date"]=$this->input->post("S_date");
			$insertservice["S_no_emp_total"]=$this->input->post("S_no_emp_total");
			$insertservice["S_no_emp_reg"]=$this->input->post("S_no_emp_reg");
			$insertservice["S_no_emp_tem"]=$this->input->post("S_no_emp_tem");
			$insertservice["S_main_pro1"]=$this->input->post("S_main_pro1");
			$insertservice["S_main_pro2"]=$this->input->post("S_main_pro2");
			$insertservice["S_main_pro3"]=$this->input->post("S_main_pro3");
			$insertservice["S_circulation"]=$this->input->post("S_circulation");
			$insertservice["S_profit"]=$this->input->post("S_profit");
			$insertservice["S_capital"]=$this->input->post("S_capital");
			$insertservice["S_management"]=$this->input->post("S_management");
			$insertservice["S_work"]=$this->input->post("S_work");
			$insertservice["S_humanresource"]=$this->input->post("S_humanresource");
			$insertservice["S_technology"]=$this->input->post("S_technology");
			$insertservice["S_technology_etc"]=$this->input->post("S_technology_etc");
			$insertservice["S_etc"]=$this->input->post("S_etc");
			$insertservice["S_etc_deteil"]=$this->input->post("S_etc_deteil");
			$insertservice["S_detail"]=$this->input->post("S_detail");
			$insertservice["S_agreement"]=$this->input->post("S_agreement");
			$insertservice["S_provider"]=$this->input->post("S_provider");
			
			
			$this->load->view('index/recaptchalib');
			$privatekey = "6Lc_hf0SAAAAAA3RRsSijZY-W1aZLCovwCv0J8ZM";
			$resp = recaptcha_check_answer ($privatekey,
				$_SERVER["REMOTE_ADDR"],
				$_POST["recaptcha_challenge_field"],
				$_POST["recaptcha_response_field"]);

			if($insertData["subject"]=="" || $insertData["detail"]=="" || $insertData["name"]=="" ||  $insertData["email"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบ');</script>";
				redirect('index/contact', 'refresh');

			}else if (!$resp->is_valid) {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณาพิมพ์รหัสตามภาพ');</script>";
				redirect('index/contact', 'refresh');

			} else {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้วครับ');</script>";
				$this->db->insert('contact', $insertData);
				redirect('index/contact', 'refresh');
			}
			


		}

		$data['action']=site_url('index/contact/index/');
	
		$this->load->view('frontend/frserviceplatform',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
	
	}

}