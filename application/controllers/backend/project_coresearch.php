<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Project_coresearch extends CI_Controller {

	public function __construct (){
		parent::__construct();


	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{

			$insertResearchers=array();
			$insertResearchers["Rec_picture1"]=$_FILES["Rec_picture1"]["name"];
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
			
			$file = iconv("UTF-8", "TIS-620", $_FILES["Rec_picture1"]["name"]);
			$path = "asset\img\Researchers";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["Rec_picture1"]["tmp_name"],$path.'/'.$_POST['Rec_name_thai'].'_'.$file);

			$insertResearch=array();
			$insertResearch["Re_picture1"]=$_FILES["Re_picture1"]["name"];
			$insertResearch["Re_id_patent"]=$this->input->post("Re_id_patent");
			$insertResearch["Re_name1"]=$this->input->post("Re_name1");
			$insertResearch["Re_name_eng"]=$this->input->post("Re_name_eng");
			$insertResearch["Re_industry_group"]=$this->input->post("Re_industry_group");
			$insertResearch["Re_start"]=$this->input->post("Re_start");
			$insertResearch["Re_end"]=$this->input->post("Re_end");
			$insertResearch["Re_status"]=$this->input->post("Re_status");
			$insertResearch["Re_abstract"]=$this->input->post("Re_abstract");
			$insertResearch["Re_finances_sp"]=$this->input->post("Re_finances_sp");
			$insertResearch["Re_finances_b"]=$this->input->post("Re_finances_b");
			$insertResearch["Re_notes"]=$this->input->post("Re_notes");
			
			$file = iconv("UTF-8", "TIS-620", $_FILES["Re_picture1"]["name"]);
			$path = "asset\img\Research";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["Re_picture1"]["tmp_name"],$path.'/'.$_POST['Re_name1'].'_'.$file);

			if($insertResearchers["Rec_name_thai"]=="" || $insertResearchers["Rec_ln_thai"]==""
				|| $insertResearchers["Rec_name_eng"]==""|| $insertResearchers["Rec_ln_eng"]==""
				|| $insertResearchers["Rec_address"]==""|| $insertResearchers["Rec_phone"]==""
				|| $insertResearchers["Rec_mail"]==""|| $insertResearchers["Rec_position"]==""
				|| $insertResearchers["Rec_unit"]==""|| $insertResearchers["Rec_office"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วยคะ');</script>";
			redirect('backend/project_coresearch', 'refresh');

		}
		else if($insertResearch["Re_id_patent"]=="" || $insertResearch["Re_name1"]==""
			|| $insertResearch["Re_name_eng"]=="" || $insertResearch["Re_industry_group"]==""
			|| $insertResearch["Re_status"]==""|| $insertResearch["Re_abstract"]=="" ){

			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
		echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วยนะคะ');</script>";
		redirect('backend/project_coresearch', 'refresh');

	}
	else {
		echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
		echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";

		$this->db->insert('researchers', $insertResearchers);
		$this->db->insert('research', $insertResearch);
		redirect('backend/project_coresearch', 'refresh');
	}
}


$data['action']=site_url('backend/project_coresearch/index/');
$this->load->view('backend/project_coresearch',$data);
$this->load->view('backend/script');	

}


}