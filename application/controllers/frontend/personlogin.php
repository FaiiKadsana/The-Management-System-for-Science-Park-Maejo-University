 <?php defined ('BASEPATH') OR exit ('No direct script access allwed');

 class Personlogin extends CI_Controller {

 	public function __construct (){
 		parent::__construct();
 		$this->load->helper('url');

 	}
 	public function index(){

 		$this->load->view('frontend/header');
 		$this->load->view('frontend/menu');
 		$this->load->view('frontend/slider');

 		if( $_SERVER["REQUEST_METHOD"] == "POST"){

 			$email = $this->input->post("username");
 			$pass = $this->input->post("password");

 			if($pass==""){

 				echo '<script type="text/javascript">alert("กรุณากรอกข้อมูลให้ถูกต้อง");</script>';

 			}else{

 				$this->db->where('O_email', $email);
 				$this->db->where('O_password', $pass);
 				$rs = $this->db->get('officer');
 				$row = $rs->row(); 
 				@$data['id']=$row->O_id;
 				@$data['name']=$row->O_name;
 				@$data['status']=$row->O_status; 



 				if(!empty($row))
 				{					


 					$ar=array(

 						"set_id"=>$data['id'],
 						"set_name"=>$data['name'],
 						"set_status"=>$data['status']
							//"set_count_mail"=>$data['conts']
 						);
 					$this->session->set_userdata($ar);

 					if($this->session->userdata("set_status") == "1"){
 						redirect('backend/index1/display', 'refresh');
 					} else if ($this->session->userdata("set_status") == "2") {
 						redirect('backend/index2/display', 'refresh');
 					}
 					else if ($this->session->userdata("set_status") == "3") {
 						redirect('backend/index3/display', 'refresh');
 					}
 					else if ($this->session->userdata("set_status") == "4") {
 						redirect('backend/index4/display', 'refresh');
 					}
 					else if ($this->session->userdata("set_status") == "5") {
 						redirect('backend/index/display', 'refresh');
 					}


 					else
 					{
 						echo 'base_url("backend/project_service")?>';
 					}
 				}
 				else
 				{
 					echo '<script type="text/javascript">alert("กรุณากรอกข้อมูลให้ถูกต้อง");</script>';
 				}
 			}
 		}

 		$data["action"]=site_url("frontend/personlogin");
 		$this->load->view('frontend/personlogin',$data);
 		$this->load->view('frontend/script');	
 		$this->load->view('frontend/footer');

 	}


 	public function logout(){

 		$this->session->sess_destroy();
 		redirect('frontend/index');
 	}
 }


