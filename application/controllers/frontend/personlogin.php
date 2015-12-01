<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Personlogin extends CI_Controller {

	public function __construct (){
		parent::__construct();
		$this->load->helper('url');

	}
	public function index(){
		$data = array() ; 
		$data['title'] = " the database science-park" ; 
		$this->load->view('frontend/header',$data);
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');

		if( $_SERVER["REQUEST_METHOD"] == "POST"){
			
				$email = $this->input->post("username");
				$pass = $this->input->post("pass");
				
			if($pass==""){

				echo '<script type="text/javascript">alert("กรุณากรอกข้อมูลให้ถูกต้อง");</script>';
				
				}else{
				
				$this->db->where('u_email', $email);
				$this->db->where('u_password', $pass);
				$rs = $this->db->get('user');
				$row = $rs->row(); 
				@$data['id']=$row->u_id;
				@$data['name']=$row->u_fname;
				@$data['type']=$row->u_type; 
						
					
				
				if(!empty($row))
				{					
						
						
						$ar=array(
													
							"set_id"=>$data['id'],
							"set_name"=>$data['name'],
							"set_type"=>$data['type']
							//"set_count_mail"=>$data['conts']
						);
						$this->session->set_userdata($ar);
						
						$this->db->where('rg_iduser',$data['id']);
						$this->db->where('rg_status',2);
						$this->db->where('re_read',1);
						$this->db->where('re_del',1);
						$this->db->from('register_pro');
						@$data['couns'] = $couns =  $this->db->count_all_results();
						$ar=array("set_count_mail"=>$data['couns']);
						$this->session->set_userdata($ar);
						
						
							//count mail//
								$this->db->where('con_type',1);
								$this->db->where('con_status',1);
								//$this->db->where('con_pro',$this->session->userdata("set_id_pro"));
								$this->db->from('contact');
								$data['cont1'] = $coun1 =  $this->db->count_all_results();
								$ar=array("set_count1"=>$data['cont1']);
								$this->session->set_userdata($ar);
								//end//
						
						
						redirect('backend/index/display', 'refresh');
							
				}
				else
				{
					   echo '<script type="text/javascript">alert("กรุณากรอกข้อมูลให้ถูกต้อง");</script>';
				}
			}	
					
			}
		$this->load->view('frontend/personlogin');
		$this->load->view('frontend/script');	
		$this->load->view('frontend/footer');

	}

	
}