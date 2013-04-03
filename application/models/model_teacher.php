<?php
class Model_teacher extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function register_subject($subject_info){
	
	
		$this->db->insert('tbl_subject_detail',$subject_info);
	}
	
	function register_referral($referral_info){
		$this->db->insert('tbl_rem_referral',$referral_info);
	}
	
	function register_report($report_info){
		$this->db->insert('tbl_teacher_report',$report_info);
	}
	
		function register_evaluation($evaluation_info){
		$this->db->insert('tbl_coun_inst_obj_act',$evaluation_info);
	}

}
