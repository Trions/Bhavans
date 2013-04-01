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
		echo '<h1>' .$q->scl_id. '</h1>';
		echo '</td>';
		echo '<td>';
		echo '<h1>' .$q->scl_name. '</h1>';
		echo '</td>';
		echo '<td>';
		
		//echo '<a href="remove_school/'.$q->scl_id.'">Delete</a>';
		//echo '<a href="remove_school/'.$q->scl_id.'" onclick="returm confirm("Sure?");">Delete</a>';
		echo anchor('/coordinator/remove_school/'.$q->scl_id,'Delete');
		echo '</td>';
		echo '</tr>';

		
		
	}
 echo '</table>'


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
