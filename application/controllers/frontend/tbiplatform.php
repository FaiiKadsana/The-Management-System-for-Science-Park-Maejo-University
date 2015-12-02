<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Tbiplatform extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');

		$this->db->select('tbi.Tbi_id3,tbi_person.Tbi_title,tbi_person.Tbi_lastname,tbi_person.Tbi_name1,
		tbi.Tbi_date,status_tbi.Tbi_status');
		$this->db->join('tbi_person','tbi.Tbi_id = tbi_person.Tbi_id');
		$this->db->join('status_tbi','tbi.Tbi_id5 = status_tbi.Tbi_id5');
		$this->db->order_by("Tbi_date", "desc");

		$this->db->limit(10,0);

		$tbi = $this->db->get('tbi');
		
		//print_r ($this->db->last_query());

		$data['tbi'] = $tbi->result();

		
		//SEARCH
		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			$data['keyword'] = $this->input->post('keyword');
			$this->db->select('tbi.Tbi_id3,tbi_person.Tbi_title,tbi_person.Tbi_lastname,tbi_person.Tbi_name1,
			tbi.Tbi_date,tbi.Tbi_status');
			$this->db->join('tbi_person','tbi.Tbi_id = tbi_person.Tbi_id');
			$this->db->join('status_tbi','tbi.Tbi_id5 = status_tbi.Tbi_id5');
			$this->db->like('Tbi_id3',$data['keyword']);
	
			$search1 = $this->db->get('tbi');
			//print_r ($this->db->last_query());
			$data['search'] = $search1->result();
			//print_r($data['search']);
		}
	
		
		$data["action"]=base_url("frontend/tbiplatform",$data);
		$this->load->view('frontend/tbiplatform',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');
	
	}

	
}