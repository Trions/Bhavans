<?php $this->load->view('includes/Header.php');?>
<?php $this->load->view('crdinator/Header.php');?>
	<div class="main_content">
	<form name="add_student" id="add_student" method="post" action="<?php echo base_url()?>coordinator/register_student">
		<fieldset>
			<ul>
				<li>
					<label for="name">Name</label>
					<input type="text" id="name" name="name"/>
				</li>
			<label for="rollno">Roll No</label>
			<input type="text" id="rollno" name="rollno"/>
		
			<label for="grade"> Grade</label>
			<input type="text" id="grade" name="grade"/>
			
			<label for="dob"> Date of Birth</label>
			<input type="text" id="dob" name="dob"/>
			
			<label> Gender</label>
			<span>
			<label for="gender_male">Male</label>
			<input type="radio" id="gender_male" value="male" name="gender"/>
			
			<label for="gender_female">Female</label>
			<input type="radio" id="gender_female" value="female" name="gender"  />
			</span>
			<label for="fname">Father's Name</label>
			<input type="text" id="fname" name="fname"/>
		
			<label for="mname">Mother's Name</label>
			<input type="text" id="mname" name="mname"/>
		
			<label for="addtext">Address</label>
			<textarea id="addtext" name="addtext"> </textarea>
		
			<label for="landphone">Lanline No</label>
			<input type="text" id="landphone" name="landphone"/>
		
			<label for="officephone">Office No</label>
			<input type="text" id="officephone" name="officephone"/>

	
			<label for="mobile">Mobile No</label>
			<input type="text" id="mobile" name="mobile"/>
		
			<button type="submit" value="Submit">Submit</button>
  			<button type="reset" value="Reset">Reset</button>

		</fieldset>		
	</form>
	</div>
</div>
