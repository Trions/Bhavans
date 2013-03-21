<?php

class Login extends CI_Controller{

	function __construct(){
		
		parent::__construct();

		//$this->load->views('login_view.php');
	}
	function test()
	{
	}
	function usr_lgin(){
	
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('name','User Name','required');
		$this->form_validation->set_rules('password','Password','required');
		//$this->form_validation->set_rules('email','Email','required|valid_email');
		
		if($this->form_validation->run()==false){

		
                //use another template

			//echo index_page();
			//$this->load->view('login_view');
			redirect('login');
			
		}
			//$this->load->view('login_view');
		
		else{
			$this->load->model('usr_model');
			$query=$this->usr_model->usr_login();
			
			if($query){
				$this->load->library('session');
				$u_data=array('user_name'=>$this->input->post('name'));
				
				$this->session->set_userdata($u_data);

				//$data['main_content']='signin';
				if($query['lgin_cat']==1){
					//$data['main_content']='co_signin';
					redirect('coordinator');
					//redirect('site/members_area');
					//$this->load->view('includes/template',$data);
				}
					else if($query['lgin_cat']==2){
					//teacher;
				}
				else if($query['lgin_cat']==3){
					//parent;
					
				}
				else if($query['lgin_cat']==4){
					//remedial;
				}
			}
			else
			{////
			//use template for showing the errors
				//$this->load->helper('url');
				//redirect('index.php/login', 'refresh');
				//redirect('index.php/login');
				//echo"not good";

			}
		}
	}
	//function can{
				
	//}		
	
	function index(){
		$this->load->library('form_validation');
		//$this->load->helper('url');
		
		$this->load->view('login_view');
		
		}


}
?>


			
