<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Catalog1 extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index($id=0){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		
			$this->db->where("Cl_id",$id);
			$rs = $this->db->get("catalog");
			$row=$rs->row();
			$data["Cl_id"]=$row->Cl_id;
			$data["Cl_picture"]=$row->Cl_picture;
			$data["Cl_property"]=$row->Cl_property;	
			$data["Cl_price"]=$row->Cl_price;	
			$data["Cl_contact"]=$row->Cl_contact;	
			$data["Cl_researchers"]=$row->Cl_researchers;	
			$data["Cl_research"]=$row->Cl_research;		

		$data['action']=site_url("frontend/catalog1/index/");	
		$this->load->view('frontend/catalog1',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');

	}

	
}