<?php defined ('BASEPATH') OR exit ('No direct script access allwed');

class Project_Service_Model extends CI_Model {

	public function adddata

	($rec_name_thai="",$rec_ln_thai="",$rec_name_eng="",$rec_ln_eng="",$rec_address="",
	$rec_phone="",$rec_mail="",$rec_position="" ,$rec_unit="",$rec_img="",
	$rec_office="" ,$sct_detail="",$dct_degree="",$dct_year="" ,$dct_faculty="",
	$dct_major="",$dct_university="",

	$re_start="",$re_end="",$abstract="" ,
	$award="",$rea_type="",$rea_date="", $work_start="",$work_end="",
	$work_office="",$degree="",$dct_year="",$faculty="",$major="",
	$university="" ){

		$insert=array(
			"Rec_picture"=>$rec_img,"Rec_code"=>$idres,"Rec_name_thai"=>$nth,
			"Rec_ln_thai"=>$lnth,"Rec_name_eng"=>$lneng,
			"Rec_ln_eng"=>$idres,"Rec_address"=>$address,
			"Rec_phone"=>$tell,"Rec_mail"=>$email,
			"Rec_position"=>$pos_detail,"Rec_unit"=>$work_unit,
			"Sct_id"=>$detail

			);

		$insert1=array(
			"Dct_year"=>$dct_year,"Dct_degree"=>$lastname,
			"Dct_faculty"=>$faculty,"Dct_major"=>$major,
			"Uy_id"=>$university,"Rec_id"=>$phone,
			);

		$insert2=array(
			"Re_picture"=>$recname,"Re_id_patent"=>$recname_eng,
			"Re_name"=>$ret_detail,"Re_name_eng"=>$recname,
			"Re_start"=>$recname_eng,"Re_end"=>$ret_detail,
			"Re_status"=>$ret_detail,"Re_abstract"=>$recname,
			"Re_finances"=>$recname_eng,"Re_end"=>$ret_detail
			);

		$this->db->insert("researcher",$insert);
		$this->db->insert("research",$insert1);
		$this->db->insert("education",$insert2);
	
		return true;
	}
}