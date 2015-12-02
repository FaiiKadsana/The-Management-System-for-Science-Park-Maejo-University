<?php defined ('BASEPATH') OR exit ('No direct script access allwed');
header("Content-Type: text/html; charset=utf-8");
class Contact extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');



	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		//$this->db->select('contact.id,company,name,subject,email,detail,date');
		//$this->db->order_by("id", "desc");

		//แบ่งหน้า
		$config["base_url"]=base_url()."/backend/contact/contact";
		$config["total_rows"] = $this->db->count_all("contact");
		$config["per_page"]=5;
		$config['uri_segment'] = 4;
		$config['full_tag_open'] = '<ul class="pagination">'; 
		$config['full_tag_close'] = '</ul>'; 
		$config['num_tag_open'] = '<li>';  
		$config['num_tag_close'] = '</li>'; 
		$config['cur_tag_open'] = '<li class="active"><a><span>'; 
		$config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></span></li>'; 
		$config['prev_tag_open'] = '<li>'; 
		$config['prev_tag_close'] = '</li>'; 
		$config['next_tag_open'] = '<li>'; 
		$config['next_tag_close'] = '</li>'; 
		$config['first_link'] = '&laquo;'; 
		$config['prev_link'] = '<'; 
		$config['last_link'] = '&raquo;'; 
		$config['next_link'] = '>'; 
		$config['first_tag_open'] = '<li>'; 
		$config['first_tag_close'] = '</li>'; 
		$config['last_tag_open'] = '<li>'; 
		$config['last_tag_close'] = '</li>'; 
        //จบแบ่งหน้า
		$this->pagination->initialize($config);
		
		//ดึกข้อมูลสำหรับบ่งหน้า
		$this->db->limit($config['per_page'],$this->uri->segment(4));	

		$this->db->select('*');
		$this->db->order_by("date", "desc");
 
		$this->db->limit(5,0);

		$rssearch = $this->db->get('contact');

		$data['contact'] = $rssearch->result();

		//print_r ($this->db->last_query());

		$data['page']=$this->pagination->create_links();
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