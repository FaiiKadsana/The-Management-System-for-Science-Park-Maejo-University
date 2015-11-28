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

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{

			$insertResearchers=array();
			$insertResearchers["Rec_picture"]=$_FILES["Rec_picture"]["name"];
			$insertResearchers["Rec_name_thai"]=$this->input->post("Rec_name_thai");
			$insertResearchers["Rec_ln_thai"]=$this->input->post("Rec_ln_thai");
			$insertResearchers["Rec_name_eng"]=$this->input->post("Rec_name_eng");
			$insertResearchers["Rec_ln_eng"]=$this->input->post("Rec_ln_eng");
			$insertResearchers["Rec_address"]=$this->input->post("Rec_address");
			$insertResearchers["Rec_phone"]=$this->input->post("Rec_phone");
			$insertResearchers["Rec_mail"]=$this->input->post("Rec_mail");
			$insertResearchers["Rec_position"]=$this->input->post("Rec_position");
			$insertResearchers["Rec_unit"]=$this->input->post("Rec_unit");
			$insertResearchers["Rec_office"]=$this->input->post("Rec_office");
			
			$file = iconv("UTF-8", "TIS-620", $_FILES["Rec_picture"]["name"]);
			$path = "asset\img\Researchers";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["Rec_picture"]["tmp_name"],$path.'/'.$_POST['Rec_name_thai'].'_'.$file);

			if($insertResearchers["Rec_name_thai"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วยคะ');</script>";
			redirect('backend/project_service', 'refresh');

		}
	}

	$data['action']=site_url('backend/project_service/index/');
	$this->load->view('backend/project_service',$data);
	$this->load->view('backend/script');	

}


}