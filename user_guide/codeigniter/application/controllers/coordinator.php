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
	
	
	}
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

		

	}
	function add_student(){
	
		
		$this->load->view('add_stu');
	}
	function add_parent(){
	}
	function add_remedial(){
	}
	
	function remove_teacher(){
	}
	function remove_student(){
	}
	function remove_parent(){
	}
	function remove_remedial(){
	}
}
