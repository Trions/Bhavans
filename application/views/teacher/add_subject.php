<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>
	<div class="main_content">
		<form name="subject_add" id="subject_add"method="post" action="<?php echo base_url();?>teacher/register_subject">
		<fieldset>
			<?php //$query=$this->db->query('SELECT MAX(teacher_id) from tbl_teacher');
			/*$this->db->select_max('teacher_id');
			$query=$this->db->get('tbl_teacher');
			if($query->num_rows > 0){
			foreach($query->result_array() as $row){
				echo $row['teacher_id'];
			}
			}
						
			/*$query=$this->db->query('SELECT LAST_INSERT_ID() from tbl_teacher');
			if($query->num_rows > 0){
				foreach($query->result_array() as $row){
					echo $row['LAST_INSERT_ID()'];
				}}*/
			$uman = $this->session->userdata('user_id');
			echo $uman;
			
			?>
<ul>
<li>			
			<label for="subjectname">subject name</label>
			<input type="text" id="subjectname" name="subjectname"/>
</li>
<li>	
			<label for="totalmark"> total mark</label>
			<input type="totalmark" id="totalmark" name="totalmark"/>
			
<li>
</li>
<li>		
<br>
			<input name="Submit1" value="Submit" type="submit" >
			<input type="reset" id="reset" name="reset" value="Reset"/>
</li>
</ul>	
		</fieldset>	
		
		
	</div>
</div>
