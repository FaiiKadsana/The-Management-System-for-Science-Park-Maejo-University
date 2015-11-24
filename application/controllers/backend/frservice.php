<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Frservice extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->helper('string');
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{

	
			$insertCompany=array();
			$insertCompany["C_no_com"]=$this->input->post("C_no_com");
			$insertCompany["C_no_com_etc"]=$this->input->post("C_no_com_etc");
			$insertCompany["C_name"]=$this->input->post("C_name");
			$insertCompany["C_address"]=$this->input->post("C_address");
			$insertCompany["C_phone"]=$this->input->post("C_phone");
			$insertCompany["C_fax"]=$this->input->post("C_fax");
			$insertCompany["C_website"]=$this->input->post("C_website");
			$insertCompany["C_investment"]=$this->input->post("C_investment");
			$insertCompany["C_no_year"]=$this->input->post("C_no_year");
			$insertCompany["C_company_type"]=$this->input->post("C_company_type");
			$insertCompany["C_company_type_etc"]=$this->input->post("C_company_type_etc");
			$insertCompany["C_undertaking"]=$this->input->post("C_undertaking");
			$insertCompany["C_undertaking_etc"]=$this->input->post("C_undertaking_etc");
			$insertCompany["C_industry_type"]=$this->input->post("C_industry_type");
			$insertCompany["C_industry_type_etc"]=$this->input->post("C_industry_type_etc");
		

			$insertData=array();
			$insertData["P_id_card"]=$this->input->post("P_id_card");
			$insertData["P_title"]=$this->input->post("P_title");
			$insertData["P_name"]=$this->input->post("P_name");
			$insertData["P_lastname"]=$this->input->post("P_lastname");
			$insertData["P_phone"]=$this->input->post("P_phone");
			$insertData["P_mail"]=$this->input->post("P_mail");
			$insertData["P_position"]=$this->input->post("P_position");
			
			
		   	$insertService=array();
			$insertService["S_id"]=$this->input->post("random");
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
			$insertService["S_deteil_etc"]=$this->input->post("S_deteil_etc");
			$insertService["S_detail"]=$this->input->post("S_detail");
			$insertService["S_comment"]=$this->input->post("S_comment");
			$insertService["S_provider"]=$this->input->post("S_provider");
			$insertService["S_provider1"]=$this->input->post("S_provider1");
			$insertService["S_solution"]=$this->input->post("S_solution");
			$insertService["S_solution_detail"]=$this->input->post("S_solution_detail");
			$insertService["S_solution_name"]=$this->input->post("S_solution_name");
			//$insertService["S_agreement"]=$this->input->post("S_agreement");
			$insertService["S_status"]=$this->input->post("S_status");
			$insertService["Spf_id"]='1';
			//echo "<pre>";
			//print_r($insertService["S_detail_etc"]);

			//die();
			$file1 = iconv("UTF-8", "TIS-620", $_FILES["F_1"]["name"]);
			$file2 = iconv("UTF-8", "TIS-620", $_FILES["F_2"]["name"]);
			$file3 = iconv("UTF-8", "TIS-620", $_FILES["F_3"]["name"]);
			$file4 = iconv("UTF-8", "TIS-620", $_FILES["F_4"]["name"]);
			

			$path = "File/ServiceFile";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["F_1"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file1);
			// echo $_FILES["F_1"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$_FILES["F_1"]["name"];
			move_uploaded_file($_FILES["F_2"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file2);
			move_uploaded_file($_FILES["F_3"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file3);
			move_uploaded_file($_FILES["F_4"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file4);

			$insertFile=array();
			$insertFile["F_1"]=$_FILES["F_1"]["name"];
			$insertFile["F_2"]=$_FILES["F_2"]["name"];
			$insertFile["F_3"]=$_FILES["F_3"]["name"];
			$insertFile["F_4"]=$_FILES["F_4"]["name"];
			$insertFile["Spf_id"]='1';

			
			$this->load->view('frontend/recaptchalib');
			$privatekey = "6Lc_hf0SAAAAAA3RRsSijZY-W1aZLCovwCv0J8ZM";
			$resp = recaptcha_check_answer ($privatekey,
				$_SERVER["REMOTE_ADDR"],
				$_POST["recaptcha_challenge_field"],
				$_POST["recaptcha_response_field"]);

			if($insertCompany["C_name"]=="" || $insertCompany["C_phone"]=="" || $insertCompany["C_no_com"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			}else if($insertData["P_title"]=="" || $insertData["P_name"]=="" || $insertData["P_lastname"]=="" || $insertData["P_id_card"]==""
			 	|| $insertData["P_position"]=="" || $insertData["P_phone"]=="" || $insertData["P_mail"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วยคะ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			}else if($insertService["S_id"]=="" || $insertService["S_date"]=="" || $insertService["S_detail"]=="" || $insertService["S_provider"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วยนะคะ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			}
			else if($insertFile["F_1"]=="" || $insertFile["F_2"]=="" || $insertFile["F_3"]=="" || $insertFile["F_4"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณาแนบเอกสารให้ครบด้วยคะ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			}
			else if (!$resp->is_valid) {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณาพิมพ์รหัสตามภาพ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			}else {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
				$this->db->insert('company', $insertCompany);

            	//print_r($C_id);
            	//die(); //ทำแค่ถึงตรงนี้
				//print_r($this->db->last_query());

					$C_id = $this->db->insert_id();
            		$insertData["C_id"] = $C_id;
				$this->db->insert('contact_person', $insertData);

					
				$this->db->insert('file', $insertFile);

					//$insertstatusform["C_id"] = $C_id;
					//$P_id = $this->db->insert_id();
					//$insertstatusform["P_id"] = $P_id;
				//$this->db->insert('status_platform', $insertstatusform);

					$insertService["C_id"] = $C_id;
					$F_id = $this->db->insert_id();
					$insertService["F_id"] = $F_id;
					$P_id = $this->db->insert_id();
					$insertService["P_id"] = $P_id;
				$this->db->insert('service', $insertService);

				redirect('backend/frservice', 'refresh');
			}

		}

		$data['action']=site_url('backend/frservice/index/');
		$this->load->view('backend/frservice',$data,$data,$data,$data);
		$this->load->view('backend/script');	
	 
	}

	
}