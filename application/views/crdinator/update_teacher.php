<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
	<div class="main_content">
		<?php
		foreach ($query as $q){
		echo '<form name="update_student" id="update_student" method="post" action="'.base_url().'coordinator/update_teacher/'.$q->teacher_id.'" >';
		echo '<fieldset>
		
		<ul>
			<li>		
				
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="fname" value="'.$q->teacher_first_name.'"/>
			</li>
			<li>			
			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lname" value="'.$q->teacher_last_name.'"/>
			</li>
			<li>
				<label> Gender</label>';
				if($q->teacher_gender == 1){			
				echo '<input type="radio" id="gender_male" value="1" name="gender" checked/>
				<label for="gender_male">Male</label>
				<input type="radio" id="gender_female" value="0" name="gender"/>
				<label for="gender_female">Female</label>';
				}
				else{
				echo '<input type="radio" id="gender_male" value="1" name="gender"/>
				<label for="gender_male">Male</label>
				<input type="radio" id="gender_female" value="0" name="gender" checked/>
				<label for="gender_female">Female</label>';
				}
				
				
			echo '</li>

			<li>

	<label for="school">School</label>
	 
		<select name="school">';
		
		foreach ($query2 as $q2){
		echo '<option value="'.$q2->scl_id.'">'.$q2->scl_name.'</option>';
		
		}
		echo '</select>';
	
	
		echo '</li>	

		<li>
			<label for="dob"> Date of Birth</label>
			<input type="text" id="dob" name="dob"/>
		</li>
		<li>			

			<label for="addtext">Address</label>
			<textarea id="addtext" name="address"> </textarea>
		</li>
		<li>
			<label for="nat">Nationality</label>
			<input type="text" id="nat" name="nationality"/>
		</li>
		<li>		
			<label for="photo">Photo</label>
			<input type="file" id="photo" name="photo"/>
		</li>
		<li>			
			
	
			<label for="ph">Phone</label>
			<input type="text" id="ph" name="phone"/>
		</li>
		<li>
			<label for="email">Email</label>
			<input type="text" id="email" name="email"/>
		</li>
		<li>			
			<button type="submit" value="Submit">Update</button>
  			</li>
			
			
		</fieldset>	
		</form>';
		}
		?>
	
	</div>
</div>
