<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class News extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->model("index_model","index_model");
		//$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		

		$this->db->select('news.Ne_id,news.Ne_sub,news.Ne_date_up,news.Ne_picture,news.Ne_text');
		$this->db->order_by("Ne_id", "desc");
		$news1 = $this->db->get('news');
		$data['news'] = $news1->result();

		$this->load->view('frontend/news',$data);
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');

	}

	
}