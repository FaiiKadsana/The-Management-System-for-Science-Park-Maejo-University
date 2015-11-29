<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Frtbiplatform extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');




		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{

			$insertTbibusiness=array();
			$insertTbibusiness["B_concept"]=$this->input->post("B_concept");
			$insertTbibusiness["B_interest"]=$this->input->post("B_interest");
			$insertTbibusiness["B_manufacture"]=$this->input->post("B_manufacture");
			$insertTbibusiness["B_service"]=$this->input->post("B_service");
			$insertTbibusiness["B_wholesale"]=$this->input->post("B_wholesale");
			$insertTbibusiness["B_retail"]=$this->input->post("B_retail");
			$insertTbibusiness["B_business_plan"]=$this->input->post("B_business_plan");
			$insertTbibusiness["B_goal"]=$this->input->post("B_goal");
			$insertTbibusiness["B_goal_month"]=$this->input->post("B_goal_month");
			$insertTbibusiness["B_goal_year"]=$this->input->post("B_goal_year");
			$insertTbibusiness["B_investment"]=$this->input->post("B_investment");
			$insertTbibusiness["B_resources"]=$this->input->post("B_resources");
			$insertTbibusiness["B_balance"]=$this->input->post("B_balance");
			$insertTbibusiness["B_source"]=$this->input->post("B_source");
			$insertTbibusiness["B_employee"]=$this->input->post("B_employee");
			$insertTbibusiness["B_emp_sum"]=$this->input->post("B_emp_sum");
			$insertTbibusiness["B_source_etc"]=$this->input->post("B_source_etc");


			$insertTbiperson=array();
			$insertTbiperson["Tbi_picture"]=$_FILES["Tbi_picture"]["name"];
			$insertTbiperson["Tbi_title"]=$this->input->post("Tbi_title");
			$insertTbiperson["Tbi_name1"]=$this->input->post("Tbi_name1");
			$insertTbiperson["Tbi_lastname"]=$this->input->post("Tbi_lastname");
			$insertTbiperson["Tbi_code"]=$this->input->post("Tbi_code");
			$insertTbiperson["Tbi_birthday"]=$this->input->post("Tbi_birthday");
			$insertTbiperson["Tbi_age"]=$this->input->post("Tbi_age");
			$insertTbiperson["Tbi_ethnicity"]=$this->input->post("Tbi_ethnicity");
			$insertTbiperson["Tbi_ethnicity_etc"]=$this->input->post("Tbi_ethnicity_etc");
			$insertTbiperson["Tbi_nationality"]=$this->input->post("Tbi_nationality");
			$insertTbiperson["Tbi_nationality_etc"]=$this->input->post("Tbi_nationality_etc");
			$insertTbiperson["Tbi_tell"]=$this->input->post("Tbi_tell");
			$insertTbiperson["Tbi_address"]=$this->input->post("Tbi_address");
			$insertTbiperson["Tbi_fax"]=$this->input->post("Tbi_fax");
			$insertTbiperson["Tbi_phone"]=$this->input->post("Tbi_phone");
			$insertTbiperson["Tbi_mail"]=$this->input->post("Tbi_mail");

			$file = iconv("UTF-8", "TIS-620", $_FILES["Tbi_picture"]["name"]);
			$path = "asset\img\Tbi";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["Tbi_picture"]["tmp_name"],$path.'/'.$_POST['Tbi_name1'].'_'.$file);
			

			$insertTbiperson1=array();
			$insertTbiperson1["Tbi_education"]=$this->input->post("Tbi_education");
			$insertTbiperson1["Tbi_year"]=$this->input->post("Tbi_year");
			$insertTbiperson1["Tbi_major"]=$this->input->post("Tbi_major");
			$insertTbiperson1["Tbi_university"]=$this->input->post("Tbi_university");
			$insertTbiperson1["Tbi_degree"]=$this->input->post("Tbi_degree");
			$insertTbiperson1["Tbi_degree_etc"]=$this->input->post("Tbi_degree_etc");
			$insertTbiperson1["Tbi_occupation"]=$this->input->post("Tbi_occupation");
			$insertTbiperson1["Tbi_notwork_time"]=$this->input->post("Tbi_notwork_time");
			$insertTbiperson1["Tbi_emp_company"]=$this->input->post("Tbi_emp_company");
			$insertTbiperson1["Tbi_type_business"]=$this->input->post("Tbi_type_business");
			$insertTbiperson1["Tbi_official"]=$this->input->post("Tbi_official");
			$insertTbiperson1["Tbi_etc"]=$this->input->post("Tbi_etc");
			$insertTbiperson1["Tbi_owners"]=$this->input->post("Tbi_owners");
			$insertTbiperson1["Tbi_owners_year"]=$this->input->post("Tbi_owners_year");


			$insertTbiservice=array();
			$insertTbiservice["Tbi_investment"]=$this->input->post("Tbi_investment");
			$insertTbiservice["Tbi_investment_etc"]=$this->input->post("Tbi_investment_etc");
			$insertTbiservice["Tbi_train"]=$this->input->post("Tbi_train");
			$insertTbiservice["Tbi_train_etc"]=$this->input->post("Tbi_train_etc");
			$insertTbiservice["Tbi_research"]=$this->input->post("Tbi_research");
			$insertTbiservice["Tbi_research_etc"]=$this->input->post("Tbi_research_etc");
			$insertTbiservice["Tbi_service"]=$this->input->post("Tbi_service");
			$insertTbiservice["Tbi_service_etc"]=$this->input->post("Tbi_service_etc");
			$insertTbiservice["Tbi_counsel"]=$this->input->post("Tbi_counsel");
			$insertTbiservice["Tbi_counsel_etc"]=$this->input->post("Tbi_counsel_etc");
			$insertTbiservice["Tbi_lab"]=$this->input->post("Tbi_lab");
			$insertTbiservice["Tbi_lab_etc"]=$this->input->post("Tbi_lab_etc");
			$insertTbiservice["Tbi_certification"]=$this->input->post("Tbi_certification");
			$insertTbiservice["Tbi_certification_iso"]=$this->input->post("Tbi_certification_iso");
			$insertTbiservice["Tbi_certification_etc"]=$this->input->post("Tbi_certification_etc");
			$insertTbiservice["Tbi_announce"]=$this->input->post("Tbi_announce");
			$insertTbiservice["Tbi_announce_etc"]=$this->input->post("Tbi_announce_etc");
			$insertTbiservice["Tbi_coordinate"]=$this->input->post("Tbi_coordinate");
			$insertTbiservice["Tbi_coordinate_etc"]=$this->input->post("Tbi_coordinate_etc");
			$insertTbiservice["Tbi_funding"]=$this->input->post("Tbi_funding");
			$insertTbiservice["Tbi_funding_etc"]=$this->input->post("Tbi_funding_etc");
			$insertTbiservice["Tbi_asset"]=$this->input->post("Tbi_asset");
			$insertTbiservice["Tbi_asset_etc"]=$this->input->post("Tbi_asset_etc");


			$file1 = iconv("UTF-8", "TIS-620", $_FILES["F_1"]["name"]);
			$file2 = iconv("UTF-8", "TIS-620", $_FILES["F_2"]["name"]);
			$file3 = iconv("UTF-8", "TIS-620", $_FILES["F_3"]["name"]);
			$file4 = iconv("UTF-8", "TIS-620", $_FILES["F_4"]["name"]);

			$path = "File/TbiFile";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["F_1"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file1);
			move_uploaded_file($_FILES["F_2"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file2);
			move_uploaded_file($_FILES["F_3"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file3);
			move_uploaded_file($_FILES["F_4"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file4);

			$insertFile=array();
			$insertFile["F_1"]=$_FILES["F_1"]["name"];
			$insertFile["F_2"]=$_FILES["F_2"]["name"];
			$insertFile["F_3"]=$_FILES["F_3"]["name"];
			$insertFile["F_4"]=$_FILES["F_4"]["name"];
		

			$insertTbi=array();
			$insertTbi["Tbi_id3"]=$this->input->post("random");
			$insertTbi["Tbi_id4"]=$this->input->post("Tbi_id4");
			$insertTbi["Tbi_date"]=$this->input->post("Tbi_date");
			$insertTbi["Tbi_name"]=$this->input->post("Tbi_name");
			$insertTbi["Tbi_evidence_register"]=$this->input->post("Tbi_evidence_register");
			$insertTbi["Tbi_evidence_register_etc"]=$this->input->post("Tbi_evidence_register_etc");
			$insertTbi["Tbi_code"]=$this->input->post("Tbi_code");
			$insertTbi["Tbi_education"]=$this->input->post("Tbi_education");
			$insertTbi["Tbi_appointment"]=$this->input->post("Tbi_appointment");
			$insertTbi["Tbi_date_concept"]=$this->input->post("Tbi_date_concept");
			$insertTbi["Tbi_date_meet"]=$this->input->post("Tbi_date_meet");
			$insertTbi["Tbi_practicality"]=$this->input->post("Tbi_practicality");
			$insertTbi["Tbi_inspector"]=$this->input->post("Tbi_inspector");
			$insertTbi["Tbi_date_inspect"]=$this->input->post("Tbi_date_inspect");
			$insertTbi["Tbi_date_register"]=$this->input->post("Tbi_date_register");
			$insertTbi["Spf_id"]='4';
			$insertTbi["Tbi_id5"]='1';

	
			$this->load->view('frontend/recaptchalib');
			$privatekey = "6Lc_hf0SAAAAAA3RRsSijZY-W1aZLCovwCv0J8ZM";
			$resp = recaptcha_check_answer ($privatekey,
				$_SERVER["REMOTE_ADDR"],
				$_POST["recaptcha_challenge_field"],
				$_POST["recaptcha_response_field"]);

			
			if($insertTbibusiness["B_concept"]=="" || $insertTbibusiness["B_interest"]=="" || $insertTbibusiness["B_business_plan"]==""
				|| $insertTbibusiness["B_resources"]==""|| $insertTbibusiness["B_business_plan"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบ');</script>";
				redirect('frontend/frtbiplatform', 'refresh');

			}
			else if($insertTbiperson["Tbi_name1"]=="" || $insertTbiperson["Tbi_code"]=="" || $insertTbiperson["Tbi_lastname"]=="" || $insertTbiperson["Tbi_tell"]==""
				|| $insertTbiperson["Tbi_phone"]==""|| $insertTbiperson["Tbi_mail"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วย');</script>";
				redirect('frontend/frtbiplatform', 'refresh');

			}
			/*else if(){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วยนะ');</script>";
				redirect('frontend/frtbiplatform', 'refresh');

			}*/

			else if($insertTbiservice["Tbi_investment"]=="" || $insertTbiservice["Tbi_train"]=="" || $insertTbiservice["Tbi_counsel"]=="" || $insertTbiservice["Tbi_lab"]==""
				|| $insertTbiservice["Tbi_funding"]=="" || $insertTbiservice["Tbi_asset"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วยนะคะ');</script>";
				redirect('frontend/frtbiplatform', 'refresh');

			}

			else if($insertFile["F_1"]=="" || $insertFile["F_2"]=="" || $insertFile["F_3"]=="" || $insertFile["F_4"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณาแนบเอกสารให้ครบคะ');</script>";
				redirect('frontend/frtbiplatform', 'refresh');

			}
			
			else if( $insertTbi["Tbi_date"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ');</script>";
				redirect('frontend/frtbiplatform', 'refresh');
			}

			else if (!$resp->is_valid) {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณาพิมพ์รหัสตามภาพ');</script>";
				redirect('frontend/frtbiplatform', 'refresh');

			}else {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
				

			$this->db->insert('tbi_business', $insertTbibusiness);

				$B_id = $this->db->insert_id();

			$this->db->insert('tbi_person', $insertTbiperson);

				$Tbi_id = $this->db->insert_id();

			$this->db->insert('tbi_person1', $insertTbiperson1);

				$Tbi_id1 = $this->db->insert_id();

			$this->db->insert('tbi_service', $insertTbiservice);

				$Tbi_id2 = $this->db->insert_id();

			$this->db->insert('file1', $insertFile);

				$F_id1 = $this->db->insert_id();

				$insertTbi["B_id"] = $B_id;
	
				$insertTbi["Tbi_id"] = $Tbi_id;

				$insertTbi["Tbi_id1"] = $Tbi_id1;

				$insertTbi["Tbi_id2"] = $Tbi_id2;

				$insertTbi["F_id1"] = $F_id1;

			$this->db->insert('tbi', $insertTbi);

			//print_r ($this->db->last_query());	

		}
	}

	$data['action']=site_url('frontend/frtbiplatform/index/');
	$this->load->view('frontend/frtbiplatform',$data);
	$this->load->view('frontend/script');	
	$this->load->view('frontend/footer');

}
	public function statut_tbi(){

		$this->db->select('tatus_tbi.Tbi_status');	
		$this->db->order_by("O_id", "asc");
		$officer = $this->db->get('tatus_tbi');
		
		//print_r ($this->db->last_query());

		$data['tatus_tbi'] = $officer->result();

		//$data['action']=site_url('frontend/frtbiplatform/statut_tbi/');
	}


}