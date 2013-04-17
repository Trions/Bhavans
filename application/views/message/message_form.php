
<?php

if($this->session->userdata('user_cat')==1){
	$this->load->view('crdinator/coordinator_header.php');
	$this->load->view('crdinator/coordinator_sidebar.php');
}
else{
	
	$this->load->view('teacher/teacher_header.php');
	$this->load->view('teacher/teacher_sidebar.php');
	
}
?>	
<div class="main_content">


	
	<form name="add_student" id="add_student" method="post" action="<?php echo base_url()?>message/send_message">
		
		<fieldset> 
		<ul>
		
			<li>
				<label for="to">To:</label>
			</li>
			<li>
				<?php 	echo '<select name="to">';
					echo '<option value ="all">Send To All </option>';
				if($this->session->userdata('user_cat')==2){
				echo '<option value ="1">Dr Geetha </option>';
				
}
					foreach ($query as $q){
					$name=$q->teacher_first_name; 
						echo '<option value="'.$q->teacher_id.'">'. $name .'</option>';
			
					}
					echo '</select>'
				?>
			</li>
		
			<li>
				<label for="message_content">Message</label>
				<textarea id="message_content" name="message_content"> </textarea>
			</li>
			
			<button type="submit" value="Submit">Send</button>
  			<button type="reset" value="Reset">Clear</button>
			</li>
			
			
		</fieldset>		
	</form>

	</div>
</div>
