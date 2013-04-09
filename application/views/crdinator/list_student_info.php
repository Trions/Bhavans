<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php


	echo "STUDENTS DETAILS <br />\n <br />\n <br />\n";

echo "<table border=\"1\" align=\"left\">";

	echo "<tr><th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Grade</th>";
	echo "<th>DOB</th>";
	echo "<th>Gender</th>";
	echo "<th>Father's Name</th>";
	echo "<th>Mother's Name</th>";
	echo "<th>Address</th>";
	echo "<th>Phone Res</th>";
	echo "<th>Phone Office</th>";
	echo "<th>Mobile</th> </tr>";

	
	foreach($query as $row)
	{
	
	echo "<tr><td>";
	echo $row->stu_id;
	echo "</td><td>";
	echo $row->stu_name;
	echo "</td><td>";
	echo $row->stu_grade;
	echo "</td><td>";
	echo $row->stu_dob;
	echo "</td><td>";
	echo $row->stu_gender;
	echo "</td><td>";
	echo $row->stu_father_name;
	echo "</td><td>";
	echo $row->stu_mother_name;
	echo "</td><td>";
	echo $row->stu_address;
	echo "</td><td>";
	echo $row->stu_ph_res;
	echo "</td><td>";
	echo $row->stu_ph_off;
	echo "</td><td>";
	echo $row->stu_ph_mob;	

	echo "</td></tr>";



	//echo "Value: $value<br />\n"

	
  	//echo "Subject id: $row->subject_id <br /> \n" ;
   
	//echo "Subject Name: $row->subject_name <br/> \n";
  
	//echo "Subject total: $row->subject_totalmark <br />\n";
}

echo "</table>";
?>
















