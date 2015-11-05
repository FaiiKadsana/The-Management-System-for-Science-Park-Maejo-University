<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class News_Model extends CI_Model {

	public function adddata
			($rec_name_thai="",$rec_ln_thai="",$rec_name_eng="",
			$rec_ln_eng="",$rec_address="",$rec_phone="",$rec_mail=""){

		$insert=array(
			"Rec_picture"=>$rec_img,"Rec_code"=>$idres,
			"Rec_name_thai"=>$nth,"Rec_ln_thai"=>$lnth,
			"Rec_name_eng"=>$lneng,"Rec_ln_eng"=>$idres,
			"Rec_address"=>$address,"Rec_phone"=>$tell,
			"Rec_mail"=>$email,"Rec_position"=>$pos_detail,
			"Rec_unit"=>$work_unit,"Sct_id"=>$detail

			);

		$this->db->insert("researcher",$insert);
	
		return true;
	}
}