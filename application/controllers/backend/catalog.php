<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Catalog extends CI_Controller {

	public function __construct (){
		parent::__construct();
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{

			$insertCatalog=array();
			$insertCatalog["Cl_price"]=$this->input->post("Cl_price");
			$insertCatalog["Cl_property"]=$this->input->post("Cl_property");
			$insertCatalog["Cl_contact"]=$this->input->post("Cl_contact");
			$insertCatalog["Cl_picture"]=$_FILES["Cl_picture"]["name"];
	
			$file = iconv("UTF-8", "TIS-620", $_FILES["Cl_picture"]["name"]);
			$path = "asset\img\catalog";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["Cl_picture"]["tmp_name"],$path.'/'.$_POST['Re_name'].'_'.$file);
		
			
			if($insertCatalog["Cl_price"]=="" || $insertCatalog["Cl_property"]=="" 
				|| $insertCatalog["Cl_contact"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ');</script>";
				redirect('backend/catalog', 'refresh');

			}else {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
				$this->db->insert('catalog', $insertCatalog);
				redirect('backend/catalog', 'refresh');
			}

		}

		$data['action']=site_url('backend/catalog/index/');
		$this->load->view('backend/catalog',$data);
		$this->load->view('backend/script');	
		
	}

	
}