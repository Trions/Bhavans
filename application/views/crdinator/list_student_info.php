<html>
<head>
<title>Student Information </title>
<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
if($query==0){echo '<h3> No Student Information to display </h3>';}
 else{
echo '<table>';	

	


foreach ($query as $q)
 	{
		//echo '<h4>' .$q->scl_id. '</h4>';
		echo 'STUDDENT DETAILS';		
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Name 		:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_name. '</43>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>School 		:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->scl_name. '</43>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Grade 		:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_grade. '</43>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>DOB 		:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_dob. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Gender 	:</h3>';
		echo '</td>';
		echo '<td>';
		if($q->stu_gender==1){echo '<h4>Male </h4>';}
		else if($q->stu_gender==0){echo '<h4>Female</h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Name of Fatrher	:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_father_name. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Name of Mother	:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_mother_name. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Phone res	:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_ph_res. '</h4>';
		echo '</td>';
	
		echo '<tr>';
		echo '<td>';
		echo '<h3>Phone Office	:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_ph_off. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Mobile	:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_ph_mob. '</h4>';
		echo '</td>';
		
		
		
		
			

		
		
	



	//echo "Value: $value<br />\n"

	
  	//echo "Subject id: $row->subject_id <br /> \n" ;
   
	//echo "Subject Name: $row->subject_name <br/> \n";
  
	//echo "Subject total: $row->subject_totalmark <br />\n";




	//echo "Value: $value<br />\n"

	
  	//echo "Subject id: $row->subject_id <br /> \n" ;
   
	//echo "Subject Name: $row->subject_name <br/> \n";
  
	//echo "Subject total: $row->subject_totalmark <br />\n";
}}

echo "</table>";
?>
















