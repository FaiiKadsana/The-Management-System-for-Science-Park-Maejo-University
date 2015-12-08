<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Catalog1 extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		

		$this->db->select('catalog.Cl_picture,catalog.Cl_property,catalog.Cl_price,catalog.Cl_contact,catalog.Cl_researchers,catalog.Cl_research');
		$this->db->order_by("Cl_id", "desc");
		$catalog = $this->db->get('catalog');
		
		$data['catalog'] = $catalog->result();
		$this->load->view('frontend/catalog1',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');

	}

	
}