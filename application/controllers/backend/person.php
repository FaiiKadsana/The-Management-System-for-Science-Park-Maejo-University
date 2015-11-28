<?php defined ('BASEPATH') OR exit ('No direct script access allwed');
header("Content-Type: text/html; charset=utf-8");
class Person extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');


	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		//INSERT

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{

			$insertPerson=array();
			$insertPerson["O_title"]=$this->input->post("O_title");
			$insertPerson["O_name"]=$this->input->post("O_name");
			$insertPerson["O_lastname"]=$this->input->post("O_lastname");
			$insertPerson["O_id_card"]=$this->input->post("O_id_card");
			$insertPerson["O_position"]=$this->input->post("O_position");
			$insertPerson["O_email"]=$this->input->post("O_email");
			$insertPerson["O_phone"]=$this->input->post("O_phone");
			$insertPerson["O_password"]=$this->input->post("O_password");
			$insertPerson["O_status"]=$this->input->post("O_status");
			$insertPerson["O_status_work"]=$this->input->post("O_status_work");
			
			$file = iconv("UTF-8", "TIS-620", $_FILES["O_picture"]["name"]);
			$file1 = iconv("UTF-8", "TIS-620", $_POST["O_name"]);

			$insertPerson["O_picture"]=$_POST["O_name"].'_'.$_FILES["O_picture"]["name"];

			$path = "asset\img\person";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["O_picture"]["tmp_name"],$path.'/'.$file1.'_'.$file);

			
			if($insertPerson["O_title"]=="" || $insertPerson["O_name"]=="" 
				|| $insertPerson["O_lastname"]==""|| $insertPerson["O_id_card"]==""|| $insertPerson["O_position"]==""
				|| $insertPerson["O_email"]==""|| $insertPerson["O_phone"]==""|| $insertPerson["O_password"]==""
				|| $insertPerson["O_status"]==""|| $insertPerson["O_status_work"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ');</script>";
			redirect('backend/person', 'refresh');

		}else {
			echo "<meta http-equv=i'Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
			$this->db->insert('officer', $insertPerson);
			redirect('backend/person', 'refresh');
		}

	}

	//END INSERT

	//SEARCH

	$this->db->select('officer.O_id,officer.O_title, officer.O_name, officer.O_lastname,officer.O_position');
	$this->db->order_by("O_id", "asc");
	$this->db->limit(10,0);
	$officer = $this->db->get('officer');

		//print_r ($this->db->last_query());

	$data['officer'] = $officer->result();


	if( $_SERVER["REQUEST_METHOD"] == "POST")
	{
		$data['keyword'] = $this->input->post('keyword');
		$this->db->select('officer.O_id,officer.O_title, officer.O_name, officer.O_lastname,officer.O_position');
		$this->db->like('O_name',$data['keyword']);
		$search1 = $this->db->get('officer');
			//print_r ($this->db->last_query());
		$data['search'] = $search1->result();
			//print_r($data['search']);
	}

	//END SEARCH

	$data['action']=site_url("backend/person",$data);
	$this->load->view('backend/person',$data);
	$this->load->view('backend/script');	

}

}