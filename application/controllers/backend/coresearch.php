<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Coresearch extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		//แบ่งหน้า
		$config["base_url"]=base_url()."/backend/coresearch/coresearch/";
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

		//ดึกข้อมูลสำหรับบ่งหน้า
		$this->db->limit($config['per_page'],$this->uri->segment(4));	


		//*************************

		$this->db->select('company.C_name,coresearch_irct.Co_id,coresearch_irct.Co_name_pro,coresearch_irct.Co_date,coresearch_irct.Co_status');
		$this->db->join('company','coresearch_irct.C_id = company.C_id');
		$this->db->order_by("Co_date", "desc");
 
		//$this->db->limit(10,0);

		$coresearch1 = $this->db->get('coresearch_irct');
		
		//print_r ($this->db->last_query());

		$data['coresearch'] = $coresearch1->result();

		
		//SEARCH
		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			//$data['keyword'] = $this->input->post('keyword');
			$data['keyword1'] = $this->input->post('keyword1');
			//print_r ($_POST);
			
			$this->db->select('company.C_name,coresearch_irct.Co_id,coresearch_irct.Co_name_pro,coresearch_irct.Co_date,coresearch_irct.Co_status');
			$this->db->join('company','coresearch_irct.C_id = company.C_id');
			//$this->db->like('S_date',$data['keyword']);
			$this->db->or_like('Co_status',$data['keyword1']);

			$search1 = $this->db->get('coresearch_irct');
			
			$data['search'] = $search1->result();
			//print_r ($this->db->last_query());
			//print_r($data['search']);

		}

		$config["total_rows"] = $this->db->count_all("coresearch_irct"); 
        //จบแบ่งหน้า
		$this->pagination->initialize($config);
			
		$data['page']=$this->pagination->create_links();

		$data["action"]=base_url('backend/coresearch/index/');
		//$data["action"]=base_url("backend/coresearch",$data);
		$this->load->view('backend/coresearch',$data);
		$this->load->view('backend/script');	
		
	}

	
}