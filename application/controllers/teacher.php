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
		
		function add_referral(){
	
			$this->load->view('teacher/add_referral.php');
		}
		
		function add_report(){
	
			$this->load->view('teacher/add_report.php');
		}
		
		function register_referral(){
	
			$referral_info['student_name']=$this->input->post("name");
			$referral_info['grade']=$this->input->post("grade");
			$referral_info['school']=$this->input->post("school");
			//$referral_info['teacher_id']=$this->input->post("teacher_id");
			$referral_info['teacher_id']=$this->session->userdata('user_id');
			$referral_info['reason_for_referring']=$this->input->post("referrig_reason");
			$referral_info['fscr']=$this->input->post("fscr");
			$referral_info['fd']=$this->input->post("fd");
			$referral_info['cpc']=$this->input->post("cpc");
			$referral_info['la']=$this->input->post("la");
			$referral_info['pca']=$this->input->post("pca");
			$referral_info['wwdo']=$this->input->post("wwdo");
			$referral_info['cwat']=$this->input->post("cwat");
			$referral_info['cha']=$this->input->post("cha");
			$referral_info['sebw']=$this->input->post("sebw");
			$referral_info['wco']=$this->input->post("wco");
			$referral_info['tcpp']=$this->input->post("tcpp");
			$referral_info['tcsp']=$this->input->post("tcsp");
			$referral_info['roc']=$this->input->post("roc");
			$referral_info['psc']=$this->input->post("psc");
			$referral_info['ra']=$this->input->post("ra");
			$referral_info['bapg']=$this->input->post("bapg");
			$referral_info['baccar']=$this->input->post("baccar");
			$referral_info['remarks']=$this->input->post("remarks");
			$referral_info['academic']=$this->input->post("academic");
			$referral_info['student_strengths']=$this->input->post("student_strength");
			$referral_info['view_about_parents']=$this->input->post("view_about_parent");
			
			$this->load->model('model_teacher');
			$this->model_teacher->register_referral($referral_info);
	
		}
		
		function register_report(){
		
			//$report_info['teach_id']=$this->input->post("teacher_id");
			$report_info['teach_id']=$this->session->userdata('user_id');
			$report_info['teach_subject']=$this->input->post("teacher_subject");
			$report_info['teach_view_o_stu_parnt']=$this->input->post("about_parent");
			$report_info['cmt_on_addi_info']=$this->input->post("add_info");
			$report_info['new_stu_name']=$this->input->post("name");
			$report_info['new_stu_grade']=$this->input->post("grade");
			$report_info['cls_rm_beha']=$this->input->post("behaviour");
			$report_info['peer_inte']=$this->input->post("interaction");
			$report_info['cls_parti']=$this->input->post("participation");
			$report_info['ablty_to_flw_inst']=$this->input->post("follow");
			$report_info['attn_nd_concen']=$this->input->post("attcon");
			$report_info['acd_perfo']=$this->input->post("performance");
			$report_info['strengths']=$this->input->post("strengths");
			$report_info['perfo_lst_yr']=$this->input->post("ly_performance");
			$report_info['ny_rmrks']=$this->input->post("remarks");
			$insertdate =$this->input->post("date");
			$ins = date($insertdate);
			$report_info['date']=$ins;
						
			$this->load->model('model_teacher');
			$this->model_teacher->register_report($report_info);
			
		}
		
		function register_subject(){
		
			$teacher_info['subject_name']=$this->input->post("subjectname");
			$teacher_info['subject_totalmark']=$this->input->post("totalmark");
				
			$this->load->model('model_teacher');
			$this->model_teacher->register_subject($teacher_info);
		}
	} 
