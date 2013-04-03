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
		echo anchor('/coordinator/remove_teacher/'.$q->scl_id,'Delete');
		echo '</td>';
		echo '</tr>';

		
		
	}
 echo '</table>';
?>
</div>
