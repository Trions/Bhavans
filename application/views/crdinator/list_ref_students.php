<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
 echo '<table border=1>';
 foreach ($query as $q)
 	{
		//echo '<h1>' .$q->scl_id. '</h1>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h1>';
		echo anchor('/coordinator/ref_student_details/'.$q->student_name,$q->student_name);
		echo '</h1>';
		echo '</td>';
		
		

		
		
	}
 echo '</table>';
?>
</div>
