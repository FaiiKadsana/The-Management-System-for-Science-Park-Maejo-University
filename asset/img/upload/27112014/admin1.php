<?php // require 'admin_contrller.php';
	class news extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			
		}
		public function index()
		{
			$data = array() ; 
			$data["title"] = "โครงการต่างๆ" ; 
			$this->load->view('admin/header',$data);
			$this->load->view('admin/am_project');	
			$this->load->view('admin/footer');		
					
		}
		public function am_news()
		{	
			$data = array() ; 
			$data["title"] = "เพิ่มข่าวสาร" ; 
			$this->load->view('admin/header',$data);
			$this->load->view('admin/am_news');	
			$this->load->view('admin/footer');	
			
		}
		
	
		
	}

?>