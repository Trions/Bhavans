<html>
<head>
<title>Enter Student Mark</title>
<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>
	<div class="main_content">
	<div class="s_main_content">
	<form name="add_student" id="add_student" method="post" action="<?php echo base_url()?>teacher/register_mark">
		<fieldset>
		<ul>
			<li>
				<label for="name">Student Name</label>
				<?php 
					echo '<select name="stu_id">';
					//echo '<option value="0">-- -- -- -</option>';
					foreach ($query as $q){
					echo '<option value="'.$q->stu_id.'">'.$q->stu_name.'</option>';
		
					}
					echo '</select>'
				?>
			</li>
			
			<!--<li>
				<label for="grade">Grade</label>
				<?php 
					echo '<select name="grade">';
					//echo '<option value="0">-- -- -- -</option>';
					foreach ($query as $q){
					echo '<option value="'.$q->stu_grade.'">'.$q->stu_grade.'</option>';
		
					}
					echo '</select>'
				?>
			</li>-->
			
			<li>
				<label for="english">English</label>
				<input type="text" id="english" name="english" value="<?php echo set_value('english');?>"/>
				<?php echo form_error('english', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="hindi">Hindi</label>
				<input type="text" id="hindi" name="hindi" value="<?php echo set_value('hindi');?>"/>
				<?php echo form_error('hindi', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="mal_san">Malayalam/Sanskrit</label>
				<input type="text" id="mal_san" name="mal_san" value="<?php echo set_value('mal_san');?>"/>
				<?php echo form_error('mal_san', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="mathematics">Mathematics</label>
				<input type="text" id="mathematics" name="mathematics" value="<?php echo set_value('mathematics');?>"/>
				<?php echo form_error('mathematics', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="science">Science</label>
				<input type="text" id="science" name="science" value="<?php echo set_value('science');?>"/>
				<?php echo form_error('science', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="social_science">Social Science</label>
				<input type="text" id="social_science" name="social_science" value="<?php echo set_value('social_science');?>"/>
				<?php echo form_error('social_science', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="gk">General Knowledge</label>
				<input type="text" id="gk" name="gk" value="<?php echo set_value('gk');?>"/>
				<?php echo form_error('gk', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label>Term I</label>				
				<div class="sub_content">
				<!--<input type="radio" id="fa1" value="<?php echo set_value('ass_type','fa1');?>" name="ass_type"/>-->
				<input type="radio" id="fa1" value="fa1" name="ass_type"/>
				<label for="fa1">FA1</label>
				<input type="radio" id="fa2" value="fa2" name="ass_type"  />
				<label for="fa2">FA2</label>
				<input type="radio" id="sa1" value="sa1" name="ass_type"  />
				<label for="sa1">SA1</label>
				</div>
			</li>
			
			
			
			<li>
				<label>Term II</label>				
				<div class="sub_content">
				<input type="radio" id="fa3" value="fa3" name="ass_type"/>
				<label for="fa3">FA3</label>
				<input type="radio" id="fa4" value="fa4" name="ass_type"  />
				<label for="fa4">FA4</label>
				<input type="radio" id="sa2" value="sa2" name="ass_type"  />
				<label for="sa2">SA2</label>
				</div>
				
			</li>
			
			<li>
				<div class="sub_content"><span style="padding-left: 475px"><?php echo form_error('ass_type', '<div class="error">', '</div>');?></span></div>
			</li>
						
			<li>
			
			<button type="submit" value="Submit">Submit</button>
  			<button type="reset" value="Reset">Reset</button>
  			
			</li>
			
			
		</fieldset>		
	</form>
	</div>
	</div>
</div>
