<?php defined ('BASEPATH') OR exit ('No direct script access allwed');
header("Content-Type: text/html; charset=utf-8");

class Frcoresearchplatform extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->helper('string');
		//$this->load->library('session');

	}

	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');

		if( $_SERVER["REQUEST_METHOD"] == "POST"){
			
			
			$insertCompany=array();
			$insertCompany["C_name"]=$this->input->post("C_name");
			$insertCompany["C_address"]=$this->input->post("C_address");
			$insertCompany["C_company_type"]=$this->input->post("C_company_type");
			$insertCompany["C_company_type_etc"]=$this->input->post("C_company_type_etc");
			$insertCompany["C_investment"]=$this->input->post("C_investment");
			

			$insertData=array();
			$insertData["P_title"]=$this->input->post("P_title");
			$insertData["P_name"]=$this->input->post("P_name");
			$insertData["P_lastname"]=$this->input->post("P_lastname");
			$insertData["P_mail"]=$this->input->post("P_mail");


			$insertService=array();
			$insertService["Co_no_emp_total"]=$this->input->post("Co_no_emp_total");
			$insertService["Co_main_pro1"]=$this->input->post("Co_main_pro1");
			$insertService["Spf_id"]='2';


			$insertplan=array();
			$insertplan["Pl_month1"]=$this->input->post("Pl_month1");
			$insertplan["Pl_month2"]=$this->input->post("Pl_month2");
			$insertplan["Pl_month3"]=$this->input->post("Pl_month3");
			$insertplan["Pl_month4"]=$this->input->post("Pl_month4");
			$insertplan["Pl_month5"]=$this->input->post("Pl_month5");
			$insertplan["Pl_month6"]=$this->input->post("Pl_month6");
			$insertplan["Pl_activity1"]=$this->input->post("Pl_activity1");
			$insertplan["Pl_activity2"]=$this->input->post("Pl_activity2");
			$insertplan["Pl_activity3"]=$this->input->post("Pl_activity3");
			$insertplan["Pl_activity4"]=$this->input->post("Pl_activity4");
			$insertplan["Pl_activity5"]=$this->input->post("Pl_activity5");
			$insertplan["Pl_activity6"]=$this->input->post("Pl_activity6");
			//$insertresponsible["Spf_id"]=$this->input->post("Spf_id");


			$insertbudgetaction=array();
			$insertbudgetaction["Bg_action1"]=$this->input->post("Bg_action1");
			$insertbudgetaction["Bg_action2"]=$this->input->post("Bg_action2");
			$insertbudgetaction["Bg_action3"]=$this->input->post("Bg_action3");
			$insertbudgetaction["Bg_action4"]=$this->input->post("Bg_action4");
			$insertbudgetaction["Bg_reward1"]=$this->input->post("Bg_reward1");
			$insertbudgetaction["Bg_reward2"]=$this->input->post("Bg_reward2");
			$insertbudgetaction["Bg_reward3"]=$this->input->post("Bg_reward3");
			$insertbudgetaction["Bg_reward4"]=$this->input->post("Bg_reward4");
			$insertbudgetaction["Bg_wage1"]=$this->input->post("Bg_wage1");
			$insertbudgetaction["Bg_wage2"]=$this->input->post("Bg_wage2");
			$insertbudgetaction["Bg_wage3"]=$this->input->post("Bg_wage3");
			$insertbudgetaction["Bg_wage4"]=$this->input->post("Bg_wage4");
			$insertbudgetaction["Bg_expenses1"]=$this->input->post("Bg_expenses1");
			$insertbudgetaction["Bg_expenses2"]=$this->input->post("Bg_expenses2");
			$insertbudgetaction["Bg_expenses3"]=$this->input->post("Bg_expenses3");
			$insertbudgetaction["Bg_expenses4"]=$this->input->post("Bg_expenses4");
			$insertbudgetaction["Bg_material1"]=$this->input->post("Bg_material1");
			$insertbudgetaction["Bg_material2"]=$this->input->post("Bg_material2");
			$insertbudgetaction["Bg_material3"]=$this->input->post("Bg_material3");
			$insertbudgetaction["Bg_material4"]=$this->input->post("Bg_material4");
			$insertbudgetaction["Bg_living1"]=$this->input->post("Bg_living1");
			$insertbudgetaction["Bg_living2"]=$this->input->post("Bg_living2");
			$insertbudgetaction["Bg_living3"]=$this->input->post("Bg_living3");
			$insertbudgetaction["Bg_living4"]=$this->input->post("Bg_living4");
			$insertbudgetaction["Bg_management1"]=$this->input->post("Bg_management1");
			$insertbudgetaction["Bg_management2"]=$this->input->post("Bg_management2");
			$insertbudgetaction["Bg_management3"]=$this->input->post("Bg_management3");
			$insertbudgetaction["Bg_management4"]=$this->input->post("Bg_management4");
			$insertbudgetaction["Bg_total1"]=$this->input->post("Bg_total1");
			$insertbudgetaction["Bg_total2"]=$this->input->post("Bg_total2");
			$insertbudgetaction["Bg_total3"]=$this->input->post("Bg_total3");
			$insertbudgetaction["Bg_total4"]=$this->input->post("Bg_total4");
			//$insertresponsible["Spf_id"]=$this->input->post("Spf_id");

			$insertbudgetinvest=array();
			$insertbudgetinvest["Bg_in_invest1"]=$this->input->post("Bg_in_invest1");
			$insertbudgetinvest["Bg_in_invest2"]=$this->input->post("Bg_in_invest2");
			$insertbudgetinvest["Bg_in_invest3"]=$this->input->post("Bg_in_invest3");
			$insertbudgetinvest["Bg_in_invest4"]=$this->input->post("Bg_in_invest4");
			$insertbudgetinvest["Bg_in_durable1"]=$this->input->post("Bg_in_durable1");
			$insertbudgetinvest["Bg_in_durable2"]=$this->input->post("Bg_in_durable2");
			$insertbudgetinvest["Bg_in_durable3"]=$this->input->post("Bg_in_durable3");
			$insertbudgetinvest["Bg_in_durable4"]=$this->input->post("Bg_in_durable4");
			$insertbudgetinvest["Bg_in_building1"]=$this->input->post("Bg_in_building1");
			$insertbudgetinvest["Bg_in_building2"]=$this->input->post("Bg_in_building2");
			$insertbudgetinvest["Bg_in_building3"]=$this->input->post("Bg_in_building3");
			$insertbudgetinvest["Bg_in_building4"]=$this->input->post("Bg_in_building4");
			$insertbudgetinvest["Bg_in_total1"]=$this->input->post("Bg_in_total1");
			$insertbudgetinvest["Bg_in_total2"]=$this->input->post("Bg_in_total2");
			$insertbudgetinvest["Bg_in_total3"]=$this->input->post("Bg_in_total3");
			$insertbudgetinvest["Bg_in_total4"]=$this->input->post("Bg_in_total4");
			$insertbudgetinvest["Bg_in_sum1"]=$this->input->post("Bg_in_sum1");
			$insertbudgetinvest["Bg_in_sum2"]=$this->input->post("Bg_in_sum2");
			$insertbudgetinvest["Bg_in_sum3"]=$this->input->post("Bg_in_sum3");
			$insertbudgetinvest["Bg_in_sum4"]=$this->input->post("Bg_in_sum4");
			

			$insertcoresearch=array();
			$insertcoresearch["Co_id"]=$this->input->post("random");
			$insertcoresearch["Co_date"]=$this->input->post("Co_date");
			$insertcoresearch["Co_name_pro"]=$this->input->post("Co_name_pro");
			$insertcoresearch["Co_secter"]=$this->input->post("Co_secter");
			$insertcoresearch["Co_secter_etc"]=$this->input->post("Co_secter_etc");
			$insertcoresearch["Co_origin"]=$this->input->post("Co_origin");
			$insertcoresearch["Co_objective"]=$this->input->post("Co_objective");
			$insertcoresearch["Co_reason"]=$this->input->post("Co_reason");
			$insertcoresearch["Co_pro_together"]=$this->input->post("Co_pro_together");
			$insertcoresearch["Co_lab_re"]=$this->input->post("Co_lab_re");
			$insertcoresearch["Co_result"]=$this->input->post("Co_result");
			$insertcoresearch["Co_dem"]=$this->input->post("Co_dem");
			$insertcoresearch["Co_agreement"]=$this->input->post("Co_agreement");	
			$insertcoresearch["Spf_id"]='2';
			$insertcoresearch["Co_status"]="รอดำเนินงาน";
			
			$file1 = iconv("UTF-8", "TIS-620", $_FILES["F_1"]["name"]);
			$file2 = iconv("UTF-8", "TIS-620", $_FILES["F_2"]["name"]);
			$file3 = iconv("UTF-8", "TIS-620", $_FILES["F_3"]["name"]);
			$file4 = iconv("UTF-8", "TIS-620", $_FILES["F_4"]["name"]);

			$path = "File/CoresearchFile";
			if(!@mkdir($path,0,true)){}else{ };
			//mkdir($path.''.$sv_received_ID.'_'.$user_ID);
			chmod($path, 0777); 
			//$_FILES["filename"]["name"]
			// $F_1 = pathinfo($_FILES["F_1"]["name"], PATHINFO_EXTENSION);
			//$is_file_upload = date('YmdHis') .".". $ext;

			move_uploaded_file($_FILES["F_1"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file1);
			// echo $_FILES["F_1"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$_FILES["F_1"]["name"];
			move_uploaded_file($_FILES["F_2"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file2);
			move_uploaded_file($_FILES["F_3"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file3);
			move_uploaded_file($_FILES["F_4"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file4);

			$insertFile=array();
			$insertFile["F_1"]=$_POST["random"].'_'.$_FILES["F_1"]["name"];
			$insertFile["F_2"]=$_POST["random"].'_'.$_FILES["F_2"]["name"];
			$insertFile["F_3"]=$_POST["random"].'_'.$_FILES["F_3"]["name"];
			$insertFile["F_4"]=$_POST["random"].'_'.$_FILES["F_4"]["name"];
			$insertFile["Spf_id"]='2';

			$insertresponsible=array();
			$insertresponsible["Rp_name"]=$this->input->post("Rp_name");
			$insertresponsible["Rp_position"]=$this->input->post("Rp_position");
			$insertresponsible["Rp_institute"]=$this->input->post("Rp_institute");
			$insertresponsible["Rp_address"]=$this->input->post("Rp_address");
			$insertresponsible["Rp_phone"]=$this->input->post("Rp_phone");
			$insertresponsible["Rp_fax"]=$this->input->post("Rp_fax");
			$insertresponsible["Rp_mail"]=$this->input->post("Rp_mail");
			//$insertresponsible["Spf_id"]=$this->input->post("Spf_id");


			$this->load->view('frontend/recaptchalib');
			$privatekey = "6Lc_hf0SAAAAAA3RRsSijZY-W1aZLCovwCv0J8ZM";
			$resp = recaptcha_check_answer ($privatekey,
				$_SERVER["REMOTE_ADDR"],
				$_POST["recaptcha_challenge_field"],
				$_POST["recaptcha_response_field"]);


			if($insertCompany["C_name"]=="" || $insertCompany["C_company_type"]=="" || $insertCompany["C_investment"]=="" ){

			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ ');</script>";
			redirect('frontend/frcoresearch', 'refresh');

			}else if($insertData["P_name"]=="" || $insertData["P_phone"]==""){

			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ');</script>";
			redirect('frontend/frcoresearch', 'refresh');

			}else if($insertresponsible["Rp_name"]=="" || $insertresponsible["Rp_position"]=="" || $insertresponsible["Rp_phone"]=="" || $insertresponsible["Rp_institute"]==""){

			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ >_<');</script>";
			redirect('frontend/frcoresearch', 'refresh');

			}else if($insertcoresearch["Co_date"]=="" || $insertcoresearch["Co_name_pro"]=="" || $insertcoresearch["Co_secter"]=="" 
				|| $insertcoresearch["Co_origin"]=="" || $insertcoresearch["Co_objective"]=="" || $insertcoresearch["Co_status"]=="" ){

			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบนะคะ ^_^');</script>";
			redirect('frontend/frcoresearch', 'refresh');

			}else if($insertFile["F_1"]=="" || $insertFile["F_2"]=="" || $insertFile["F_3"]=="" || $insertFile["F_4"]=="" ){

			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบนะคะ *_*');</script>";
			redirect('frontend/frcoresearch', 'refresh');

			}else if (!$resp->is_valid) {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณาพิมพ์รหัสตามภาพ');</script>";
				redirect('frontend/frserviceplatform', 'refresh');

			}else{
				
            	//print_r($C_id);
            	//die(); //ทำแค่ถึงตรงนี้
				//print_r($this->db->last_query());

				$this->db->insert('company', $insertCompany);
				
				$C_id = $this->db->insert_id();
            	$insertData["C_id"] = $C_id;
				$this->db->insert('contact_person', $insertData);

				$P_id = $this->db->insert_id();

				$this->db->insert('co_company', $insertService);

				$Co_com_id = $this->db->insert_id();

				$this->db->insert('plan', $insertplan);

				$Pl_id = $this->db->insert_id();

				$this->db->insert('budget_action', $insertbudgetaction);

				$Bg_id = $this->db->insert_id();

				$this->db->insert('budget_invest', $insertbudgetinvest);

				$Bg_in_id = $this->db->insert_id();

				$this->db->insert('file', $insertFile);

				$F_id = $this->db->insert_id();

				$this->db->insert('responsible_person', $insertresponsible);

				$Rp_id = $this->db->insert_id();
			
			
				$insertcoresearch["C_id"] = $C_id;
	
				$insertcoresearch["P_id"] = $P_id;

				$insertcoresearch["Co_com_id"] = $Co_com_id;

				$insertcoresearch["Pl_id"] = $Pl_id;

				$insertcoresearch["Bg_id"] = $Bg_id;

				$insertcoresearch["Bg_in_id"] = $Bg_in_id;

				$insertcoresearch["F_id"] = $F_id;

				
				$insertcoresearch["Rp_id"] = $Rp_id;

				$this->db->insert('coresearch_irct', $insertcoresearch);

            	//die(); //ทำแค่ถึงตรงนี้

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
				redirect('frontend/frcoresearchplatform', 'refresh');
		}
	}

		$data['action']=site_url('frontend/frcoresearchplatform/index/');
		$this->load->view('frontend/frcoresearchplatform',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');

	}
}