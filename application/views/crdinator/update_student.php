<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
	<div class="main_content">
		<?php
		foreach ($query as $q){
		//echo '<form name="update_student" id="update_student" method="post" action="http://localhost/codeigniter/index.php/coordinator/update_student/'.$q->stu_id.'">';
		echo '<form name="update_student" id="update_student" method="post" action="'.base_url().'coordinator/update_student/'.$q->stu_id.'" >';
		echo '<fieldset>
		
		<ul>
			<li>
				<label for="name">Name</label>
				<input type="text" id="name" name="name" value="'.$q->stu_name.'"/>
			</li>
		
			<li>
				<label for="rollno">Roll No</label>
				<input type="text" id="rollno" name="rollno" value="'.$q->stu_rollno.'"/>
			</li>
			<li>
			
				<label for="grade"> Grade</label>
				<input type="text" id="grade" name="grade" value="'.$q->stu_grade.'"/>
			</li>
			<li>
				<label for="dob"> Date of Birth</label>
				<input type="text" id="dob" name="dob" value="'.$q->stu_dob.'"/>
			</li>
			
			<li>
				<label> Gender</label>';
				if($q->stu_gender == 1){			
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
				<label for="fname">Fathers Name</label>
				<input type="text" id="fname" name="fname" value="'.$q->stu_father_name.'"/>
			</li>
			<li>
				<label for="mname">Mothers Name</label>
				<input type="text" id="mname" name="mname" value="'.$q->stu_mother_name.'"/>
			</li>
			<li>
				<label for="addtext">Address</label>
				<textarea id="addtext" name="addtext">'.$q->stu_address.' </textarea>
			</li>
			<li>
				<label for="landphone">Lanline No</label>
				<input type="text" id="landphone" name="landphone" value="'.$q->stu_ph_res.'"/>
			</li>
			<li>
				<label for="officephone">Office No</label>
				<input type="text" id="officephone" name="officephone" value="'.$q->stu_ph_off.'"/>

			</li>
			<li>
			
				<label for="mobile">Mobile No</label>
				<input type="text" id="mobile" name="mobile" value="'.$q->stu_ph_mob.'"/>
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
