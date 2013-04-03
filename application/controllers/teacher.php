<?php
	class Teacher extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
<<<<<<< HEAD
		function index(){
			$this->load->view('teacher/Home.php');
		}
		function add_subject(){
		
=======
		
		function index(){
		$this->load->view('teacher/Home.php');
	}
		
		function add_subject(){
>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
			$this->load->view('teacher/add_subject');
		}
		function add_student(){
			$this->load->view('teacher/add_student');
		}
		
		function register_subject(){
<<<<<<< HEAD
			$subject_info['subject_name']=$this->input->post("subjectname");
			$subject_info['subject_totalmark']=$this->input->post("totalmark");
			$this->load->model('model_teacher');
			$this->model_teacher->register_subject($subject_info);
=======
		
		$teacher_info['subject_name']=$this->input->post("subjectname");
		$teacher_info['subject_totalmark']=$this->input->post("totalmark");
				
		$this->load->model('model_teacher');
		$this->model_teacher->register_subject($teacher_info);
>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
		}
	} 
