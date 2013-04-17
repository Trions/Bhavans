<html>
<head>
<title> Message</title>
<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
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
					foreach ($query as $q){
					$name= implode(' ', array($q->teacher_first_name, $q->teacher_last_name)); 
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
