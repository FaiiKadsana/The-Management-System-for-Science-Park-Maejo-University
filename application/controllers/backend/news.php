<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class News extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model("backend/news_model");
		$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		$data=array();
		$data['action']=base_url('backend/news/add');
		$this->load->view('backend/news',$data);

		$this->load->view('backend/script');	
		
	}
	public function add (){
		$rec_name_thai=$this->input->post('rec_name_thai');
		$rec_ln_thai=$this->input->post('rec_ln_thai');
		$rec_name_eng=$this->input->post('rec_name_eng');
		$rec_ln_eng=$this->input->post('rec_ln_eng');
		$rec_address=$this->input->post('rec_address');


		$this->news_model->adddata();
		redirect("news");
		
	}

}