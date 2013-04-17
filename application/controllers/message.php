<?php
class Message extends CI_Controller{
	function __construct(){
		
		parent::__construct();
		
		
		//$this->load->views('login_view.php');
	}
	function index(){
	
		
	}
	
	function messages(){
		
		$this->load->model('model_message');
		$data['query']=$this->model_message->get_recipients();
		$this->load->view('message/message_form',$data);
	}
	
	
	
	function send_message(){
		
		if($this->session->userdata('logged_in')){
				$this->load->model('model_message');
				$message['message_sender_id']=$this->session->userdata('user_id');
				$message['user_category']=$this->session->userdata('user_cat');
				$message['message_content']=$this->input->post("message_content");
				$message['date']=date('Y-m-d H:i:s');
			if($this->input->post("to")=="all"){
				$this->model_message->public_message($message);
			}
			else{
				$message['message_receiver_id']=$this->input->post("to");
				$this->model_message->private_message($message);
			}
			echo "<script>alert('Message Send');
			
			</script>";
		}
		redirect('message/messages');
	}
	function c_message(){
			if($this->session->userdata('logged_in')){
				$this->load->model('model_message');
				$data=$this->model_message->retreve_messages();
				$this->load->view('crdinator/Home.php',$data);
			}
	}
	
	function t_message(){
			$this->load->model('model_message');
			$data=$this->model_message->retrive_message();
			$this->load->view('teacher/Home.php',$data);
	}
	
}

?>
