<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
	<div class="main_content">
	<form name="add_school" id="add_school" method="post" action="<?php echo base_url()?>coordinator/register_school">
		<fieldset>
		<ul>
		
			<li>
				<label for="name">School Name</label>
				<input type="text" id="name" name="school_name"/>
			</li>
		
			<li>
				<label for="phone">School Phone</label>
				<input type="text" id="phone" name="phone"/>
			</li>
			<li>
			
				<label for="add">Address</label>
				<textarea id="add" name="add"> </textarea>
			</li>
			<li>
			
			<button type="submit" value="Submit">Submit</button>
  			<button type="reset" value="Reset">Reset</button>
			</li>
			
			
		</fieldset>		
	</form>
	</div>
</div>
