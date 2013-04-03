<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
	echo "SUBJECT DETAILS <br />\n <br />\n <br />\n";

echo "<table border=\"0\" align=\"left\">";

	echo "<tr><th>ID</th>";
	echo "<th>Name</th>";
	echo "<th>Mark</th></tr>";
foreach($query as $row)
{
	
	echo "<tr><td>";
	echo $row->subject_id;
	echo "</td><td>";
	echo $row->subject_name;
	echo "</td><td>";
	echo $row->subject_totalmark;
	echo "</td></tr>";



	//echo "Value: $value<br />\n"

	
  	//echo "Subject id: $row->subject_id <br /> \n" ;
   
	//echo "Subject Name: $row->subject_name <br/> \n";
  
	//echo "Subject total: $row->subject_totalmark <br />\n";
}

echo "</table>";
?>
















