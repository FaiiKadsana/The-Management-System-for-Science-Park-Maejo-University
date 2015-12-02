<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Project_Service extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->library('session');


	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

			//แบ่งหน้า
		$config["base_url"]=base_url()."/backend/project_service/project_service";
		$config["total_rows"] = $this->db->count_all("service");
		$config["per_page"]=8;
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

		$this->db->select('service.S_id,company.C_name,research.Re_name1,service.S_status,research.Re_start');
		$this->db->join('company','service.C_id = company.C_id');
		$this->db->join('research','service.C_id = company.C_id ');
		$this->db->where("S_status",'อนุมัติ');
		$this->db->order_by("S_date", "desc");
 
		//$this->db->limit(10,0);

		$service = $this->db->get('service');
		
		//print_r ($this->db->last_query());

		$data['service'] = $service->result();

		
		//SEARCH
		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			//$data['keyword'] = $this->input->post('keyword');
			$data['keyword1'] = $this->input->post('keyword1');
			//print_r ($_POST);
			
			$this->db->select('service.S_id,company.C_name,research.Re_name1,service.S_status,research.Re_start');
			$this->db->join('company','service.C_id = company.C_id');
			$this->db->join('research','service.C_id = company.C_id ');
			//$this->db->like('S_date',$data['keyword']);
			$this->db->like('S_status',$data['keyword1']);

			$search1 = $this->db->get('service');
			
			//print_r($data['search']);
			$data['search'] = $search1->result();
			//print_r ($this->db->last_query());
			
		}	
				
			$data['page']=$this->pagination->create_links();
			$data['action']=site_url('backend/project_service/index/');
			$data['action1']=site_url('backend/project_service/add/');
			$this->load->view('backend/project_service',$data,$data);
			$this->load->view('backend/script');	

}
	public function add(){

			$insertResearchers=array();
			$insertResearchers["Rec_picture1"]=$_POST["Rec_name_thai"].'_'.$_FILES["Rec_picture1"]["name"];
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
			$insertResearchers["Rec_sct_detail"]=$this->input->post("Rec_sct_detail");
			$insertResearchers["Spf_id"]='1';
			
			$file = iconv("UTF-8", "TIS-620", $_FILES["Rec_picture1"]["name"]);
			$file1 = iconv("UTF-8", "TIS-620", $_POST["Rec_name_thai"]);

			$path = "asset\img\Researchers";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["Rec_picture1"]["tmp_name"],$path.'/'.$file1.'_'.$file);

			$insertResearch=array();
			$insertResearch["Re_picture1"]=$_POST["Re_name1"].'_'.$_FILES["Re_picture1"]["name"];
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
			$insertResearch["Sp_id"]='1';
			
			$file = iconv("UTF-8", "TIS-620", $_FILES["Re_picture1"]["name"]);
			$file1 = iconv("UTF-8", "TIS-620", $_POST["Re_name1"]);

			$path = "asset\img\Research";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["Re_picture1"]["tmp_name"],$path.'/'.$file1.'_'.$file);

			if($insertResearchers["Rec_name_eng"]==""|| $insertResearchers["Rec_ln_eng"]==""
				|| $insertResearchers["Rec_address"]==""|| $insertResearchers["Rec_phone"]==""
				|| $insertResearchers["Rec_mail"]==""|| $insertResearchers["Rec_position"]==""
				|| $insertResearchers["Rec_unit"]==""|| $insertResearchers["Rec_office"]==""){

			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วยคะ');</script>";
			redirect('backend/project_service', 'refresh');

		}
			else if($insertResearch["Re_id_patent"]=="" || $insertResearch["Re_name1"]==""
				|| $insertResearch["Re_name_eng"]=="" || $insertResearch["Re_industry_group"]==""
				|| $insertResearch["Re_status"]==""|| $insertResearch["Re_abstract"]=="" ){

			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('กรุณากรอกรายละเอียดให้ครบด้วยนะคะ');</script>";
			redirect('backend/project_service', 'refresh');

		}
			else {

			echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
			echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";

			$this->db->insert('researchers', $insertResearchers);

			$Rec_id = $this->db->insert_id();
            $insertResearch["Rec_id"] = $Rec_id;
			$this->db->insert('research', $insertResearch);

			redirect('backend/project_service', 'refresh');
		}
	}	

}