<?php
	$this->load->model('student');
	$data=$this->school->student_list();
	foreach $item in $data loop
		<a href ="student/display_details()">$item</a> 
	
?>