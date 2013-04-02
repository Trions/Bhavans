<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php

 echo '<table>';
 foreach ($query as $q)
 	{
		//echo '<h4>' .$q->scl_id. '</h4>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Student Name :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->student_name. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Grade :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->grade. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>School :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->school. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Referred Teacher ID :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->teacher_id. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Reason For Referring :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->reason_for_referring. '</h4>';
		echo '</td>';
		
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Follows School and Classroom Rules :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->fscr==1){echo '<h4>yes </h4>';}
		else if($q->fscr==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Follows Directions :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->fd==1){echo '<h4>yes </h4>';}
		else if($q->fd==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Comes Prepared for Class :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->cpc==1){echo '<h4>yes </h4>';}
		else if($q->cpc==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Listens Attentively :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->la==1){echo '<h4>yes </h4>';}
		else if($q->la==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Participates in Class Activities :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->pca==1){echo '<h4>yes </h4>';}
		else if($q->pca==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Works Without Disturbing Others :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->wwdo==1){echo '<h4>yes </h4>';}
		else if($q->wwdo==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Completes Work in Assigned Time :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->cwat==1){echo '<h4>yes </h4>';}
		else if($q->cwat==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Completes Homework Assignments :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->cha==1){echo '<h4>yes </h4>';}
		else if($q->cha==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Shows Effort to do Best Work :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->sebw==1){echo '<h4>yes </h4>';}
		else if($q->sebw==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Works Cooperatively With Others :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->wco==1){echo '<h4>yes </h4>';}
		else if($q->wco==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Takes Care of Personal Property :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->tcpp==1){echo '<h4>yes </h4>';}
		else if($q->tcpp==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Takes Care of School Property :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->tcsp==1){echo '<h4>yes </h4>';}
		else if($q->tcsp==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Respect Others and is Courteous :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->roc==1){echo '<h4>yes </h4>';}
		else if($q->roc==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Practices Self Control :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->psc==1){echo '<h4>yes </h4>';}
		else if($q->psc==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Respects Authority :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->ra==1){echo '<h4>yes </h4>';}
		else if($q->ra==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Behaves Appropriately in Play Ground :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->bapg==1){echo '<h4>yes </h4>';}
		else if($q->bapg==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Behaves Appropriately in Co-Curricular Activity Room :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->baccar==1){echo '<h4>yes </h4>';}
		else if($q->baccar==2){echo '<h4>no </h4>';}
		else{echo '<h4>not mentioned</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Remarks :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->remarks=='0' || $q->remarks==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->remarks. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Academic :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->academic=='0' || $q->academic==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->academic. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Student Stringths :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->student_strengths=='0' || $q->student_strengths==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->student_strengths. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>About Parents :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->view_about_parents=='0' || $q->view_about_parents==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->view_about_parents. '</h4>';}
		echo '</td>';
		
			

		
		
	}
 echo '</table>';
?>
</div>
