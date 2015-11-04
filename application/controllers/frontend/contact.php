<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Contact extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			
			
			$insertData=array();
			$insertData["username"]=$this->input->post("username");
			$insertData["subject"]=$this->input->post("subject");
			$insertData["email"]=$this->input->post("email");
			$insertData["detail"]=$this->input->post("detail");
			$insertData["date"]= date("Y-m-d H:i:s");
			$insertData["con_type"]= 1;
			$insertData["con_status"]= 1;



			
			$this->load->view('index/recaptchalib');
			$privatekey = "6Lc_hf0SAAAAAA3RRsSijZY-W1aZLCovwCv0J8ZM";
			$resp = recaptcha_check_answer ($privatekey,
				$_SERVER["REMOTE_ADDR"],
				$_POST["recaptcha_challenge_field"],
				$_POST["recaptcha_response_field"]);

			if($insertData["username"]=="" || $insertData["subject"]=="" || $insertData["email"]=="" ||  $insertData["detail"]=="" ){

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


		$this->load->view('frontend/contact');
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
	
	}

	
}