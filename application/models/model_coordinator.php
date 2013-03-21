<?php
	class Model_coordinator extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		function register_teacher($teacher_info){
			
			//Inserting the teacher details to database
			$this->db->insert('tbl_teacher',$teacher_info);
			
			//Automatically adding the teacher data to the login table 
			$first=$teacher_info['teacher_first_name'];
			$last=$teacher_info['teacher_last_name'];
			$username_password['lgin_name']="$first$last";
			$username_password['lgin_pass']="password";
			$username_password['lgin_cat']=2;
		        $this->db->insert('tbl_login',$username_password);
		}
		function register_student($student_info){		
			$this->db->insert('tbl_student_registration',$student_info);
		}
		
		function register_school($school_info){
		
			$this->db->insert('tbl_school',$school_info);
		}
		
		
		function list_school(){
			$query = $this->db->query('SELECT * FROM tbl_school');
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}
		
		function remove_school($id){
			$this->db->delete('mytable', array('id' => $id));

		}
	}
?>
