<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>
	<div class="main_content">
	<div class="s_main_content">
	<form name="add_student" id="add_student" method="post" action="<?php echo base_url()?>teacher/register_report">
		<fieldset>
		<ul>
			<!--<li>
				<label for="teacher_id">Teacher id</label>
				<input type="text" id="teacher_id" name="teacher_id"/>
			</li>-->
			<li>
				<label for="teacher_subject">Teacher Subject</label>
				<input type="text" id="teacher_subject" name="teacher_subject"/>
			</li>
			
			<li>
				<label for="name">Student Name</label>
				<?php 
					echo '<select name="name">';
					//echo '<option value="0">-- -- -- -</option>';
					foreach ($query as $q){
					echo '<option value="'.$q->stu_id.'">'.$q->stu_name.'</option>';
		
					}
					echo '</select>'
				?>
			</li>
			<li>
				<label for="grade">Grade</label>
				<input type="text" id="grade" name="grade"/>
			</li>
			
			<li>
				<label for="about_parent">View About Student Parent</label>
				<span style="font-size:15">   </span>
				<textarea id="about_parent" name="about_parent"></textarea>
			</li>
			
			<li>
				<label for="add_info">Additional Information</label>
				<span style="font-size:15">   </span>
				<textarea id="add_info" name="add_info"></textarea>
			</li>
			
			
			
			
			
			<li>
				<label for="behaviour">Class Room Behaviour</label>
				<span style="font-size:15">   </span>
				<textarea id="behaviour" name="behaviour"> </textarea>
			</li>
			
			<li>
				<label for="interaction">Peer Interaction</label>
				<span style="font-size:15">   </span>
				<textarea id="interaction" name="interaction"> </textarea>
			</li>
			
			<li>
				<label for="participation">Class Participation</label>
				<span style="font-size:15">   </span>
				<textarea id="participation" name="participation"> </textarea>
			</li>
			
			<li>
				<label for="follow">Ability to Follow Instructions</label>
				<span style="font-size:15">   </span>
				<textarea id="follow" name="follow"> </textarea>
			</li>
			
			<li>
				<label for="attcon">Attention and Concentration</label>
				<span style="font-size:15">   </span>
				<textarea id="attcon" name="attcon"> </textarea>
			</li>
			
			<li>
				<label for="performance">Academic Performance</label>
				<span style="font-size:15">   </span>
				<textarea id="performance" name="performance"> </textarea>
			</li>
						
			<li>
				<label for="strengths">Strengths</label>
				<span style="font-size:15">   </span>
				<textarea id="strengths" name="strengths"> </textarea>
			</li>
			
			<li>
				<label for="ly_performance">Performance During Last Academic Year</label>
				<span style="font-size:15">   </span>
				<textarea id="ly_performance" name="ly_performance"> </textarea>
			</li>
			
			<li>
				<label for="remarks">Remarks</label>
				<span style="font-size:15">   </span>
				<textarea id="remarks" name="remarks"> </textarea>
			</li>
			
			<li>
				<label for="date"> Date</label>
				<input type="text" id="date" name="date"/>
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
