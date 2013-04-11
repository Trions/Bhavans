<?php
	class Teacher extends CI_Controller{
		function __construct(){
			parent::__construct();
		}
		
		function index(){
		if($this->session->userdata('logged_in')){
			$this->load->view('teacher/Home.php');
		}
		}
		
		function sign_out(){
			$this->session->sess_destroy();
			redirect('login');
		}
		
		
		function add_subject(){
		if($this->session->userdata('logged_in')){
			$this->load->view('teacher/add_subject');
		}}
		function add_student(){
		if($this->session->userdata('logged_in')){
			$this->load->view('teacher/add_student');
		}
		}
		function add_referral(){
		if($this->session->userdata('logged_in')){
			$this->load->model('model_teacher');
			$data['query']= $this->model_teacher->add_referral_get();
			$this->load->view('teacher/add_referral.php',$data);
		}
		}
		function add_report(){
		if($this->session->userdata('logged_in')){
			$this->load->model('model_teacher');
			$data['query']= $this->model_teacher->add_report_get();
			$this->load->view('teacher/add_report.php',$data);
		}}

		function add_evaluation(){
		if($this->session->userdata('logged_in')){

			$this->load->model('model_teacher');
			$data['query1']= $this->model_teacher->add_evaluation_get();
			$this->load->view('teacher/add_evaluation.php',$data);
		}}
		
		function add_caserecord(){
		if($this->session->userdata('logged_in')){
			$this->load->model('model_teacher');
			$data['query1']= $this->model_teacher->add_report_get();
			$data['query2']= $this->model_teacher->add_referral_get();
			$this->load->view('teacher/add_caserecord.php',$data,$data);
		}}
		
		function add_mark(){
		if($this->session->userdata('logged_in')){
			$this->load->model('model_teacher');
			$data['query']= $this->model_teacher->add_mark_get();
			$this->load->view('teacher/add_mark.php',$data);
		}
		}
		
		function register_referral(){
			if($this->session->userdata('logged_in')){
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
			redirect('teacher/add_referral');
	
		}
		}
		function register_report(){
		if($this->session->userdata('logged_in')){
			//$report_info['teach_id']=$this->input->post("teacher_id");
			$report_info['sl_no']=$this->input->post("sl_no");
			$report_info['teach_id']=$this->session->userdata('user_id');
			$report_info['teach_subject']=$this->input->post("teacher_subject");
			$report_info['teach_view_o_stu_parnt']=$this->input->post("about_parent");
			$report_info['cmt_on_addi_info']=$this->input->post("add_info");
			//$report_info['new_stu_name']=$this->input->post("name");
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
			redirect('teacher/add_report');
			
		}}
		
		function register_mark(){
		if($this->session->userdata('logged_in')){
			$mark_info['stu_id']=$this->input->post("stu_id");
			//$mark_info['stu_grade']=$this->input->post("grade");
			$mark_info['eng']=$this->input->post("english");
			$mark_info['hin']=$this->input->post("hindi");
			$mark_info['mal_san']=$this->input->post("mal_san");
			$mark_info['math']=$this->input->post("mathematics");
			$mark_info['science']=$this->input->post("science");
			$mark_info['social_science']=$this->input->post("social_science");
			$mark_info['gk']=$this->input->post("gk");
			$mark_info['fa']=$this->input->post("ass_type");
			$timezone = "Asia/Calcutta";
			date_default_timezone_set($timezone);
			$mark_info['date']=date('Y-m-d H:i:s');
			
			if ($mark_info['eng']==0){ 
				$mark_info['eng']=0.0000001;
			}
			
			if ($mark_info['hin']==0){ 
				$mark_info['hin']=0.0000001;
			}
			
			if ($mark_info['mal_san']==0){ 
				$mark_info['mal_san']=0.0000001;
			}
			
			if ($mark_info['math']==0){ 
				$mark_info['math']=0.0000001;
			}
			
			if ($mark_info['science']==0){ 
				$mark_info['science']=0.0000001;
			}
			
			if ($mark_info['social_science']==0){ 
				$mark_info['social_science']=0.0000001;
			}
			
			if ($mark_info['gk']==0){ 
				$mark_info['gk']=0.0000001;
			}
			
			$this->load->model('model_teacher');
			$this->model_teacher->register_mark($mark_info);
			//echo $mark_info['gk'];
			redirect('teacher/add_mark');		
		
		}
		}
		function register_subject(){
		if($this->session->userdata('logged_in')){
			$teacher_info['subject_name']=$this->input->post("subjectname");
			$teacher_info['subject_totalmark']=$this->input->post("totalmark");
				
			$this->load->model('model_teacher');
			$this->model_teacher->register_subject($teacher_info);
			redirect('teacher/add_subject');
		}
		}
		function register_evaluation(){
			if($this->session->userdata('logged_in')){
			
			$evaluation_info['stu_id']=$this->input->post("s_name");
			//$evaluation_info['stu_name']=$this->input->post("s_name");
			$evaluation_info['reading']=$this->input->post("reading");
			$evaluation_info['reading_det']=$this->input->post("reading_det");			
			$evaluation_info['reading_compre']=$this->input->post("reading_comp");
			$evaluation_info['reading_compre_det']=$this->input->post("reading_compre_det");
			$evaluation_info['spelling']=$this->input->post("spelling");
			$evaluation_info['spelling_det']=$this->input->post("spelling_det");
			$evaluation_info['handwriting']=$this->input->post("hand_writing");
			$evaluation_info['handwriting_det']=$this->input->post("handwriting_det");
			$evaluation_info['writen_exp']=$this->input->post("written_expression");
			$evaluation_info['writen_exp_det']=$this->input->post("written_det");
			$evaluation_info['arith_math']=$this->input->post("arithmetic");
			$evaluation_info['arith_math_det']=$this->input->post("arith_math_det");
			$evaluation_info['sub_content']=$this->input->post("subject_content");
			$evaluation_info['sub_content_det']=$this->input->post("sub_content_det");
			$evaluation_info['remarks']=$this->input->post("remarks");
			//$evaluation_info['daily_report']=$this->input->post("daily_report");
			//$evaluation_info['clas_support']=$this->input->post("class_support");
			//$evaluation_info['stu_name']=$this->input->post("s_name");
			//$evaluation_info['date']=$this->input->post("date");
			$dat=$_POST['l1'];
			$mnth=$_POST['l2'];
			$yr=$_POST['l3'];
			$dt=$yr."/".$mnth."/".$dat;		


		//$ins = date($insertdate);
				$evaluation_info['date']=$dt;
			
			$this->load->model('model_teacher');
			$this->model_teacher->register_evaluation($evaluation_info);
			redirect('teacher/add_evaluation');
		
		}}
		
		function register_caserecord(){
		if($this->session->userdata('logged_in')){
			//$report_info['teach_id']=$this->input->post("teacher_id");
			
			$report_info['stu_id']=$this->input->post("name");
			//$report_info['s_dob']=$this->input->post("dob");
			//$report_info['s_gender']=$this->input->post("s_gender");
			//$report_info['s_address']=$this->input->post("s_address");
			$report_info['school']=$this->input->post("school");
			$report_info['clas']=$this->input->post("class");
			$report_info['info_provider']=$this->input->post("info_provider");
			$report_info['m_name']=$this->input->post("m_name");
			$report_info['m_age']=$this->input->post("m_age");
			$report_info['m_education']=$this->input->post("m_edu");
			$report_info['m_occupation']=$this->input->post("m_occupation");
			$report_info['m_mobile']=$this->input->post("m_mobile");
			$report_info['f_name']=$this->input->post("f_name");
			$report_info['f_age']=$this->input->post("f_age");
			$report_info['f_education']=$this->input->post("f_edu");
			$report_info['f_occupation']=$this->input->post("f_occupation");
			$report_info['f_mobile']=$this->input->post("f_mobile");
			$report_info['guardian']=$this->input->post("g_name");
			$report_info['g_age']=$this->input->post("g_age");
			$report_info['g_education']=$this->input->post("g_edu");
			$report_info['g_occupation']=$this->input->post("g_occupation");
			$report_info['g_mobile']=$this->input->post("g_mobile");
			$report_info['mstatus']=$this->input->post("mstatus");
			$report_info['mtounge']=$this->input->post("m_tounge");
			
			$report_info['present_problem']=$this->input->post("present_problem");
			$report_info['sensory_communication']=$this->input->post("sensory_communication");
			$report_info['socialbehaviour']=$this->input->post("socialbehaviour");
			$report_info['date_noticed']=$this->input->post("date_noticed");
			$report_info['past_exp']=$this->input->post("past_exp");
			$report_info['present_exp']=$this->input->post("present_exp");
			$report_info['med_history']=$this->input->post("med_info");
			$report_info['school_info']=$this->input->post("school_info");
			$report_info['other_info']=$this->input->post("other");
			$report_info['class_support']=$this->input->post("class_support");
			$report_info['daily_report']=$this->input->post("daily_report");
			




			
						
			$this->load->model('model_teacher');
			$this->model_teacher->register_caserecord($report_info);
			redirect('teacher/add_report');
			
		}}


	} 
