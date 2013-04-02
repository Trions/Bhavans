<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
	<div class="main_content">

		<form name="teacher_reg" id="teacher_reg"method="post" action="<?php echo base_url();?>coordinator/register_teacher">
		<fieldset>
			
<ul>
<li>		
				
			<label for="fname">First Name</label>
			<input type="text" id="fname" name="fname"/>
</li>
<li>			
			<label for="lname">Last Name</label>
			<input type="text" id="lname" name="lname"/>
</li>
<li>
				<label> Gender</label>
				
				<input type="radio" id="gender_male" value="1" name="gender"/>
				<label for="gender_male">Male</label>
				
			
			 
			   <input type="radio" id="gender_female" value="0" name="gender"  />
				<label for="gender_female">Female</label>
				
</li><br>

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
			<input type="submit" id="submit" name="submit" value="Submit"/>
			<input type="reset" id="reset" name="reset" value="Reset"/>
		
</li>
</ul>			

		</fieldset>		
	</div>
</div>
