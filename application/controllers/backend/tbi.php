<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Tbi extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		//แบ่งหน้า
		$config["base_url"]=base_url()."/backend/tbi/tbi";
		$config["total_rows"] = $this->db->count_all("tbi");
		$config["per_page"]=8;
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

		//*************************

		$this->db->select('tbi_person.Tbi_name1,tbi_person.Tbi_title,tbi_person.Tbi_lastname,tbi.Tbi_id3,tbi.Tbi_date,tbi.Tbi_status');
		$this->db->join('tbi_person','tbi.Tbi_id = tbi_person.Tbi_id');
		$this->db->order_by("Tbi_date", "desc");
 
		//$this->db->limit(10,0);

		$service = $this->db->get('tbi');
		
		//print_r ($this->db->last_query());

		$data['tbi1'] = $service->result();

	
		
		//SEARCH
		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			//$data['keyword'] = $this->input->post('keyword');
			$data['keyword1'] = $this->input->post('keyword1');
			//print_r ($_POST);
			$this->db->select('tbi_person.Tbi_name1,tbi_person.Tbi_title,tbi_person.Tbi_lastname,tbi.Tbi_id3,tbi.Tbi_date,tbi.Tbi_status');
			$this->db->join('tbi_person','tbi.Tbi_id = tbi_person.Tbi_id');
			//$this->db->like('Tbi_status',$data['keyword1']);
			$this->db->or_like('Tbi_status',$data['keyword1']);

			$search1 = $this->db->get('tbi');
			
			$data['search'] = $search1->result();

			echo '2';

			//print_r ($this->db->last_query());
			//print_r($data['search']);
			
		}
		
		$data['page']=$this->pagination->create_links();
		$data["action"]=base_url('backend/tbi/index');
		$this->load->view('backend/tbi',$data);
		$this->load->view('backend/script');	
		
	}

	
}