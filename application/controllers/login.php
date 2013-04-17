<?php

class Login extends CI_Controller{

	function __construct(){
		
		parent::__construct();

	}
	
	function usr_lgin(){
	
		$this->form_validation->set_rules('name','User Name','required');
		$this->form_validation->set_rules('password','Password','required');
		//$this->form_validation->set_rules('email','Email','required|valid_email');
		
		if($this->form_validation->run()==false)
			$this->load->view('login_view');
		else{
			$this->load->model('usr_model');
			$query=$this->usr_model->usr_login();
			 

			
			if($query){
					$this->load->library('session');
					$u_data=array('user_name'=>$this->input->post('name'),'user_id' => $query['lgin_id'],'user_cat'=> $query['lgin_cat'], 'logged_in' => TRUE,'login_category'=>$query['lgin_cat']);
					$this->session->set_userdata($u_data);
					if($query['lgin_cat']==1)
						redirect('coordinator');
					else if($query['lgin_cat']==2)
						redirect('teacher');
					else{
						////
						//use template for showing the errors
						//$this->load->helper('url');
						//redirect('index.php/login', 'refresh');
						//redirect('index.php/login');
						//echo"not good";

					}
			}
			else
			{
				redirect('login');
			}
		}
	}
	
	function index(){
		$this->load->view('login_view');
	}


}
?>


			
