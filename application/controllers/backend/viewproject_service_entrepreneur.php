<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Viewproject_service_entrepreneur extends CI_Controller {

	public function __construct (){
		parent::__construct();
	

	}
	public function index($P_id){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		$this->db->select('contact_person.P_title,
				contact_person.P_name,
				contact_person.P_id_card,
				contact_person.P_lastname,
				contact_person.P_position,
				contact_person.P_phone,
				contact_person.P_mail,
				company.C_name,
				company.C_address,
				company.C_phone,
				company.C_fax,
				company.C_website,
				company.C_no_com_etc,
				company.C_investment,
				company.C_no_year,
				company.C_company_type,
				company.C_undertaking,
				company.C_industry_type');
    	$this->db->join('contact_person','contact_person.C_id = company.C_id');
    	$this->db->where("P_id",$P_id);
  
    $service1 = $this->db->get('contact_person');
    
    //print_r ($this->db->last_query());

    $data['service'] = $service1->result();
     
    $data['action']=site_url('backend/viewproject_service_entrepreneur/index/',$data);  

		$this->load->view('backend/viewproject_service_entrepreneur',$data);
		$this->load->view('backend/script');	
		
	}

	
}