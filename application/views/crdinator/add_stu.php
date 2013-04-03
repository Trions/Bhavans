<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
	<div class="main_content">
	<form name="add_student" id="add_student" method="post" action="<?php echo base_url()?>coordinator/register_student">
		<fieldset>
		<ul>
			<li>
				<label for="name">Name</label>
				<input type="text" id="name" name="name"/>
			</li>
		
			<li>
				<label for="rollno">Roll No</label>
				<input type="text" id="rollno" name="rollno"/>
			</li>
			<li>
			
				<label for="grade"> Grade</label>
				<input type="text" id="grade" name="grade"/>
			</li>
			<li>
				<label for="dob"> Date of Birth</label>
				<input type="text" id="dob" name="dob"/>
			</li>
			
			<li>
				<label> Gender</label>				
				<input type="radio" id="gender_male" value="1" name="gender"/>
				<label for="gender_male">Male</label>
				<input type="radio" id="gender_female" value="0" name="gender"  />
				<label for="gender_female">Female</label>
				
			</li>
			
			<li>
				<label for="fname">Father's Name</label>
				<input type="text" id="fname" name="fname"/>
			</li>
			<li>
				<label for="mname">Mother's Name</label>
				<input type="text" id="mname" name="mname"/>
			</li>
			<li>
				<label for="addtext">Address</label>
				<textarea id="addtext" name="addtext"> </textarea>
			</li>
			<li>
				<label for="landphone">Lanline No</label>
				<input type="text" id="landphone" name="landphone"/>
			</li>
			<li>
				<label for="officephone">Office No</label>
				<input type="text" id="officephone" name="officephone"/>

			</li>
			<li>
			
				<label for="mobile">Mobile No</label>
				<input type="text" id="mobile" name="mobile"/>
			</li>
			<li>
			
			<button type="submit" value="Submit">Submit</button>
  			<button type="reset" value="Reset">Reset</button>
			</li>
			
			
		</fieldset>		
	</form>
	</div>
</div>
