<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Viewservice extends CI_Controller {

  public function __construct (){
    parent::__construct();
  

  }
  public function index($S_id){
    $this->load->view('backend/header');
    $this->load->view('backend/menutop');
    $this->load->view('backend/menu');


    $this->db->select('*');
    $this->db->join('contact_person','contact_person.P_id = service.P_id');
    $this->db->join('company','company.C_id = service.C_id');
    $this->db->where("S_id",$S_id);
  
    $service1 = $this->db->get('service');
    
    //print_r ($this->db->last_query());

    $data['service'] = $service1->result();

    $data['action']=site_url('backend/viewservice/index/',$data);  
    $this->load->view('backend/viewservice',$data);
    $this->load->view('backend/script');  
    
  }

  
}