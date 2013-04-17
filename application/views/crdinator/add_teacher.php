<html>
<head>
<title>Add Teacher </title>
<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
	<div class="main_content">
	<form name="teacher_reg" id="teacher_reg" method="post" action="<?php echo base_url();?>coordinator/register_teacher">
	
		<fieldset>
			
<ul>
<li>		
				
			<label for="fname">Name</label>
			<input type="text" id="fname" name="fname"value="<?php echo set_value('fname');?>"/>
			<?php echo form_error('fname', '<div class="error">', '</div>'); ?>
</li>

<li>
				<label> Gender</label>
				
				<input type="radio" id="gender_male" value="1" name="gender"/>
				<label for="gender_male">Male</label>
				
			
			 
			   <input type="radio" id="gender_female" value="0" name="gender"  />
				<label for="gender_female">Female</label>
				<?php echo form_error('gender', '<div class="error">', '</div>'); ?>
				
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

<li>
			<label for="dob"> Date of Birth</label>
			
	<select id="l1" name="l1">
	<?php	
	for($j=1;$j<=31;$j++)
	{
      echo "<option>$j</option>";
      
     }
	
     ?>
    </select>
      <select id="l2" name="l2">
	  <?php	
	   for($k=1;$k<=12;$k++)
	    {
           echo "<option>$k</option>";
      
         }
		 
       ?>
            </select>
      <select id="l3" name="l3">
	  <?php
			for($i=2013;$i>=1950;$i--)
			{
				echo "<option>$i</option>";
			}
			
	  ?>        
      </select>
  </li>

<li>			

			<label for="address">Address</label>
			<textarea id="address" name="address"><?php echo set_value('address');?> </textarea>
			<?php echo form_error('address', '<div class="error">', '</div>'); ?>
</li>
<li>
			<label for="nat">Nationality</label>
			<input type="text" id="nationality" name="nationality" value="<?php echo set_value('nationality');?>"/>
</li>

<li>			
			
	
			<label for="phone">Phone</label>
			<input type="text" id="phone" name="phone" value="<?php echo set_value('phone');?>"/>
			<?php echo form_error('phone', '<div class="error">', '</div>'); ?>
</li>
<li>
			<label for="email">Email</label>
			<input type="text" id="email" name="email" value="<?php echo set_value('email');?>"/>
			<?php echo form_error('email', '<div class="error">', '</div>'); ?>
</li>
<li>			
			<input type="submit" id="submit" name="submit" value="Submit" />
			<input type="reset" id="reset" name="reset" value="Reset"/>
		
</li>
</ul>			

		</fieldset>		
	
</div>
