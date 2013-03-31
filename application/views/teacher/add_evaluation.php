<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>

		<div class="main_content">
		<form name="add_evaluation" id="add_evaluation"method="post" action="<?php echo base_url();?>teacher/register_evaluation">
		<fieldset>
			
  
<ul>
<li>		
				
			
</li>
<li>			
			<label for="student_id">Name:</label>
			<input type="text" id="student_id" name="student_id"/>
</li>
<br>

<li>

			
			<label for="date"> Date:</label>
			<input type="text" id="date" name="date"/>
</li>
<br>
<li>
				<label> Reading:</label>
				
				<input type="radio" id="reading_poor" value="poor" name="reading"/>
				<label for="reading_poor">Poor</label>
				
			
			 
			        <input type="radio" id="reading_average" value="average" name="reading"/>
				<label for="reading_average">Average</label>

			        <input type="radio" id="reading_good" value="good" name="reading"/>
				<label for="reading_good">Good</label>


				

				
			</li>
<br>
<li>
</li>




<br>

<li>

				<label> Reading Comprehension:</label>
<br>
				
				<input type="radio" id="reading_comp_poor" value="poor" name="reading_comp"/>
				<label for="reading_comp_poor">Poor</label>
				
			
			 
			        <input type="radio" id="reading_comp_average" value="average" 					name="reading_comp"/>
				<label for="reading_comp">Average</label>

			        <input type="radio" id="reading_comp_good" value="good" name="reading_comp"/>
				<label for="reading_comp_good">Good</label>
	
			</li>
<br>
<li>
</li>

</li>

<br>
<li>
				<label> Spelling:</label>
				
				<input type="radio" id="spelling_poor" value="poor" name="spelling"/>
				<label for="spelling_poor">Poor</label>
				
			
			 
			        <input type="radio" id="spelling_average" value="average" name="spelling"/>
				<label for="spelling_average">Average</label>

			        <input type="radio" id="spelling_good" value="good" name="spelling"/>
				<label for="spelling_good">Good</label>

				

				
			</li>
<br> 	 		
<li>
</li>

</li>

<br>
<li>
				<label> Hand Writing:</label>
				
				<input type="radio" id="hand_writing_poor" value="poor" name="hand_writing"/>
				<label for="hand_writing_poor">Poor</label>
				
			
			 
			        <input type="radio" id="hand_writing_average" value="average" name="hand_writing"/>
				<label for="hand_writing_average">Average</label>

			        <input type="radio" id="hand_writing_good" value="good" name="hand_writing"/>
				<label for="hand_writing_good">Good</label>

				

				
			</li>
<br>
<li>
</li>

</li>
<br>
<li>
				<label> Written Expression:</label>
				
				<input type="radio" id="written_poor" value="poor" name="written_expression"/>
				<label for="written_poor">Poor</label>
				
			
			 
			        <input type="radio" id="written_average" value="average" name="written_expression"/>
				<label for="written_average">Average</label>

			        <input type="radio" id="written_good" value="good" name="written_expression"/>
				<label for="written_good">Good</label>

				

				
			</li>
<br>
<li>
</li>

</li>
<br>
<li>
				<label> Arithmetic:</label>
				
				<input type="radio" id="arithmetic_poor" value="poor" name="arithmetic"/>
				<label for="arithmetic_poor">Poor</label>
				
			
			 
			        <input type="radio" id="arithmetic_average" value="average" name="arithmetic"/>
				<label for="arithmetic_average">Average</label>

			        <input type="radio" id="arithmetic_good" value="good" name="arithmetic"/>
				<label for="arithmetic_good">Good</label>

				

				
			</li>
<br>
<li>
</li>



 	</li>
<br>
<li>
				<label> Subject Content:</label>
				
				<input type="radio" id="sub_poor" value="poor" name="subject_content"/>
				<label for="sub_poor">Poor</label>
				
			
			 
			        <input type="radio" id="sub_average" value="average" name="subject_content"/>
				<label for="sub_average">Average</label>

			        <input type="radio" id="sub_good" value="good" name="subject_content"/>
				<label for="sub_good">Good</label>

				

				
			</li>
<br>
<li>
</li>
<br>
<li>
	<label for="remarks">Remarks:</label>
	<textarea rows="4" cols="40" name="remarks" wrap="physical"></textarea>:<br />

</li>

	
			<input type="submit" id="submit" name="submit" value="Submit"/>
			<input type="reset" id="reset" name="reset" value="Reset"/>
		

</ul>			

		</fieldset>		
	</div>
</div>
