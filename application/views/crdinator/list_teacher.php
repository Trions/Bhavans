<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
 echo '<table border=0>';
 foreach ($query as $q)
 	{
		//echo '<h1>' .$q->scl_id. '</h1>';
		
		echo '<tr>';
		echo '<td>';
		//echo '<h1>';
		echo anchor('/coordinator/list_teacher_info/'.$q->teacher_first_name,$q->teacher_first_name);
		echo '</td>';
		echo '<td>';	
		echo anchor('/coordinator/remove_teacher/'.$q->teacher_first_name,'Delete');		
		//echo '</h1>';
		echo '</td>';
		
		

		
		
	}
 echo '</table>';
?>
</div>