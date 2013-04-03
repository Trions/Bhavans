<?php
class Coordinator extends CI_Controller{
	function __construct(){
		
		parent::__construct();
		
		
		//$this->load->views('login_view.php');
	}
	function index(){
		$this->load->view('crdinator/Home.php');
	}
	function register_student(){
		$stu_info['stu_rollno']=$this->input->post("rollno");
		$stu_info['stu_name']=$this->input->post("name");
		$stu_info['stu_grade']=$this->input->post("grade");
		
		//$insertdate =$this->input->post("dob");
		$dat=$_POST['l1'];
		$mnth=$_POST['l2'];
		$yr=$_POST['l3'];
		$dt=$yr."/".$mnth."/".$dat;		


		//$ins = date($insertdate);
		$stu_info['stu_dob']=$dt;//$this->input->post("dob");
		$stu_info['stu_gender']=$this->input->post("gender");
		$stu_info['stu_father_name']=$this->input->post("fname");
		$stu_info['stu_mother_name']=$this->input->post("mname");
		$stu_info['stu_address']=$this->input->post("addtext");
		$stu_info['stu_ph_res']=$this->input->post("landphone");
		$stu_info['stu_ph_off']=$this->input->post("officephone");
		$stu_info['stu_ph_mob']=$this->input->post("mobile");
		$this->load->model('model_coordinator');
		$this->model_coordinator->register_student($stu_info);
		//$this->load->view('crdinator/reg_sucessfull',$stu_info);
	
	}
	
		
	function register_teacher(){
	
	
		$teacher_info['teacher_first_name']=$this->input->post("fname");
		$teacher_info['teacher_last_name']=$this->input->post("lname");
		$teacher_info['teacher_gender']=$this->input->post("gender");
		$insertdate =$this->input->post("day");
		$teacher_info['teacher_dob']=date($insertdate);
		$teacher_info['teacher_address']=$this->input->post("address");
		$teacher_info['teacher_nationality']=$this->input->post("nationality");
		$teacher_info['teacher_photo']=$this->input->post("photo");
		$teacher_info['teacher_phone']=$this->input->post("phone");
		$teacher_info['teacher_email']=$this->input->post("email");
		
		$this->load->model('model_coordinator');
		$this->model_coordinator->register_teacher($teacher_info);
		echo "<script>alert('Updated...')";
	}
	
	function register_school(){
		
		$school_info['scl_id']=$this->input->post("school_id");
		$school_info['scl_name']=$this->input->post("school_name");
		$school_info['scl_ph']=$this->input->post("phone");
		$school_info['scl_add']=$this->input->post("add");
		
		$this->load->model('model_coordinator');
		$this->model_coordinator->register_school($school_info);
		
	}
	
	
	
	
	function list_school(){
			$this->load->model('model_coordinator');
			$data['query']= $this->model_coordinator->list_school();
			$this->load->view('crdinator/list_school',$data);
		}
		
	function list_ref_students(){
			$this->load->model('model_coordinator');
			$data['query']= $this->model_coordinator->list_ref_students();
			$this->load->view('crdinator/list_ref_students',$data);
		}
	function list_student(){
			$this->load->model('model_coordinator');
			$data['query']= $this->model_coordinator->list_student();
			$this->load->view('crdinator/list_student',$data);
		}
	function list_teacher(){
			$this->load->model('model_coordinator');
			$data['query']= $this->model_coordinator->list_teacher();
			$this->load->view('crdinator/list_teacher',$data);
		}
	
	
	function home(){
	
	
	
	}
	
	function list_subject(){
	
		$this->load->model('model_coordinator');
			$data['query']= $this->model_coordinator->list_subject();
			$this->load->view('crdinator/list_subject',$data);
	}
	
	
	
	function list_remedial(){
	}
	
	function display_teacher(){
	}
	
	function display_student(){
	}
	
	function display_remedial(){
	}
	
	function display_parent(){
	}
	
	function edit_teacher(){
	}
	
	function edit_parent(){
	}
	
	function edit_remedial(){
	}
	
	
	function add_teacher(){
		$this->load->view('crdinator/add_teacher.php');
		

	}
	function add_student(){
			
		$this->load->view('crdinator/add_stu.php');
	}
	
	function add_school(){
		$this->load->view('crdinator/add_school.php');
	}
	function add_parent(){$this->db->where('id', $id);
		$this->db->update('mytable', $data); 
	}
	function add_remedial(){
	}
	
	
	
	function remove_school($id){
		$this->load->model('model_coordinator');
		$this->model_coordinator->delete_school($id);
	
	}
	function remove_student($name){
		$this->load->model('model_coordinator');
		$this->model_coordinator->delete_student($name);
	}
	function remove_teacher($name){
		$this->load->model('model_coordinator');
		$this->model_coordinator->delete_teacher($name);
	}
	function remove_parent(){
	}
	function remove_remedial(){
	
	}
	
	function ref_student_details($name){
		$this->load->model('model_coordinator');
		$data['query']=$this->model_coordinator->ref_student_info($name);
		$this->load->view('crdinator/ref_student_info',$data);
	}
	function list_student_info($name){
		$this->load->model('model_coordinator');
		$data['query']=$this->model_coordinator->list_student_info($name);
		$this->load->view('crdinator/list_student_info',$data);
	}

	function list_teacher_info($fname){
		$this->load->model('model_coordinator');
		$data['query']=$this->model_coordinator->list_teacher_info($fname);
		$this->load->view('crdinator/list_teacher_info',$data);
	}

}

