<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class News extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
		//$this->load->library('session');

	}

	public function index(){

		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		//แบ่งหน้า
		$config["base_url"]=base_url()."/backend/news/news";
		$config["total_rows"] = $this->db->count_all("news");
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

		$this->db->select('news.Ne_id,news.Ne_sub,news.Ne_text,news.Ne_date_up');
		$this->db->order_by("Ne_id", "desc");
 
		$this->db->limit(5,0);

		$rssearch = $this->db->get('news');

		$data['news'] = $rssearch->result();

		//print_r ($this->db->last_query());

		//SEARCH
		if($_SERVER["REQUEST_METHOD"] == "POST")
		{
			$data['keyword'] = $this->input->post('keyword');
			//print_r ($_POST);
			
			$this->db->select('news.Ne_id,news.Ne_sub,news.Ne_text,news.Ne_date_up');
			$this->db->like('Ne_sub',$data['keyword']);

			$search1 = $this->db->get('news');
			
			$data['search'] = $search1->result();
			//print_r ($this->db->last_query());
			//print_r($data['search']);	

		}

		$data['page']=$this->pagination->create_links();
		$data['action']=site_url("backend/news/addnews/");
		$data['action1']=site_url("backend/news/index/");
		$data['action3']=base_url("backend/news/updatenews/");			
		$this->load->view('backend/news',$data);
		$this->load->view('backend/script');
	}

	public function addnews(){

			if( $_SERVER["REQUEST_METHOD"] == "POST")
		{
			
			$insertNews=array();
			$insertNews["Ne_sub"]=$this->input->post("Ne_sub");
			$insertNews["Ne_text"]=$this->input->post("Ne_text");
			$insertNews["Ne_date_up"]=date("Y-m-d H:i:s");
			$insertNews["Ne_date_cre"]=date("Y-m-d H:i:s");
		
			$file = iconv("UTF-8", "TIS-620", $_FILES["Ne_picture"]["name"]);
			$file1 = iconv("UTF-8", "TIS-620", $_POST["Ne_sub"]);

			$insertNews["Ne_picture"]=$_POST["Ne_sub"].'_'.$_FILES["Ne_picture"]["name"];

			$path = "asset\img\News";
			if(!@mkdir($path,0,true)){}else{ };
			chmod($path, 0777);	
			move_uploaded_file($_FILES["Ne_picture"]["tmp_name"],$path.'/'.$file1.'_'.$file);

			
			if($insertNews["Ne_sub"]=="" || $insertNews["Ne_text"]==""){

				echo "<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('กรุณากรอกรายละเอียดให้ครบคะ');</script>";
				//redirect('backend/news', 'refresh');

			}else {
				echo "<meta http-equv=i'Content-Type' content='text/html; charset=utf-8' />";
				echo "<script>alert('ส่งข้อความเรียบร้อยแล้ว');</script>";
				$this->db->insert('news', $insertNews);
				redirect('backend/news', 'refresh');
			}

		}
		
	}

	public function updatenews($id=0){

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

	public function deletenews($id=0){

			$this->db->where('Ne_id', $id);
			$this->db->delete('news');
			redirect('backend/news', 'refresh');
			exit();


	}

}