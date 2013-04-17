<html>
<head>
<title>Refer Student</title>
<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>

	<div class="main_content">
	<div class="s_main_content">
	<form name="add_student" id="add_student" method="post" action="<?php echo base_url()?>teacher/register_referral">
		<fieldset>
		<ul>
			<li>
				<label for="name">Student Name</label>
				<input type="text" id="name" name="name" value="<?php echo set_value('name');?>"/>
				<?php echo form_error('name', '<div class="error">', '</div>'); ?>
			</li>
		
			<li>
				<label for="grade">Grade</label>
				<input type="text" id="grade" name="grade" value="<?php echo set_value('grade');?>"/>
				<?php echo form_error('grade', '<div class="error">', '</div>'); ?>
			</li>
			<li>
			
				<label for="school">School</label>
	<?php 
		echo '<select name="school">';
		//echo '<option value="0">-- -- -- -</option>';
		foreach ($query as $q){
		echo '<option value="'.$q->scl_id.'">'.$q->scl_name.'</option>';
		
		}
		echo '</select>'
	?>
			</li>
			<!--<li>
				<label for="teacher_id">Referring Teacher id</label>
				<input type="text" id="teacher_id" name="teacher_id"/>
			</li>-->
			<li>
				<label for="referrig_reason">Reason For Referring</label>
				<textarea id="referrig_reason" name="referrig_reason"><?php echo set_value('referrig_reason');?> </textarea>
				<?php echo form_error('referrig_reason', '<div class="error">', '</div>'); ?>
			</li>
			
				<label>               BEHAVIOUR                </label>
			
			<br>
			
			


			
			<li>
				<label> Follows School and Classroom Rules</label>
				<div class="sub_content">	
				<input type="radio" name="fscr" value="1" <?php echo set_radio('fscr', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="fscr" value="2" <?php echo set_radio('fscr', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('fscr', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			
			<li>
				<label> Follows Directions</label>
				<div class="sub_content">
				<input type="radio" name="fd" value="1" <?php echo set_radio('fd', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="fd" value="2" <?php echo set_radio('fd', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('fd', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Comes Prepared for Class</label>				
				<div class="sub_content">
				<input type="radio" name="cpc" value="1" <?php echo set_radio('cpc', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="cpc" value="2" <?php echo set_radio('cpc', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('cpc', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Listens Attentively</label>
				<div class="sub_content">			
				<input type="radio" name="la" value="1" <?php echo set_radio('la', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="la" value="2" <?php echo set_radio('la', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('la', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Participates in Class Activities</label>	
				<div class="sub_content">			
				<input type="radio" name="pca" value="1" <?php echo set_radio('pca', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="pca" value="2" <?php echo set_radio('pca', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('pca', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Works Without Disturbing Others</label>				
				<div class="sub_content">
				<input type="radio" name="wwdo" value="1" <?php echo set_radio('wwdo', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="wwdo" value="2" <?php echo set_radio('wwdo', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('wwdo', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Completes Work in Assigned Time</label>	
				<div class="sub_content">			
				<input type="radio" name="cwat" value="1" <?php echo set_radio('cwat', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="cwat" value="2" <?php echo set_radio('cwat', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('cwat', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Completes Homework Assignments</label>				
				<div class="sub_content">
				<input type="radio" name="cha" value="1" <?php echo set_radio('cha', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="cha" value="2" <?php echo set_radio('cha', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('cha', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Shows Effort to do Best Work</label>				
				<div class="sub_content">
				<input type="radio" name="sebw" value="1" <?php echo set_radio('sebw', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="sebw" value="2" <?php echo set_radio('sebw', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('sebw', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Works Cooperatively With Others</label>				
				<div class="sub_content">
				<input type="radio" name="wco" value="1" <?php echo set_radio('wco', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="wco" value="2" <?php echo set_radio('wco', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('wco', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Takes Care of Personal Property</label>	
				<div class="sub_content">			
				<input type="radio" name="tcpp" value="1" <?php echo set_radio('tcpp', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="tcpp" value="2" <?php echo set_radio('tcpp', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('tcpp', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Takes Care of School Property</label>				
				<div class="sub_content">
				<input type="radio" name="tcsp" value="1" <?php echo set_radio('tcsp', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="tcsp" value="2" <?php echo set_radio('tcsp', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('tcsp', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Respect Others and is Courteous</label>	
				<div class="sub_content">			
				<input type="radio" name="roc" value="1" <?php echo set_radio('roc', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="roc" value="2" <?php echo set_radio('roc', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('roc', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Practices Self Control</label>	
				<div class="sub_content">			
				<input type="radio" name="psc" value="1" <?php echo set_radio('psc', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="psc" value="2" <?php echo set_radio('psc', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('psc', '<div class="error">', '</div>'); ?>
			</li>
			
			
			<li>
				<label> Respects Authority</label>	
				<div class="sub_content">			
				<input type="radio" name="ra" value="1" <?php echo set_radio('ra', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="ra" value="2" <?php echo set_radio('ra', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('ra', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Behaves Appropriately in Play Ground</label>
				<div class="sub_content">
				<input type="radio" name="bapg" value="1" <?php echo set_radio('bapg', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="bapg" value="2" <?php echo set_radio('bapg', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('bapg', '<div class="error">', '</div>'); ?>
				
			</li>
			
			
			<li>
				<label> Behaves Appropriately in Co-Curricular Activity Room</label>
				<div class="sub_content">				
				<input type="radio" name="baccar" value="1" <?php echo set_radio('baccar', '1'); ?> />
				<label for="yes">Yes</label>
				<input type="radio" name="baccar" value="2" <?php echo set_radio('baccar', '2'); ?> />
				<label for="no">No</label>
				</div>
				<?php echo form_error('baccar', '<div class="error">', '</div>'); ?>
				
			</li><br>			
			
			<li>
				<label for="remarks">Remarks</label>
				<span style="font-size:15">   </span>
				<textarea id="remarks" name="remarks"><?php echo set_value('remarks');?> </textarea>
				<?php echo form_error('remarks', '<div class="error">', '</div>'); ?>
			</li>
			
			<li>
				<label for="academic">Academic</label>
				<span style="font-size:15">   </span>
				<textarea id="academic" name="academic"><?php echo set_value('academic');?> </textarea>
				<?php echo form_error('academic', '<div class="error">', '</div>'); ?>
			</li>
			<li>
				<label for="student_strength">Student's Strengths</label>
				<span style="font-size:15">   </span>
				<textarea id="student_strength" name="student_strength"><?php echo set_value('student_strength');?> </textarea>
				<?php echo form_error('student_strength', '<div class="error">', '</div>'); ?>
			</li>
			<li>
				<label for="view_about_parent">View on Student's Parnets</label>
				<span style="font-size:15">   </span>
				<textarea id="view_about_parent" name="view_about_parent" ><?php echo set_value('view_about_parent');?> </textarea>
				<?php echo form_error('view_about_parent', '<div class="error">', '</div>'); ?>
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
