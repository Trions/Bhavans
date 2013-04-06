<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>
	<div class="main_content">
	<div class="s_main_content">
	<form name="add_student" id="add_student" method="post" action="<?php echo base_url()?>teacher/register_referral">
		<fieldset>
		<ul>
			<li>
				<label for="name">Student Name</label>
				<input type="text" id="name" name="name"/>
			</li>
		
			<li>
				<label for="grade">Grade</label>
				<input type="text" id="grade" name="grade"/>
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
				<textarea id="referrig_reason" name="referrig_reason"> </textarea>
			</li>
			
				<label>               BEHAVIOUR                </label>
			
			<br>
			
			<li>
				<label> Follows School and Classroom Rules</label>
				<div class="sub_content">	
				<input type="radio" id="yes" value="1" name="fscr"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="fscr"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			
			<li>
				<label> Follows Directions</label>
				<div class="sub_content">
				<input type="radio" id="yes" value="1" name="fd"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="fd"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Comes Prepared for Class</label>				
				<div class="sub_content">
				<input type="radio" id="yes" value="1" name="cpc"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="cpc"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Listens Attentively</label>
				<div class="sub_content">			
				<input type="radio" id="yes" value="1" name="la"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="la"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Participates in Class Activities</label>	
				<div class="sub_content">			
				<input type="radio" id="yes" value="1" name="pca"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="pca"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Works Without Disturbing Others</label>				
				<div class="sub_content">
				<input type="radio" id="yes" value="1" name="wwdo"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="wwdo"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Completes Work in Assigned Time</label>	
				<div class="sub_content">			
				<input type="radio" id="yes" value="1" name="cwat"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="cwat"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Completes Homework Assignments</label>				
				<div class="sub_content">
				<input type="radio" id="yes" value="1" name="cha"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="cha"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Shows Effort to do Best Work</label>				
				<div class="sub_content">
				<input type="radio" id="yes" value="1" name="sebw"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="sebw"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Works Cooperatively With Others</label>				
				<div class="sub_content">
				<input type="radio" id="yes" value="1" name="wco"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="wco"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Takes Care of Personal Property</label>	
				<div class="sub_content">			
				<input type="radio" id="yes" value="1" name="tcpp"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="tcpp"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Takes Care of School Property</label>				
				<div class="sub_content">
				<input type="radio" id="yes" value="1" name="tcsp"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="tcsp"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Respect Others and is Courteous</label>	
				<div class="sub_content">			
				<input type="radio" id="yes" value="1" name="roc"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="roc"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Practices Self Control</label>	
				<div class="sub_content">			
				<input type="radio" id="yes" value="1" name="psc"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="psc"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Respects Authority</label>	
				<div class="sub_content">			
				<input type="radio" id="yes" value="1" name="ra"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="ra"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Behaves Appropriately in Play Ground</label>
				<div class="sub_content">
				<input type="radio" id="yes" value="1" name="bapg"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="bapg"  />
				<label for="no">No</label>
				</div>
				
			</li>
			
			
			<li>
				<label> Behaves Appropriately in Co-Curricular Activity Room</label>
				<div class="sub_content">				
				<input type="radio" id="yes" value="1" name="baccar"/>
				<label for="yes">Yes</label>
				<input type="radio" id="no" value="2" name="baccar"  />
				<label for="no">No</label>
				</div>
				
			</li><br>			
			
			<li>
				<label for="remarks">Remarks</label>
				<span style="font-size:15">   </span>
				<textarea id="remarks" name="remarks"> </textarea>
			</li>
			
			<li>
				<label for="academic">Academic</label>
				<span style="font-size:15">   </span>
				<textarea id="academic" name="academic"> </textarea>
			</li>
			<li>
				<label for="student_strength">Student's Strengths</label>
				<span style="font-size:15">   </span>
				<textarea id="student_strength" name="student_strength"> </textarea>
			</li>
			<li>
				<label for="view_about_parent">View on Student's Parnets</label>
				<span style="font-size:15">   </span>
				<textarea id="view_about_parent" name="view_about_parent"> </textarea>
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
