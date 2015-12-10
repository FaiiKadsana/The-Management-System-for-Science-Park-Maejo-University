<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class ViewNews extends CI_Controller {

	public function __construct (){
		parent::__construct();
		//$this->load->library('session');

	}
	
	public function index($id=0)

	{
			$data = array() ; 
			$this->load->view('frontend/header');
			$this->load->view('frontend/menu');
			$this->load->view('frontend/slider');
				

			$this->db->where("Ne_id",$id);
			$rs = $this->db->get("news");
			$row=$rs->row();
			$data["Ne_id"]=$row->Ne_id;
			$data["Ne_sub"]=$row->Ne_sub;
			$data["Ne_text"]=$row->Ne_text;	
			$data["Ne_date_up"]=$row->Ne_date_up;	
			$data["Ne_picture"]=$row->Ne_picture;	
			

			$data['action']=site_url("frontend/viewnews/index/");		
			$this->load->view('frontend/viewnews',$data);
			$this->load->view('frontend/script');

		}
		
	}
