<html>
<head>
<title>Enter Student Report</title>
<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>
	<div class="main_content">
	<div class="s_main_content">
	<form name="add_student" id="add_student" method="post" action="<?php echo base_url()?>teacher/register_report">
		<fieldset>
		<ul>
			<li>
				<label for="teacher_subject">Teacher Subject</label>
				<input type="text" id="teacher_subject" name="teacher_subject" value="<?php echo set_value('teacher_subject');?>"/>
				<?php echo form_error('teacher_subject', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="sl_no">Student Name</label>
				<?php 
					echo '<select name="sl_no">';
					//echo '<option value="0">-- -- -- -</option>';
					foreach ($query as $q){
					echo '<option value="'.$q->sl_no.'">'.$q->student_name.'</option>';
		
					}
					echo '</select>'
				?>
			</li>
			
			<!--<li>
				<label for="grade">Grade</label>
				<input type="text" id="grade" name="grade"/>
			</li>-->
			
			<li>
				<label for="about_parent">View About Student Parent</label>
				<span style="font-size:15">   </span>
				<textarea id="about_parent" name="about_parent"><?php echo set_value('about_parent');?></textarea>
				<?php echo form_error('about_parent', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="add_info">Additional Information</label>
				<span style="font-size:15">   </span>
				<textarea id="add_info" name="add_info"><?php echo set_value('add_info');?></textarea>
				<?php echo form_error('add_info', '<div class="error">', '</div>'); ?>
			</li>
			
			
			
			
			
			<li>
				<label for="behaviour">Class Room Behaviour</label>
				<span style="font-size:15">   </span>
				<textarea id="behaviour" name="behaviour"><?php echo set_value('behaviour');?> </textarea>
				<?php echo form_error('behaviour', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="interaction">Peer Interaction</label>
				<span style="font-size:15">   </span>
				<textarea id="interaction" name="interaction"><?php echo set_value('interaction');?> </textarea>
				<?php echo form_error('interaction', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="participation">Class Participation</label>
				<span style="font-size:15">   </span>
				<textarea id="participation" name="participation"><?php echo set_value('participation');?> </textarea>
				<?php echo form_error('participation', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="follow">Ability to Follow Instructions</label>
				<span style="font-size:15">   </span>
				<textarea id="follow" name="follow"><?php echo set_value('follow');?> </textarea>
				<?php echo form_error('follow', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="attcon">Attention and Concentration</label>
				<span style="font-size:15">   </span>
				<textarea id="attcon" name="attcon"><?php echo set_value('attcon');?> </textarea>
				<?php echo form_error('attcon', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="performance">Academic Performance</label>
				<span style="font-size:15">   </span>
				<textarea id="performance" name="performance"><?php echo set_value('performance');?> </textarea>
				<?php echo form_error('performance', '<div class="error">', '</div>'); ?>
			</li>
						
			<li>
				<label for="strengths">Strengths</label>
				<span style="font-size:15">   </span>
				<textarea id="strengths" name="strengths"><?php echo set_value('strengths');?> </textarea>
				<?php echo form_error('strengths', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="ly_performance">Performance During Last Academic Year</label>
				<span style="font-size:15">   </span>
				<textarea id="ly_performance" name="ly_performance"><?php echo set_value('ly_performance');?> </textarea>
				<?php echo form_error('ly_performance', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="remarks">Remarks</label>
				<span style="font-size:15">   </span>
				<textarea id="remarks" name="remarks"> </textarea>
			</li>
			
			<!--<li>
				<label for="date"> Date</label>
				<input type="text" id="date" name="date"/>
			</li>-->
			
			<li>
			
			<button type="submit" value="Submit">Submit</button>
  			<button type="reset" value="Reset">Reset</button>
			</li>
			
			
		</fieldset>		
	</form>
	</div>
	</div>
</div>
