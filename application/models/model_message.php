<?php
	class Model_message extends CI_Model{
		function __construct(){
			parent::__construct();
		}
		
		
		function private_message($message){
		
			$this->db->insert('tbl_message',$message);
				echo "<script>alert('Message Send');
			
				</script>";
		}
		
		function public_message($message){
		
			$this->db->insert('tbl_public_message',$message);
			
		
		}
		
		function get_recipients(){
		
		
			$this->db->select('teacher_id,teacher_first_name');
			$query = $this->db->get('tbl_teacher');
			if($query->num_rows >0){
				foreach($query->result() as $row){
					$data[]=$row;
				}
				return $data;
			}	
				
		
		}		
		
		function retreve_messages(){
		
			$val1=$this->session->userdata('user_id');
			$cat=$this->session->userdata('user_cat');
			if($cat==1)
			{
				$query_string="
				(
				SELECT t.teacher_first_name AS name, m.message_content AS message_content, m.date AS m_date
				FROM tbl_teacher t, tbl_message m
				WHERE t.teacher_id = m.message_sender_id
				AND m.user_category =2
				AND m.message_receiver_id ='{$val1}'
				)
				UNION 
				(

				SELECT c.coordiantor_name AS name, m.message_content AS message_content, m.date AS m_date
				FROM tbl_coordinator c, tbl_message m
				WHERE c.coordinator_id = m.message_sender_id
				AND m.user_category =1
				AND m.message_receiver_id = '{$val1}'
				)
				UNION 
				(
				SELECT t.teacher_first_name AS name, m.message_content AS message_content, m.date AS m_date
				FROM tbl_teacher t, tbl_public_message m
				WHERE t.teacher_id = m.message_sender_id
				AND m.user_category =2
				)
				UNION 
				(

				SELECT c.coordiantor_name AS name, m.message_content AS message_content, m.date AS m_date
				FROM tbl_coordinator c, tbl_public_message m
				WHERE c.coordinator_id = m.message_sender_id
				AND m.user_category =1 AND m.message_sender_id<>'{$val1}'
				)
				ORDER BY m_date DESC ";
			}
			else
			{
				$query_string="
				(
				SELECT t.teacher_first_name AS name, m.message_content AS message_content, m.date AS m_date
				FROM tbl_teacher t, tbl_message m
				WHERE t.teacher_id = m.message_sender_id
				AND m.user_category =2
				AND m.message_receiver_id ='{$val1}'
				)
				UNION 
				(

				SELECT c.coordiantor_name AS name, m.message_content AS message_content, m.date AS m_date
				FROM tbl_coordinator c, tbl_message m
				WHERE c.coordinator_id = m.message_sender_id
				AND m.user_category =1
				AND m.message_receiver_id = '{$val1}'
				)
				UNION 
				(
				SELECT t.teacher_first_name AS name, m.message_content AS message_content, m.date AS m_date
				FROM tbl_teacher t, tbl_public_message m
				WHERE t.teacher_id = m.message_sender_id
				AND m.user_category =2 
				And m.message_sender_id!='{$val1}'
				)
				UNION 
				(

				SELECT c.coordiantor_name AS name, m.message_content AS message_content, m.date AS m_date
				FROM tbl_coordinator c, tbl_public_message m
				WHERE c.coordinator_id = m.message_sender_id
				AND m.user_category =1 
				)
				ORDER BY m_date DESC ";
				
				
			}
			//$query_string="select t.teacher_first_name,m.message_content from tbl_teacher t,tbl_message m,tbl_public_message p where t.teacher_id=m.message_sender_id "
				$query = $this->db->query($query_string);
			
			/*$id=$this->session->userdata('login_id');
			
			$newquery=$this->db->get_where('tbl_teacher',array(
			$query = $this->db->get_where('tbl_message', array('message_receiver_id' => $id,'user_category'=>$this->session->userdata('login_category')));*/
			if($query->num_rows > 0){
				foreach($query->result() as $row){
					$data[] = $row;
				}
			return $data;
			}
		
		
		
		}
		
		
	}
?>
