<?php defined ('BASEPATH') OR exit ('No direct script access allwed');
header("Content-Type: text/html; charset=utf-8");
class Contact extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');

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
				//print_r($this->db->last_query());
				redirect('frontend/contact', 'refresh');

			}

		}

		$config["base_url"]=base_url()."/frontend/contact/contact";
		$config["total_rows"] = $this->db->count_all("officer");
		$config["per_page"]=6;
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

		$this->db->select('officer.O_picture,officer.O_title,officer.O_name,officer.O_lastname,officer.O_position,officer.O_phone');
		$this->db->where("O_status_work",'พนักงาน');
		$this->db->order_by("O_id", "asc");

		$this->db->limit(6,0);

		$officer = $this->db->get('officer');
		
		//print_r ($this->db->last_query());

		$data['officer'] = $officer->result();

		$data['page']=$this->pagination->create_links();

		$data['action']=site_url('frontend/contact/index/');
		$this->load->view('frontend/contact',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');

	}
	
}