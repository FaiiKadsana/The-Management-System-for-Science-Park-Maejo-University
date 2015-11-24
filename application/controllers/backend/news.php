<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class News extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->library('pagination');
		$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		//แบ่งหน้า
		$config["base_url"]=base_url()."/frontend/catalog/catalog";
		$config["total_rows"] = $this->db->count_all("catalog");
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

		//*************************Project_แถบล่าง__type1
			//ดึงข้อมูลจากฐาน
			$this->db->order_by("ne_date_up", "desc"); 
			$rs = $this->db->get('news');
			
			$data['rs'] = $rs->result_array();
			$data['page']=$this->pagination->create_links();
			
			$this->load->view('backend/news',$data);
			$this->load->view('backend/script');	

	}
	public function add_news()
		{	
			$this->load->view('backend/header');
			$this->load->view('backend/menutop');
			$this->load->view('backend/menu');
				
		
			if( $_SERVER["REQUEST_METHOD"] == "POST")
			{
					$insertData=array(
					"ne_sub"=>$this->input->post("news"),
					"ne_text"=>$this->input->post("newsdetail"),
					"ne_type"=>$this->input->post("type_news"),
					"ne_date_up"=>date("Y-m-d H:i:s"),
					"ne_date_cre"=>date("Y-m-d H:i:s")
					);

					$this->db->insert('news', $insertData);
										
				//-------UPLOAD IMG------//
					$last_id = mysql_insert_id(); 
					$folderName = date('dmY');
					$path = 'asset/img/upload/' . $folderName;
					if ( ! file_exists($path) )
					{	
					$create = mkdir($path, 0777 , TRUE);
					if ( ! $create )
					return;
					}
					$this->load->library('upload');
					$this->upload->initialize(array(
					"upload_path"=>$path,
					"allowed_types"=>"*"
					));
					if($this->upload->do_multi_upload("userfile")){
					$upload_data =  $this->upload->get_multi_upload_data();	
					}		
					foreach($upload_data as $value){  
					$updateData["up_name"] = "asset/img/upload/".$folderName."/".$value['file_name'];
					$updateData["up_id_data"]=$last_id;
					$updateData["up_id_type"]=1;					
					$updateData["up_type_file"]= 1;
					$updateData["up_date_cre"]= date("Y-m-d H:i:s");
					$this->db->insert('upload', $updateData);	
					}
				//--------------------//

					print_r ($this->db->last_query());
				
					redirect('backend/catalog', 'refresh');
			}
			$data["action"]=base_url("catalog/add_news");
			$this->load->view('backend/catalog',$data);
			$this->load->view('backend/script');	
		}

}