<?php
//this is the controller file 
//class name should be the same as that of the file name with first letter
//in caps
class Registration extends CI_Controller{
	function __construct(){
		parent::__consturct();
	}
	
	function student_registration(){
		//this function is called while clicking the 
		// submit button if we give
		// action="registration/student_registation"
		$this->load->library('form_validation');
		//form_validation is a library used in validating the inputs
		$this->form_validation->set_rules('fname','First Name','required|trim|xss_clean');
		$this->form_validation->set_rules('lname','Last Name','required|trim|xss_clean');
		$this->form_validation->set_rules('m','Gender','required');
		$this->form_validation->set_rules('l1','Day','required');
		$this->form_validation->set_rules('l2','Month','required');
		$this->form_validation->set_rules('l3','Year','required');
		$this->form_validation->set_rules('sadd','Address','required|xss_clean');
		$this->form_validation->set_rules();
		$this->form_validation->set_rules();
		//validate every thing and then run the function as follows
		
		if($this->form_validation->run()=false){
		//redirects to the page specified in the view
		//incase of validation error in this case 
		//student_reg_view(reloads the page)
			$this->load->view('student_reg_view');	
			
		}
		else{
			//loads the database model file in the model folder
			//in this case the registration model is loaded
			$this->load->model('registration_model');
			//the functions inside the model are access by using the 
			//method given below
			//in this case the method create_student is accessed
			if($query=$this->registration_model->create_student()){
				$this->load->view();
				//if the create_student function returns false the 
				//view we want can be loaded(not specified above)
			}
			else{
			
				$this->load->view('Registration_failed_view');
				//registration failed view is loaded in case of 
				//failed registration
			}
		}
		
	
	}
	
	function teacher_registration(){
	
	//the action="registation/teacher_registration " this funtion will be
	//executed
	//then the logic is same as that of the student registration
	}
	
	function principal_registratio(){
	
	
	}
<<<<<<< HEAD

=======
}
>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
?>
