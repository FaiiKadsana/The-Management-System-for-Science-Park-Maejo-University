<?php 
	class Upload_model extends CI_Model{
	

	function do_upload()
	{
		$config['upload_path'] = './asset/img/upload/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '2048';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';

		$this->load->library('upload', $config);
		$this->upload->do_upload();
		

		
	}

	
}

?>