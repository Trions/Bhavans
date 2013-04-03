<?php
	$this->load->model('student');
<<<<<<< HEAD
	data=$this->school->student_list();
	foreach item in data loop
		<a href ="student/display_details()">item</a> 
	
=======
	$data=$this->school->student_list();
	foreach $item in $data loop
		<a href ="student/display_details()">$item</a> 
	
?>
>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
