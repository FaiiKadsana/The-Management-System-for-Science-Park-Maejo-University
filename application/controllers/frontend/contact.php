<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Contact extends CI_Controller {

	public function __construct (){
		parent::__construct();

		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			
			
			$insertData=array();
			$insertData["company"]=$this->input->post("company");
			$insertData["name"]=$this->input->post("username");
			$insertData["subject"]=$this->input->post("subject");
			$insertData["email"]=$this->input->post("email");
			$insertData["detail"]=$this->input->post("detail");
			$insertData["date"]= date("Y-m-d H:i:s");

			$this->load->view('frontend/recaptchalib');
			$privatekey = "6Lc_hf0SAAAAAA3RRsSijZY-W1aZLCovwCv0J8ZM";
			$resp = recaptcha_check_answer ($privatekey,
				$_SERVER["REMOTE_ADDR"],
				$_POST["recaptcha_challenge_field"],
				$_POST["recaptcha_response_field"]);

			if($insertData["company"]=="" || $insertData["name"]=="" || $insertData["subject"]=="" || $insertData["email"]=="" ||  $insertData["detail"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบ');</script>";
				redirect('frontend/contact', 'refresh');
			}else if (!$resp->is_valid) {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณาพิมพ์รหัสตามภาพ');</script>";
				redirect('frontend/contact', 'refresh');

			} else {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
				$this->db->insert('contact', $insertData);
				print_r($this->db->last_query());
				redirect('frontend/contact', 'refresh');


			}


		}

		$data['action']=site_url('frontend/contact/index/');

		$this->load->view('frontend/contact',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');

	}

	public function showperson(){
		$this->db->select('officer.O_title,
			officer.O_name,
			officer.O_lastname,
			officer.O_position,
			officer.O_phone');
		
		$this->db->order_by("O_id", "desc");

		$this->db->limit(8,0);

		$officer = $this->db->get('officer');
		
		print_r ($this->db->last_query());

		$data['officer'] = $officer->result();

		//**************************//
	
		$this->load->view('frontend/contact',$data);
		
	}
	
}