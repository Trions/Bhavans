<?php
class Model_teacher extends CI_Model{
	function __construct(){
		parent::__construct();
	}
	function register_subject($subject_info){
	
	
		$this->db->insert('tbl_subject_detail',$subject_info);
	}
}
