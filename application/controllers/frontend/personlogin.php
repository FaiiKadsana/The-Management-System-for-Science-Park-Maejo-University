 <?php defined ('BASEPATH') OR exit ('No direct script access allwed');

 class Personlogin extends CI_Controller {

 	public function __construct (){
 		parent::__construct();


 	}
 	public function index(){

 		$this->load->view('frontend/header');
 			$this->load->view('frontend/menu');
 			$this->load->view('frontend/slider');
/*
 				$data['username'] = $this->input->post('username');
 				$data['password'] = $this->input->post('password');
			//print_r ($_POST);

 			$this->db->select('officer.O_email,officer.O_password');
 			$this->db->like("O_email",$data['username']);
			$this->db->like("O_password",$data['password']);
		
 		


 			
 $service1 = $this->db->get('officer');
    
    //print_r ($this->db->last_query());

    $data['service'] = $service1->result();

    print_r ($data['service']);*/

	

    		
 			$this->load->view('frontend/personlogin');
 			$this->load->view('frontend/script');	
 			$this->load->view('frontend/footer');

 		}


 	}