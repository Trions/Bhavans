<html>
<head>
<title> Referred Students List</title>
<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
if($query==0){echo '<h3> No Students Referred </h3>';}
 else{
 echo '<tittle>Referred Students</tittle>';
 echo '<table border=0 cellspacing=25>';
 echo '<tr>
 	<th><h3>Student Name</h3></th>
 	<th><h3>View</h3></th>
 	<th><h3>Option</h3></th>
 	</tr>';
 foreach ($query as $q)
 	{
		//echo '<h1>' .$q->scl_id. '</h1>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h4>';
		echo anchor('/coordinator/ref_student_details/'.$q->sl_no,$q->student_name);
		echo '</h4>';
		echo '</td>';
		
		echo '<td>';
		echo '<h5>';
		echo anchor('/coordinator/ref_student_report/'.$q->sl_no,'Class Teacher Report');
		echo '</h5>';
		echo '</td>';
		echo '<td><h5>';	
		echo anchor('/coordinator/remove_ref_student/'.$q->sl_no,'Delete',array('onClick' => "return confirm('Delete Record?')"));
		//echo '</h1>';
		echo '</h5></td>';
		echo '</tr>';
		
		

		
		
	}
 echo '</table>';
 }
?>
</div>
