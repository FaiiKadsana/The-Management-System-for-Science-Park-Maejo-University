<?php
	class Home extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
		}
		public function index()
		{
			$data = array() ; 
			$data['title'] = "Gettingcamp" ; 
			$this->load->view('index/header',$data);
			$this->load->view('index/headermenu');
			$this->load->view('index/slide');
			
			
			//news1
			$this->db->where("ne_type",1);
			$this->db->order_by("ne_date_cre", "desc"); 
			$this->db->limit(1);
			$rs = $this->db->get("news");
			$row=$rs->row();
			$data["id"]=$row->ne_id;
			$data["news"]=$row->ne_sub;
			$data["newsdetail"]=$row->ne_text;
			$data["date"]=$row->ne_date_cre;
			//newsPic1
			$this->db->select('*');
			$this->db->from('news');
			$this->db->join('upload', 'upload.up_id_data = news.ne_id');
			$this->db->where("ne_id",$data["id"]);
			$query = $this->db->get();
			$row=$query->row();
			$data["name_pic"]=$row->up_name;
			
				//news1
			$this->db->select('*');
			$this->db->from('news');
			$this->db->join('upload','upload.up_id_data = news.ne_id');
			$this->db->where('news.ne_type = 1 ');
			$this->db->order_by("ne_date_cre", "desc"); 
			$this->db->limit(4,1);
			$pr = $this->db->get();
			$data['pr'] = $pr->result_array();
				//
			
		
			
			//news2
			$this->db->where("ne_type",2);
			$this->db->order_by("ne_date_cre", "desc"); 
			$this->db->limit(1);
			$sr = $this->db->get("news");
			$row=$sr->row();
			$data["id_2"]=$row->ne_id;
			$data["news_2"]=$row->ne_sub;
			$data["newsdetail_2"]=$row->ne_text;
			$data["date_2"]=$row->ne_date_cre;
			//newsPic2
			$this->db->select('*');
			$this->db->from('news');
			$this->db->join('upload', 'upload.up_id_data = news.ne_id');
			$this->db->where("ne_id",$data["id_2"]);
			$query = $this->db->get();
			$row=$query->row();
			$data["name_pic_2"]=$row->up_name;
				//
			$this->db->select('*');
			$this->db->from('news');
			$this->db->join('upload', 'upload.up_id_data = news.ne_id');
			$this->db->where("news.ne_type",2);
			$this->db->order_by("news.ne_date_cre", "desc"); 
			$this->db->limit(4,1);
			$pse = $this->db->get();		
			$data['pse'] = $pse->result_array();
			
			
			//*************************โครงการ
			//SELECT * FROM `upload` join project WHERE upload.up_id = project.p_id and project.p_status = 3
			$this->db->select('*');
			$this->db->from('project');
			$this->db->join('upload','upload.up_id_data = project.p_id');
			$this->db->where('project.p_status = 1 ');
			$this->db->order_by("p_date", "desc"); 
			$this->db->limit(3);
			$rspro = $this->db->get();
			$data['rspro'] = $rspro->result_array();
			
			
			$this->load->view('index/index',$data);	
			$this->load->view('index/footer');	
			
			

		}	
	}

?>