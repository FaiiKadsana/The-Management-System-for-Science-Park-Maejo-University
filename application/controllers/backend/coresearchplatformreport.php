<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Coresearchplatformreport extends CI_Controller {

	public function __construct (){
		parent::__construct();
		

	}
	public function index($Co_id){
		

		$this->db->select('*');
		$this->db->join('budget_action','coresearch_irct.Bg_id = budget_action.Bg_id');
		$this->db->join('budget_invest','coresearch_irct.Bg_in_id = budget_invest.Bg_in_id');
		$this->db->join('co_company','co_company.Co_com_id = coresearch_irct.Co_com_id');
		$this->db->join('company','coresearch_irct.C_id = company.C_id');
		$this->db->join('contact_person','coresearch_irct.P_id = contact_person.P_id');
		$this->db->join('file','coresearch_irct.F_id = file.F_id');
		$this->db->join('plan','coresearch_irct.Pl_id = plan.Pl_id');
		$this->db->join('responsible_person','coresearch_irct.Rp_id = responsible_person.Rp_id');
		$this->db->where("Co_id",$Co_id);
		
		$service1 = $this->db->get('coresearch_irct');
		
		//print_r ($this->db->last_query());

		$data['coresearch_irct'] = $service1->result();


		
		$data['action']=site_url('backend/coresearchplatformreport/index/');	
		$this->load->view('backend/coresearchplatformreport',$data);
		$this->load->view('backend/script');	
		
		
	}

	
}