<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
if($query==0){echo '<h3> No Teacher information to display </h3>';}
 else{
echo '<table>';


foreach ($query as $q)
 	{
		//echo '<h4>' .$q->scl_id. '</h4>';
		echo 'TEACHER DETAILS';		
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Name 		:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->teacher_first_name. '</43>';
		echo '</td>';
		
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Gender 	:</h3>';
		echo '</td>';
		echo '<td>';
		if($q->teacher_gender==1){echo '<h4>Male </h4>';}
		else if($q->teacher_gender==0){echo '<h4>Female</h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>DOB 		:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->teacher_dob. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Address 	:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->teacher_address. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Nationality 	:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->teacher_nationality. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Phone 	:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->teacher_phone. '</h4>';
		echo '</td>';
	
		echo '<tr>';
		echo '<td>';
		echo '<h3>Email 	:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->teacher_email. '</h4>';
		echo '</td>';
		
		
		
		
			

		
		
	



	//echo "Value: $value<br />\n"

	
  	//echo "Subject id: $row->subject_id <br /> \n" ;
   
	//echo "Subject Name: $row->subject_name <br/> \n";
  
	//echo "Subject total: $row->subject_totalmark <br />\n";
}}

echo "</table>";
?>
















