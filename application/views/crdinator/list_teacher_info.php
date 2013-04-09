<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php




	echo "TEACHER DETAILS <br />\n <br />\n <br />\n";

echo "<table border=\"1\" align=\"left\">";

	echo "<tr><th>ID</th>";
	echo "<th>First Name</th>";
	echo "<th>Last Name</th>";
	
	echo "<th>Gender</th>";
	echo "<th>DOB</th>";	
	echo "<th>Address</th>";
	echo "<th>Nationality</th>";
	echo "<th>Photo</th>";
	echo "<th>Phone</th>";
	
	echo "<th>Email</th> </tr>";

	
	foreach($query as $row)
	{
	
	echo "<tr><td>";
	echo $row->teacher_id;
	echo "</td><td>";
	echo $row->teacher_first_name;
	echo "</td><td>";
	echo $row->teacher_last_name;
	echo "</td><td>";
	echo $row->teacher_gender;
	echo "</td><td>";
	echo $row->teacher_dob;
	echo "</td><td>";
	echo $row->teacher_address;
	echo "</td><td>";
	echo $row->teacher_nationality;
	echo "</td><td>";
	echo $row->teacher_photo;
	echo "</td><td>";
	echo $row->teacher_phone;
	echo "</td><td>";
	echo $row->teacher_email;
	echo "</td></tr>";



	//echo "Value: $value<br />\n"

	
  	//echo "Subject id: $row->subject_id <br /> \n" ;
   
	//echo "Subject Name: $row->subject_name <br/> \n";
  
	//echo "Subject total: $row->subject_totalmark <br />\n";
}

echo "</table>";
?>
















