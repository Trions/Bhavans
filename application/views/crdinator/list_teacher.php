<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
 echo '<table border=0>';
 foreach ($query as $q)
 	{
		//echo '<h1>' .$q->scl_id. '</h1>';
		
		echo '<tr>';
		echo '<td><h4>';
		//echo '<h1>';
		echo anchor('/coordinator/list_teacher_info/'.$q->teacher_first_name,$q->teacher_first_name);
		echo '</h4></td>';
		echo '<td><h4>';	
		echo anchor('/coordinator/remove_teacher/'.$q->teacher_first_name,'Delete');		
		//echo '</h1>';
		echo '</h4></td>';
		echo '<td><h4>';
		echo anchor('/coordinator/edit_teacher/'.$q->teacher_id,'Update Information');
		echo '</h4></td>';
		
		echo '</tr>';
		
		

		
		
	}
 echo '</table>';
?>
</div>
