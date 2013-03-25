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
		echo '<h1>' .$q->student_name. '</h1>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h1>' .$q->class. '</h1>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h1>' .$q->school. '</h1>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h1>' .$q->teacher_id. '</h1>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h1>' .$q->reason_for_referring. '</h1>';
		echo '</td>';
		
		
		echo '<tr>';
		echo '<td>';
		if($q->fscr==1){echo '<h1>yes </h1>';}
		else if($q->fscr==2){echo '<h1>no </h1>';}
		else{echo '<h1>not mentioned</h1>';}
		echo '</td>';
		
		
			

		
		
	}
 echo '</table>';
?>
</div>
