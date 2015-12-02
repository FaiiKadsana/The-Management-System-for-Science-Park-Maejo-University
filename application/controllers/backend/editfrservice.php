<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Editfrservice extends CI_Controller {

	public function __construct (){
		parent::__construct();
	

	}
	public function index($id=0){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		if( $_SERVER["REQUEST_METHOD"] == "POST"){

				$update = $this->input->post("S_id");

				$insertCompany=array();
				$insertCompany["C_no_com"]=$this->input->post("C_no_com");
				$insertCompany["C_no_com_etc"]=$this->input->post("C_no_com_etc");
				$insertCompany["C_name"]=$this->input->post("C_name");
				$insertCompany["C_address"]=$this->input->post("C_address");
				$insertCompany["C_phone"]=$this->input->post("C_phone");
				$insertCompany["C_fax"]=$this->input->post("C_fax");
				$insertCompany["C_website"]=$this->input->post("C_website");
				$insertCompany["C_investment"]=$this->input->post("C_investment");
				$insertCompany["C_no_year"]=$this->input->post("C_no_year");
				$insertCompany["C_company_type"]=$this->input->post("C_company_type");
				$insertCompany["C_company_type_etc"]=$this->input->post("C_company_type_etc");
				$insertCompany["C_undertaking"]=$this->input->post("C_undertaking");
				$insertCompany["C_undertaking_etc"]=$this->input->post("C_undertaking_etc");
				$insertCompany["C_industry_type"]=$this->input->post("C_industry_type");
				$insertCompany["C_industry_type_etc"]=$this->input->post("C_industry_type_etc");	

				$insertData=array();
				$insertData["P_id_card"]=$this->input->post("P_id_card");
				$insertData["P_title"]=$this->input->post("P_title");
				$insertData["P_name"]=$this->input->post("P_name");
				$insertData["P_lastname"]=$this->input->post("P_lastname");
				$insertData["P_phone"]=$this->input->post("P_phone");
				$insertData["P_mail"]=$this->input->post("P_mail");
				$insertData["P_position"]=$this->input->post("P_position");
						
			   	$insertService=array();
				$insertService["S_id"]=$this->input->post("random");
				$insertService["S_date"]=$this->input->post("S_date");
				$insertService["S_no_emp_total"]=$this->input->post("S_no_emp_total");
				$insertService["S_no_emp_reg"]=$this->input->post("S_no_emp_reg");
				$insertService["S_no_emp_tem"]=$this->input->post("S_no_emp_tem");
				$insertService["S_main_pro1"]=$this->input->post("S_main_pro1");
				$insertService["S_main_pro2"]=$this->input->post("S_main_pro2");
				$insertService["S_main_pro3"]=$this->input->post("S_main_pro3");
				$insertService["S_circulation"]=$this->input->post("S_circulation");
				$insertService["S_profit"]=$this->input->post("S_profit");
				$insertService["S_capital"]=$this->input->post("S_capital");
				$insertService["S_management"]=$this->input->post("S_management");
				$insertService["S_work"]=$this->input->post("S_work");
				$insertService["S_humanresource"]=$this->input->post("S_humanresource");
				$insertService["S_technology"]=$this->input->post("S_technology");
				$insertService["S_deteil_etc"]=$this->input->post("S_deteil_etc");
				$insertService["S_detail"]=$this->input->post("S_detail");
				$insertService["S_comment"]=$this->input->post("S_comment");
				$insertService["S_provider"]=$this->input->post("S_provider");
				$insertService["S_provider1"]=$this->input->post("S_provider1");
				$insertService["S_solution"]=$this->input->post("S_solution");
				$insertService["S_solution_detail"]=$this->input->post("S_solution_detail");
				$insertService["S_solution_name"]=$this->input->post("S_solution_name");
				$insertService["S_agreement"]=$this->input->post("S_agreement");
				$insertService["S_status"]=$this->input->post("S_status");
				$insertService["Spf_id"]='1';

				$file1 = iconv("UTF-8", "TIS-620", $_FILES["F_1"]["name"]);
				$file2 = iconv("UTF-8", "TIS-620", $_FILES["F_2"]["name"]);
				$file3 = iconv("UTF-8", "TIS-620", $_FILES["F_3"]["name"]);
				$file4 = iconv("UTF-8", "TIS-620", $_FILES["F_4"]["name"]);
				
				$path = "File/ServiceFile";
				if(!@mkdir($path,0,true)){}else{ };
				chmod($path, 0777);	
				move_uploaded_file($_FILES["F_1"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file1);
				move_uploaded_file($_FILES["F_2"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file2);
				move_uploaded_file($_FILES["F_3"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file3);
				move_uploaded_file($_FILES["F_4"]["tmp_name"],$path.'/'.$_POST['random'].'_'.$file4);

				$insertFile=array();
				$insertFile["F_1"]=$_POST["random"].'_'.$_FILES["F_1"]["name"];
				$insertFile["F_2"]=$_POST["random"].'_'.$_FILES["F_2"]["name"];
				$insertFile["F_3"]=$_POST["random"].'_'.$_FILES["F_3"]["name"];
				$insertFile["F_4"]=$_POST["random"].'_'.$_FILES["F_4"]["name"];
				$insertFile["Spf_id"]='1';

				$this->db->where('C_id', $update);
				$this->db->update('company',$insertCompany);

				$this->db->where('P_id', $update);
				$this->db->update('contact_person',$insertData);

				$this->db->where('F_id', $update);
				$this->db->update('file',$insertService);

				$this->db->where('S_id', $update);
				$this->db->update('service',$insertFile);

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
				//redirect('backend/news', 'refresh');

				//print_r ($this->db->last_query());
				//print_r ($update);
		
			}
				$this->db->where("S_id",$id);
				$b = $this->db->get('service');
				$rs=$b->row();

				$this->db->where('C_id',$rs->C_id);
				$a = $this->db->get('company');
				$as=$a->row();

				$this->db->where('P_id',$rs->P_id);
				$c = $this->db->get('contact_person');
				$cs=$c->row();

				$this->db->where('F_id',$rs->F_id);
				$d = $this->db->get('file');
				$ds=$d->row();

				$data["S_id"]=$rs->S_id;
				$data["C_no_com"]=$as->C_no_com;
				$data["C_no_com_etc"]=$as->C_no_com_etc;
				$data["C_name"]=$as->C_name;	
				$data["C_address"]=$as->C_address;	
				$data["C_phone"]=$as->C_phone;	

				//print_r ($data["S_id"]);
				//redirect('backend/news', 'refresh');

			$data['action']=base_url("backend/editfrservice/index/");	
			$this->load->view('backend/editfrservice',$data);
			$this->load->view('backend/script');	
			
	}

	
}