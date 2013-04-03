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
		
		$insertdate =$this->input->post("dob");
		$ins = date($insertdate);
		$stu_info['stu_dob']=$ins;//$this->input->post("dob");
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
	
	}
<<<<<<< HEAD
=======
	
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
	
	
>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
	function home(){
	
	
	
	}
	
	function list_parent(){
	
	
	}
	
	function list_student(){
	}
	
	function list_teacher(){
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
	
	function edit_student(){
	}
	function add_teacher(){
		$this->load->view('crdinator/add_teacher.php');
		

	}
	function add_student(){
<<<<<<< HEAD
	
		
		$this->load->view('crdinator/add_stu.php');
	}
=======
			
		$this->load->view('crdinator/add_stu.php');
	}
	
	function add_school(){
		$this->load->view('crdinator/add_school.php');
	}
>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
	function add_parent(){
	}
	function add_remedial(){
	}
	
<<<<<<< HEAD
	function remove_teacher(){
=======

	function remove_teacher($id){
		
		$this->load->model('model_coordinator');
		//$this->model_coordinator->register_school($id);
	

>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
	}
	function remove_student(){
	}
	function remove_parent(){
	}
	function remove_remedial(){
	}
}
<<<<<<< HEAD

=======
?>
>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
