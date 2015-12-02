<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Editcatalog extends CI_Controller {

	public function __construct (){
		parent::__construct();
	

	}
	public function index($id=0){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

			if( $_SERVER["REQUEST_METHOD"] == "POST"){

				$update = $this->input->post("Cl_id");
				$updateData=array(
				"Cl_picture"=>$_POST["Cl_research"].'_'.$_FILES["Cl_picture"]["name"],
				"Cl_price"=>$this->input->post("Cl_price"),
				"Cl_property" => $this->input->post("Cl_property"),
				"Cl_contact" => $this->input->post("Cl_contact"),
				"Cl_code_re" => $this->input->post("Cl_code_re"),
				"Cl_research" => $this->input->post("Cl_research"),
				"Cl_researchers" => $this->input->post("Cl_researchers"),
				"Cl_status" => $this->input->post("Cl_status")
				);

				$file = iconv("UTF-8", "TIS-620", $_FILES["Cl_picture"]["name"]);
				$file1 = iconv("UTF-8", "TIS-620", $_POST["Cl_research"]);
				$path = "asset\img\catalog";
				if(!@mkdir($path,0,true)){}else{ };
				chmod($path, 0777);	
				move_uploaded_file($_FILES["Cl_picture"]["tmp_name"],$path.'/'.$file1.'_'.$file);
	
				$this->db->where('Cl_id', $update);
				$this->db->update('catalog',$updateData);

				//print_r ($this->db->last_query());

				//print_r ($update);

				redirect('backend/editcatalog', 'refresh');
			}
		
		
				$this->db->where("Cl_id",$id);
				$rs = $this->db->get("catalog");
				
				$row=$rs->row();
				$data["Cl_picture"]=$row->Cl_picture;
				$data["Cl_price"]=$row->Cl_price;
				$data["Cl_property"]=$row->Cl_property;	
				$data["Cl_contact"]=$row->Cl_contact;	
				$data["Cl_code_re"]=$row->Cl_code_re;	
				$data["Cl_research"]=$row->Cl_research;	
				$data["Cl_researchers"]=$row->Cl_researchers;	
				$data["Cl_status"]=$row->Cl_status;	

				//print_r ($data["Cl_id"]);

				redirect('backend/editcatalog', 'refresh');

				$data['action']=base_url("backend/editcatalog/index/");	
				$this->load->view('backend/editcatalog',$data);
				$this->load->view('backend/script');	
		
	}

	
}