<html>
<head>
<title>Enter Case Record</title>
<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>
	<div class="main_content">
	<form name="add_caserecord" id="add_record" method="post" action="<?php echo base_url()?>teacher/register_caserecord">
		<fieldset>
		<ul>
			<li>
				<label for="name">Student Name</label>
				<?php 
					echo '<select name="name">';
					//echo '<option value="0">-- -- -- -</option>';
					foreach ($query1 as $q){
					echo '<option value="'.$q->stu_id.'">'.$q->stu_name.'</option>';
		
					}
					echo '</select>'
				?>
			<!--</li>
		

			<li>
				<label for="dob">DOB</label>
				<input type="text" id="dob" name="dob"/>
			</li>
			<li>
				<label> Gender</label>
				
				<input type="radio" id="s_gender_male" value="male" name="s_gender"/>
				<label for="s_gender_male">Male</label>
				
			
			 
			   <input type="radio" id="s_gender_female" value="female" name="s_gender"  />
				<label for="s_gender_female">Female</label>
			</li>
			<li>
				<label for="s_address">Address</label>
			<textarea rows="2" cols="20" name="s_address" wrap="physical"></textarea><br />

			</li>



			<li>
			-->
		<li>
				<label for="school">School</label>
	<?php 
		echo '<select name="school">';
		//echo '<option value="0">-- -- -- -</option>';
		foreach ($query2 as $q){
		echo '<option value="'.$q->scl_name.'">'.$q->scl_name.'</option>';
		
		}
		echo '</select>'
	?>
			</li>
			

			<li>
				<label for="class">Class</label>
				<input type="text" id="class" name="class"/>
			</li>
			<li>
				<label for="info_provider">Information provider</label>
				<input type="text" id="info_provider" name="info_provider"/>
			</li>

<li>
</li>			

				<label>               MOTHER'S DETAILS                </label>
			<li>

</li>
			<br>
			
			<li>
				<label for="m_name">Name</label>
				<input type="text" id="m_name" name="m_name"/>
			</li>
			<li>
				<label for="m_age">Age</label>
				<input type="text" id="m_age" name="m_age"/>
			</li>
		
			<li>
				<label for="m_edu">Education</label>
				<input type="text" id="m_edu" name="m_edu"/>
			</li>
		
			<li>
				<label for="m_occupation">Occupation</label>
				<input type="text" id="m_occupation" name="m_occupation"/>
			</li>
			<li>
				<label for="m_mobile">Mobile</label>
				<input type="text" id="m_mobile" name="m_mobile"/>
			</li>
			<label>               FATHERS'S DETAILS                </label>
			
			<br>
			<li>
			</li>
			<li>
				<label for="f_name">Name</label>
				<input type="text" id="f_name" name="f_name"/>
			</li>
			<li>
				<label for="f_age">Age</label>
				<input type="text" id="f_age" name="f_age"/>
			</li>
		
			<li>
				<label for="f_edu">Education</label>
				<input type="text" id="f_edu" name="f_edu"/>
			</li>
		
			<li>
				<label for="f_occupation">Occupation</label>
				<input type="text" id="f_occupation" name="f_occupation"/>
			</li>
			<li>
				<label for="f_mobile">Mobile</label>
				<input type="text" id="f_mobile" name="f_mobile"/>
			</li>

			<li>
			
			<label>               GUARDIAN'S DETAILS                </label>
			
			</li> 	
			<li>
			</li>
			
			<li>
				<label for="g_name">Name</label>
				<input type="text" id="g_name" name="g_name"/>
			</li>
			<li>
				<label for="g_age">Age</label>
				<input type="text" id="g_age" name="g_age"/>
			</li>
		
			<li>
				<label for="g_edu">Education</label>
				<input type="text" id="g_edu" name="g_edu"/>
			</li>
		
			<li>
				<label for="g_occupation">Occupation</label>
				<input type="text" id="g_occupation" name="g_occupation"/>
			</li>
			<li>
				<label for="g_mobile">Mobile</label>
				<input type="text" id="g_mobile" name="g_mobile"/>
			</li>


			
<li>
				
				<label> Maritial Status of parents</label>
				
				<input type="radio" id="married" value="single" name="mstatus"/>
				<label for="married">Married</label>
				
			
			 
			        <input type="radio" id="divorced" value="divorced" name="mstatus"/>
				<label for="divorced">Divorced</label>

			        
			
				
			</li>
			<li>
			</li>

			<li>
				<label for="m_tounge">Mother tounge</label>
				<input type="text" id="m_tounge" name="m_tounge"/>
			</li>
<li>

			
		
</li>
		<li>
			<label for="Present_problem">Presenting problems</label>
			<textarea rows="2" cols="20" name="present_problem" wrap="physical"></textarea><br />

		</li>

		<li>
			<label for="sensory_communication">Sensory and communication problems</label>
			<textarea rows="2" cols="20" name="sensory_communication" wrap="physical"></textarea><br />

		</li>
		<li>
			<label for="socialbehaviour">Social behaviour</label>
			<textarea rows="2" cols="20" name="socialbehaviour" wrap="physical"></textarea><br />

		</li>
		<li>
				<label for="date_noticed">When was the problem(s) noticed?</label>
				<input type="text" id="date_noticed" name="date_noticed"/>
			</li>


			<li>
				<label for="past_exp">Recived evaluation or treatment before?</label>
				<input type="text" id="past_exp" name="past_exp"/>
			</li>
			<li>
				<label for="present_exp">Is the student on medication now?</label>
				<input type="text" id="present_exp" name="present_exp"/>
			</li>

			<li>

			<label for="med_info">Medical information</label>
			<textarea rows="2" cols="20" name="med_info" wrap="physical"></textarea><br />

			</li>
			<li>
				<label for="school_info">Past school information</label>
				<textarea rows="2" cols="20" name="school_info" wrap="physical"></textarea><br />

			</li>

			<li>
				<label for="other">Other significant information</label>
				<textarea rows="2" cols="20" name="other" wrap="physical"></textarea><br />

			</li>
			
			
			<li>
				<label for="class_support">Class support</label>
				<textarea rows="2" cols="20" name="class_support" wrap="physical"></textarea><br />

			</li>
			<li>
				<label for="daily_report">Daily Report</label>
				<textarea rows="2" cols="20" name="daily_report" wrap="physical"></textarea><br />

			</li>



			<button type="submit" value="Submit">Submit</button>
  			<button type="reset" value="Reset">Reset</button>
			</li>
			
			
		</fieldset>		
	</form>
	</div>
</div>
