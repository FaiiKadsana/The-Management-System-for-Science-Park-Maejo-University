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
			$insertData["C_id"]=;
			$insertData["P_title"]=$this->input->post("P_title");
			$insertData["P_name"]=$this->input->post("P_name");
			$insertData["P_lastname"]=$this->input->post("P_lastname");
			$insertData["P_id_card"]=$this->input->post("P_id_card");
			$insertData["P_position"]=$this->input->post("P_position");
			$insertData["P_phone"]=$this->input->post("P_phone");
			$insertData["P_mail"]=$this->input->post("P_mail");
						
			$insertCompany=array();
			$insertCompany["C_name"]=$this->input->post("C_name");
			$insertCompany["C_address"]=$this->input->post("C_address");
			$insertCompany["C_phone"]=$this->input->post("C_phone");
			$insertCompany["C_fax"]=$this->input->post("C_fax");
			$insertCompany["C_website"]=$this->input->post("C_website");
			$insertCompany["C_no_com"]=$this->input->post("C_no_com");
			$insertCompany["C_no_com_etc"]=$this->input->post("C_no_com_etc");
			$insertCompany["C_company_type"]=$this->input->post("C_company_type");
			$insertCompany["C_company_type_etc"]=$this->input->post("C_company_type_etc");
			$insertCompany["C_undertaking"]=$this->input->post("C_undertaking");
			$insertCompany["C_undertaking_etc"]=$this->input->post("C_undertaking_etc");
			$insertCompany["C_industry_type"]=$this->input->post("C_industry_type");
			$insertCompany["C_industry_type_etc"]=$this->input->post("C_industry_type_etc");
			$insertCompany["C_investment"]=$this->input->post("C_investment");
			$insertCompany["C_no_year"]=$this->input->post("C_no_year");

			/*$insertService=array();
			$insertService["S_id"]=$this->input->post("S_id");
			$insertService["S_date"]=$this->input->post("S_date");
			$insertService["S_no_emp_total"]=$this->input->post("S_no_emp_total");
			$insertService["S_no_emp_reg"]=$this->input->post("S_no_emp_reg");
			$insertService["S_no_emp_tem"]=$this->input->post("S_no_emp_tem");
			$insertService["S_main_pro1"]=$this->input->post("S_main_pro1");
			$insertService["S_main_pro2"]=$this->input->post("S_main_pro2");
			$insertService["S_main_pro3"]=$this->input->post("S_main_pro3");
			$insertService["S_circulation"]=$this->input->post("S_circulation");
			$insertService["S_profit"]=$this->input->post("S_profit");
			$insertService["S_capital"]=$this->input->post("S_capital");
			$insertService["S_management"]=$this->input->post("S_management");
			$insertService["S_work"]=$this->input->post("S_work");
			$insertService["S_humanresource"]=$this->input->post("S_humanresource");
			$insertService["S_technology"]=$this->input->post("S_technology");
			$insertService["S_technology_etc"]=$this->input->post("S_technology_etc");
			$insertService["S_etc"]=$this->input->post("S_etc");
			$insertService["S_etc_deteil"]=$this->input->post("S_etc_deteil");
			$insertService["S_detail"]=$this->input->post("S_detail");
			$insertService["S_agreement"]=$this->input->post("S_agreement");
			$insertService["S_provider"]=$this->input->post("S_provider");
			$insertService["S_provider1"]=$this->input->post("S_provider1");

			$insertFile=array();
			$insertFile["F_1"]=$this->input->post("F_1");
			$insertFile["F_2"]=$this->input->post("F_2");
			$insertFile["F_3"]=$this->input->post("F_3");
			$insertFile["F_4"]=$this->input->post("F_4");
			*/
			
			$this->load->view('frontend/recaptchalib');
			$privatekey = "6Lc_hf0SAAAAAA3RRsSijZY-W1aZLCovwCv0J8ZM";
			$resp = recaptcha_check_answer ($privatekey,
				$_SERVER["REMOTE_ADDR"],
				$_POST["recaptcha_challenge_field"],
				$_POST["recaptcha_response_field"]);


			/*if($insertData["P_title"]=="" || $insertData["P_name"]=="" || $insertData["P_lastname"]=="" ||  $insertData["P_id_card"]==""
			 	|| $insertData["P_position"]=="" || $insertData["P_phone"]=="" || $insertData["P_mail"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			} if($insertCompany["C_name"]=="" || $insertCompany["C_address"]=="" || $insertCompany["C_phone"]=="" || $insertCompany["C_fax"]=="" 
				|| $insertCompany["C_website"]=="" || $insertCompany["C_no_com"]=="" || $insertCompany["C_no_com_etc"]==""
				|| $insertCompany["C_company_type"]=="" || $insertCompany["C_company_type_etc"]=="" || $insertCompany["C_undertaking"]==""
				|| $insertCompany["C_undertaking_etc"]=="" || $insertCompany["C_industry_type"]=="" || $insertCompany["C_industry_type_etc"]==""
				|| $insertCompany["C_investment"]=="" || $insertCompany["C_no_year"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			}*/if($insertCompany["C_name"]=="" || $insertCompany["C_address"]=="" || $insertCompany["C_phone"]=="" || $insertCompany["C_fax"]==""
				|| $insertCompany["C_website"]=="" || $insertCompany["C_no_com"]=="" || $insertCompany["C_no_com_etc"]=="" || $insertCompany["C_company_type"]=="" 
				|| $insertCompany["C_company_type_etc"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			}else if (!$resp->is_valid) {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณาพิมพ์รหัสตามภาพ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			} else {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
				$this->db->insert('contact_person', $insertData);
				$this->db->insert('company', $insertCompany);
				//$this->db->insert('service', $insertService);
				//$this->db->insert('file', $insertFile);
				//print_r($this->db->last_query());
				redirect('frontend/frserviceplatform', 'refresh');
			}

		}

		$data['action']=site_url('frontend/frserviceplatform/index/');
		$this->load->view('frontend/frserviceplatform',$data,$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
	 
	}

	public function ediddata(){


	}

}