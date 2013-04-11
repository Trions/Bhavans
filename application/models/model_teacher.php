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
	
	function register_mark($mark_info){
		$this->db->insert('tbl_stu_acdmic_perfo',$mark_info);
	}
	
	function register_evaluation($evaluation_info){
		$this->db->insert('tbl_coun_inst_obj_act',$evaluation_info);
	}
	function register_caserecord($report_info){
		$this->db->insert('tbl_caserecord_special',$report_info);
	}
	
	function add_referral_get(){
		$query = $this->db->query('SELECT scl_id,scl_name FROM tbl_school');
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
	}
		
	function add_report_get(){
		$query = $this->db->query('SELECT sl_no,student_name FROM tbl_rem_referral');
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
	}
	
	function add_mark_get(){
		$query = $this->db->query('SELECT stu_id,stu_name,stu_grade FROM tbl_student_registration');
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
	}
function add_evaluation_get(){
		$query = $this->db->query('SELECT stu_id,stu_name,stu_grade FROM tbl_student_registration');
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
	}

}
