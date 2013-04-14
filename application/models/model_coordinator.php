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
			//$last=$teacher_info['teacher_last_name'];
			$username_password['lgin_name']="$first";
			$username_password['lgin_pass']="password";
			$username_password['lgin_cat']=2;
			$username_password['lgin_id'] = mysql_insert_id();
		        $this->db->insert('tbl_login',$username_password);
	
			echo "<script>alert('Inserted Sucessfully...');
			
			</script>";
			$this->load->view('crdinator/add_teacher');
		}
		function register_student($student_info){		
			$this->db->insert('tbl_student_registration',$student_info);
			echo "<script>alert('Inserted Sucessfully...');
			
			</script>";
			$this->load->view('crdinator/add_stu');
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
		
		function update_teacher($teacher_info){
			$this->db->where('teacher_id', $teacher_info['teacher_id']);
			$this->db->update('tbl_teacher', $teacher_info); 
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
		 function list_caserecord(){
			$query = $this->db->query('SELECT * FROM tbl_caserecord_special');
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
		function list_subject(){
			$query=$this->db->query('select * from tbl_subject_detail');
			if($query->num_rows>0){
			foreach ($query->result() as $row){
				$data[]= $row;
			}

	 		return $data;
		}

	

	}

		function ref_student_info($id){
			//$query = $this->db->query('SELECT * FROM tbl_rem_referral where student_name="kokk"');
			//$query = $this->db->get_where('tbl_rem_referral', array('sl_no' => $id));
			$this->db->select('*');
			$this->db->from('tbl_rem_referral');
			$this->db->where('tbl_rem_referral.sl_no', $id); 
			$this->db->join('tbl_school', 'tbl_school.scl_id = tbl_rem_referral.school');
			$this->db->join('tbl_teacher', 'tbl_teacher.teacher_id = tbl_rem_referral.teacher_id');
			$query = $this->db->get();
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}

		function list_student_info($id){
			//$query = $this->db->query('SELECT * FROM tbl_rem_referral where student_name="kokk"');
			//$query = $this->db->get_where('tbl_student_registration', array('stu_id' => $id));
			$this->db->select('*');
			$this->db->from('tbl_student_registration');
			$this->db->where('stu_id', $id); 
			$this->db->join('tbl_school', 'tbl_school.scl_id = tbl_student_registration.stu_school');
			$query = $this->db->get();
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}
		
		function list_caserecord_info($id){
			//$query = $this->db->query('SELECT * FROM tbl_rem_referral where student_name="kokk"');
			$query = $this->db->get_where('tbl_caserecord_special', array('stu_id' => $id));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}

		function list_teacher_info($id){
			//$query = $this->db->query('SELECT * FROM tbl_rem_referral where student_name="kokk"');
			$query = $this->db->get_where('tbl_teacher', array('teacher_id' => $id));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}
		
		function ref_student_report($id){
		 	//$query = $this->db->get_where('tbl_teacher_report', array('sl_no' => $id));
		 	$this->db->select('*');
			$this->db->from('tbl_teacher_report');
			$this->db->where('tbl_teacher_report.sl_no', $id); 
			$this->db->join('tbl_rem_referral', 'tbl_rem_referral.sl_no = tbl_teacher_report.sl_no');
			$this->db->join('tbl_teacher', 'tbl_teacher.teacher_id = tbl_teacher_report.teach_id');
			$query = $this->db->get();
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



		function delete_student($id){
			$this->db->delete('tbl_student_registration', array('stu_id' => $id));

		}
		function delete_teacher($id){
			$this->db->delete('tbl_teacher', array('teacher_id' => $id));

		}
		
		function delete_ref_student($id){
			$this->db->delete('tbl_rem_referral', array('sl_no' => $id));
			$this->db->delete('tbl_teacher_report', array('sl_no' => $id));

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
		function list_evaluation_info($id){
			//$query = $this->db->query('SELECT * FROM tbl_rem_referral where student_name="kokk"');
			$query = $this->db->get_where('tbl_coun_inst_obj_act', array('stu_id' => $id));
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		}
		
		function view_marks_chart($id){
			$this->db->select('*');
			$this->db->from('tbl_stu_acdmic_perfo');
			$this->db->where('stu_id', $id);
			$q = $this->db->get();
		
			if($q->num_rows() > 0){
				foreach($q->result() as $row){
					$data[] = (object)array('eng' =>$row->eng ,
								'hin' =>$row->hin ,
								'mal_san' =>$row->mal_san,
								'math' => $row->math,
								'science' => $row->science,
								'social_science' => $row->social_science,
								'gk' => $row->gk,
								 'fa' => $row->fa);
				}
				return $data;
			}
		
		}


	}
?>
