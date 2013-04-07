<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
if($query==0){echo '<h3> No Students to Display </h3>';}
 else{
 echo '<tittle>Students</tittle>';
 echo '<table border=0 cellspacing=25>';
 echo '<tr>
 	<th><h3>Student Name</h3></th>
 	<th><h3>View</h3></th>
 	<th><h3></h3></th>
 	<th><h3>option</h3></th>
 	</tr>';
 foreach ($query as $q)
 	{
		//echo '<h1>' .$q->scl_id. '</h1>';
		
		echo '<tr>';
		echo '<td><h4>';
		//echo '<h1>';
		echo anchor('/coordinator/list_student_info/'.$q->stu_name,$q->stu_name);
		echo '</h4></td>';
		
		echo '<td><h4>';
		echo anchor('/coordinator/view_marks_chart/'.$q->stu_id,'Chart');
		echo '</h4></td>';
		
		echo '<td><h4>';
		echo anchor('/coordinator/edit_student/'.$q->stu_id,'Update Information');
		echo '</h4></td>';
		echo '<td><h4>';	
		echo anchor('/coordinator/remove_student/'.$q->stu_name,'Delete');
		//echo '</h1>';
		echo '</h4></td>';
		echo '</tr>';
		
		

		
		
	}
 echo '</table>';
	}
?>
</div>
