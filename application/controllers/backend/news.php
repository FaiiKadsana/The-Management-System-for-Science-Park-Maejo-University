<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class News extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->model("backend/news_model");
		$this->load->library('session');

	}
	public function index(){
		
		$this->load->view('backend/header');
		$this->load->view('backend/menutop');
		$this->load->view('backend/menu');

		if($this->input->server('REQUEST_METHOD')=== 'POST'){
			
			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);
			for($i=0; $i<$cpt; $i++)
			{           
				$_FILES['userfile']['name']= $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];    

				$this->upload->initialize($this->set_upload_options());
				$this->upload->do_upload();
				$this->upphoto_model->addfile($_FILES['userfile']['name']);
			}
			redirect ('upphoto');
		}

		$data=array();
		$data['action']=base_url('backend/news/add');
		$this->load->view('backend/news',$data);

		$this->load->view('backend/script');	
		
	}
	public function add (){
		$rec_name_thai=$this->input->post('rec_name_thai');
		$rec_ln_thai=$this->input->post('rec_ln_thai');
		$rec_name_eng=$this->input->post('rec_name_eng');
		$rec_ln_eng=$this->input->post('rec_ln_eng');
		$rec_address=$this->input->post('rec_address');


		$this->news_model->adddata();
		redirect("news");
		
	}
	private function set_upload_options()
	{   
    //upload an image options
		$config = array();
		$config['upload_path'] = './upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = '100';
		$config['overwrite']     = FALSE;

		return $config;
	}

}