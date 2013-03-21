<?php
	class Teacher extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
		$this->load->view('teacher/Home.php');
	}
		
		function add_subject(){
			$this->load->view('teacher/add_subject');
		}
		function add_student(){
			$this->load->view('teacher/add_student');
		}
		
		function register_subject(){
		
		$teacher_info['subject_name']=$this->input->post("subjectname");
		$teacher_info['subject_totalmark']=$this->input->post("totalmark");
				
		$this->load->model('model_teacher');
		$this->model_teacher->register_subject($teacher_info);
		}
	} 
