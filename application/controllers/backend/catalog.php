<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Catalog extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
	

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

			//แบ่งหน้า
		$config["base_url"]=base_url()."/backend/catalog/catalog";
		$config["total_rows"] = $this->db->count_all("catalog");
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

		$this->db->select('catalog.Cl_price,catalog.Cl_code_re,catalog.Cl_research,catalog.Cl_researchers,catalog.Cl_status,catalog.Cl_id');
		$this->db->order_by("Cl_id", "desc");
 
		$this->db->limit(5,0);

		$rssearch = $this->db->get('catalog');

		$data['catalog'] = $rssearch->result();

		//print_r ($this->db->last_query());

		//SEARCH
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$data['keyword'] = $this->input->post('keyword');
			//print_r ($_POST);
			
			$this->db->select('catalog.Cl_code_re,catalog.Cl_research,catalog.Cl_researchers,catalog.Cl_status,catalog.Cl_id');
			$this->db->like('Cl_research',$data['keyword']);

			$search1 = $this->db->get('catalog');
			
			$data['search'] = $search1->result();
			//print_r ($this->db->last_query());
			//print_r($data['search']);	

		}
		
		$data['action']=site_url('backend/catalog/index/');
		$data["action1"]=site_url('backend/catalog/addcatalog/');
		$data['action3']=base_url("backend/news/updatenews/");	
		$this->load->view('backend/catalog',$data);
		$this->load->view('backend/script');	
		
	}

	public function addcatalog(){

		if( $_SERVER["REQUEST_METHOD"] == "POST")
		{

			$insertCatalog=array();
			$insertCatalog["Cl_price"]=$this->input->post("Cl_price");
			$insertCatalog["Cl_property"]=$this->input->post("Cl_property");
			$insertCatalog["Cl_contact"]=$this->input->post("Cl_contact");
			$insertCatalog["Cl_code_re"]=$this->input->post("Cl_code_re");
			$insertCatalog["Cl_research"]=$this->input->post("Cl_research");
			$insertCatalog["Cl_researchers"]=$this->input->post("Cl_researchers");
			$insertCatalog["Cl_status"]=$this->input->post("Cl_status");
			
	
			$file = iconv("UTF-8", "TIS-620", $_FILES["Cl_picture"]["name"]);
			$file1 = iconv("UTF-8", "TIS-620", $_POST["Cl_research"]);

			$insertCatalog["Cl_picture"]=$_POST["Cl_research"].'_'.$_FILES["Cl_picture"]["name"];


			$path = "asset\img\catalog";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["Cl_picture"]["tmp_name"],$path.'/'.$file1.'_'.$file);
		
			
			if($insertCatalog["Cl_price"]=="" || $insertCatalog["Cl_property"]=="" 
				|| $insertCatalog["Cl_contact"]=="" || $insertCatalog["Cl_research"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ');</script>";
				redirect('backend/catalog', 'refresh');

			}else {
				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
				$this->db->insert('catalog', $insertCatalog);
				redirect('backend/catalog', 'refresh');
			}

		}

	}

	public function updatecatalog($id=0){

			if( $_SERVER["REQUEST_METHOD"] == "POST"){

				$update = $this->input->post("Ne_id");
				$updateData=array(
				"Ne_sub"=>$this->input->post("Ne_sub"),
				"Ne_text"=>$this->input->post("Ne_text"),
				"Ne_picture" => $this->input->post("Ne_picture"),
				"Ne_date_up" => date("Y-m-d H:i:s")
				);
	
				$this->db->where('Ne_id', $update);
				$this->db->update('news',$updateData);

				//print_r ($this->db->last_query());

				print_r ($update);

				redirect('backend/news', 'refresh');
			}
		
		
				$this->db->where("Ne_id",$id);
				$rs = $this->db->get("news");
				$row=$rs->row();
				$data["Ne_id"]=$row->Ne_id;
				$data["Ne_sub"]=$row->Ne_sub;
				$data["Ne_text"]=$row->Ne_text;	
				$data["Ne_date_up"]=$row->Ne_date_up;	
				$data["Ne_picture"]=$row->Ne_picture;	


				print_r ($data["Ne_id"]);

				redirect('backend/news', 'refresh');
			

	}

	
}