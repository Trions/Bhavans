<<<<<<< HEAD
<?php $this->load->view('includes/Header.php');?>
<?php $this->load->view('teacher/Header.php');?>
=======
<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>
>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
	<div class="main_content">
		<form name="subject_add" id="subject_add"method="post" action="<?php echo base_url();?>teacher/register_subject">
		<fieldset>
			
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
