<?php defined ('BASEPATH') OR exit ('No direct script access allwed');
header("Content-Type: text/html; charset=utf-8");
class Contact extends CI_Controller {

	public function __construct (){
		parent::__construct();



	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		$this->db->select('contact.id,company,name,subject,email,detail,date');
		$this->db->order_by("id", "desc");

		$data['action']=site_url("backend/contact/index/");
		$this->load->view('backend/contact',$data);
		$this->load->view('backend/script');	

	}

	public function deletecontact($id=0){

			$this->db->where('id', $id);
			$this->db->delete('contact');
			redirect('backend/contact', 'refresh');
			exit();


	}
}