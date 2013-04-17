<html>
<head>
<title> Daily Report</title>
<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
if($query1==0){echo '<h3> No Daily Report Found</h3>';}
 else if ($query2==0){echo '<h3> No Daily Report Found </h3>';}
else
{
 echo '<table>';


	foreach ($query2 as $q)
 	{


		echo '<tr>';
		echo '<td>';
		echo '<h3>Student Name :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_name. '</h4>';
		echo '</td>';
		}
 foreach ($query1 as $q)
 	{
		//echo '<h4>' .$q->scl_id. '</h4>';
		
		
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Date:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->date. '</h4>';
		echo '</td>';
		
		//echo '<tr>';
		//echo '<td>';
		//echo '<h3>Clas :</h3>';
		//echo '</td>';
		//echo '<td>';
		//echo '<h4>' .$q->clas. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Comments:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->report. '</h4>';
		echo '</td>';
		
			

		
		}
	}
 echo '</table>';
?>
</div>
