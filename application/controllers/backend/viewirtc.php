<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Viewirtc extends CI_Controller {

	public function __construct (){
		parent::__construct();


	}
	
	public function index($Co_id){

		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		$this->db->select('*');
		$this->db->join('budget_action','irct.Bg_id = budget_action.Bg_id');
		$this->db->join('budget_invest','irct.Bg_in_id = budget_invest.Bg_in_id');
		$this->db->join('co_company','co_company.Co_com_id = irct.Co_com_id');
		$this->db->join('company','irct.C_id = company.C_id');
		$this->db->join('contact_person','irct.P_id = contact_person.P_id');
		$this->db->join('file','irct.F_id = file.F_id');
		$this->db->join('plan','irct.Pl_id = plan.Pl_id');
		$this->db->join('responsible_person','irct.Rp_id = responsible_person.Rp_id');
		$this->db->where("Co_id",$Co_id);

		$trtc1 = $this->db->get('irct');
		
		//print_r ($this->db->last_query());

		$data['irct'] = $trtc1->result();

		$data['action']=site_url('backend/viewirtc/index/',$data);

		$this->load->view('backend/viewirtc',$data);
		$this->load->view('backend/script');	
		
	}

	
}