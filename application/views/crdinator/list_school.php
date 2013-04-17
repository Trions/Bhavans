<html>
<head>
<title>School List </title>
<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
 if($query==0){echo '<h3> No School to display </h3>';}
 else{
 echo '<tittle>Schools</tittle>';
 echo '<table border=0 cellspacing=25>';
 echo '<tr>
 	<th>School ID</th>
 	<th>chool Name</th>
 	<th>School Phone</th>
 	<th>School Address</th>
 	<th>Option</th>
 	</tr>';
 foreach ($query as $q)
 	{
		//echo '<h1>' .$q->scl_id. '</h1>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>' .$q->scl_id. '</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h3>' .$q->scl_name. '</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h3>' .$q->scl_ph. '</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h3>' .$q->scl_add. '</h3>';
		echo '</td>';
		echo '<td>';
		echo anchor('/coordinator/edit_school/'.$q->scl_id,'Update Information');
		echo '</td>';
		echo '<td>';
		//echo '<a href="remove_school/'.$q->scl_id.'">Delete</a>';
		//echo '<a href="remove_school/'.$q->scl_id.'" onclick="returm confirm("Sure?");">Delete</a>';
		echo anchor('/coordinator/remove_school/'.$q->scl_id,'Delete',array('onClick' => "return confirm('Delete Record?')"));
		echo '</td>';
		echo '</tr>';

		
		
	}
 echo '</table>';
 	}


 /*
 echo date('Y/m/d H:i:s');
 echo " ";
 //echo date_default_timezone_set('');
  echo date_default_timezone_get();
   echo " ";
   echo date('Y/m/d H:i:s');
   $this->load->library('table');

/*$data = array(
             array('Name', 'Color', 'Size'),
             array('Fred', 'Blue', 'Small'),
             array('Mary', 'Red', 'Large'),
             array('John', 'Green', 'Medium')
             );


$tmpl = array ( 'table_open'  => '<table border="1" cellpadding="2" cellspacing="1" class="mytable">' );

$this->table->set_template($tmpl); 
echo $this->table->generate($query); 
echo $this->session->userdata('session_id');
*/
 
?>
</div>
