<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class dealing extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		//แบ่งหน้า
		$config["base_url"]=base_url()."/backend/dealing/dealing";
		$config["total_rows"] = $this->db->count_all("deal");
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
	

		$this->db->select('deal.D_name,deal.D_id,deal.D_date,deal.D_price,deal.D_name_buyer,deal.D_contract');
		$this->db->order_by("D_id", "desc");
 
		$this->db->limit(5,0);

		$rssearch = $this->db->get('deal');

		$data['deal'] = $rssearch->result();

		//print_r ($this->db->last_query());

		//SEARCH
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$data['keyword'] = $this->input->post('keyword');
			//print_r ($_POST);
			
			$this->db->select('deal.D_name,deal.D_id,deal.D_date,deal.D_price,deal.D_name_buyer,deal.D_contract');
			$this->db->like('D_id',$data['keyword']);

			$search1 = $this->db->get('dealing');
			
			$data['search'] = $search1->result();
			//print_r ($this->db->last_query());
			//print_r($data['search']);	

		}

		$data['page']=$this->pagination->create_links();
		$data["action"]=site_url('backend/dealing/index/');
		$data["action3"]=site_url('backend/dealing/adddeal/');		
		$this->load->view('backend/dealing',$data);
		$this->load->view('backend/script');	
		
	}

	public function adddeal(){

			if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			
			$insertdeal=array();
			$insertdeal["D_name"]=$this->input->post("D_name");
			$insertdeal["D_date"]=$this->input->post("D_date");
			$insertdeal["D_price"]=$this->input->post("D_price");
			$insertdeal["D_name_buyer"]=$this->input->post("D_name_buyer");
	
			$file = iconv("UTF-8", "TIS-620", $_FILES["D_contract"]["name"]);
			$file1 = iconv("UTF-8", "TIS-620", $_POST["D_name"]);

			$insertdeal["D_contract"]=$_POST["D_name"].'_'.$_FILES["D_contract"]["name"];

			$path = "File Dealing";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["D_contract"]["tmp_name"],$path.'/'.$file1.'_'.$file);

			
			if($insertdeal["D_name"]=="" || $insertdeal["D_date"]=="" || $insertdeal["D_price"]=="" || $insertdeal["D_name_buyer"]=="" ){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ');</script>";
				redirect('backend/dealing', 'refresh');

			}else {
				echo "<meta http-equv=i'Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";

				$this->db->insert('deal', $insertdeal);
				redirect('backend/dealing', 'refresh');

				print_r ($this->db->last_query());
			}

		}
		
	}


	
}