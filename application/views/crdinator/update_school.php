<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
	<div class="main_content">
		<?php
		foreach ($query as $q){
		echo '<form name="update_student" id="update_student" method="post" action="'.base_url().'coordinator/update_school/'.$q->scl_id.'" >';
		echo '<fieldset>
		
		<ul>
			<li>
				<label for="id">School Id</label>
				<label>'.$q->scl_id.'</label>
			</li>
			
			<li>
				<label for="name">School Name</label>
				<input type="text" id="name" name="school_name" value="'.$q->scl_name.'"/>
			</li>
		
			<li>
				<label for="phone">School Phone</label>
				<input type="text" id="phone" name="phone" value="'.$q->scl_ph.'"/>
			</li>
			<li>
			
				<label for="add">Address</label>
				<textarea id="add" name="add">'.$q->scl_add.' </textarea>
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
