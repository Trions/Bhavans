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
			$username_password['lgin_id'] = mysql_insert_id();
		        $this->db->insert('tbl_login',$username_password);
		}
		function register_student($student_info){		
			$this->db->insert('tbl_student_registration',$student_info);
		}
		
		function register_school($school_info){
		
			$this->db->insert('tbl_school',$school_info);
		}
		
		function update_student($stu_info){
			$this->db->where('stu_id', $stu_info['stu_id']);
			$this->db->update('tbl_student_registration', $stu_info); 
		}
		
		function update_school($school_info){
			$this->db->where('scl_id', $school_info['scl_id']);
			$this->db->update('tbl_school', $school_info); 
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
		
		function list_ref_students(){
			$query = $this->db->query('SELECT * FROM tbl_rem_referral');
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}
		
		 function list_student(){
			$query = $this->db->query('SELECT * FROM tbl_student_registration');
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}

		}		
		function list_teacher(){
			$query = $this->db->query('SELECT * FROM tbl_teacher');
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}

		function ref_student_info($name){
			//$query = $this->db->query('SELECT * FROM tbl_rem_referral where student_name="kokk"');
			$query = $this->db->get_where('tbl_rem_referral', array('student_name' => $name));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}

		function list_student_info($name){
			//$query = $this->db->query('SELECT * FROM tbl_rem_referral where student_name="kokk"');
			$query = $this->db->get_where('tbl_student_registration', array('stu_name' => $name));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}

		function list_teacher_info($fname){
			//$query = $this->db->query('SELECT * FROM tbl_rem_referral where student_name="kokk"');
			$query = $this->db->get_where('tbl_teacher', array('teacher_first_name' => $fname));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}
		
		function ref_student_report($name){
		 	$query = $this->db->get_where('tbl_teacher_report', array('new_stu_name' => $name));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}
		
		function delete_school($id){
			$this->db->delete('tbl_school', array('scl_id' => $id));

		}



		function delete_student($name){
			$this->db->delete('tbl_student_registration', array('stu_name' => $name));

		}
		function delete_teacher($name){
			$this->db->delete('tbl_teacher', array('teacher_first_name' => $name));

		}
		
		function add_teacher_get(){
		$query = $this->db->query('SELECT scl_id,scl_name FROM tbl_school');
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}
		
		function edit_student($id){
			$query = $this->db->get_where('tbl_student_registration', array('stu_id' => $id));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}		
		}
		
		function edit_school($id){
			$query = $this->db->get_where('tbl_school', array('scl_id' => $id));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}		
		}
		
		function edit_teacher($id){
			$query = $this->db->get_where('tbl_teacher', array('teacher_id' => $id));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}		
		}


	}
?>
