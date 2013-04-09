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
		echo '<h4>' .$q->s_name. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>School:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->school. '</h4>';
		echo '</td>';
		
		//echo '<tr>';
		//echo '<td>';
		//echo '<h3>Clas :</h3>';
		//echo '</td>';
		//echo '<td>';
		//echo '<h4>' .$q->clas. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Information Provider:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->info_provider. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Mothers Name :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->m_name. '</h4>';
		echo '</td>';

		echo '<tr>';
		echo '<td>';
		echo '<h3>Age :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->m_age. '</h4>';
		//echo '<h4>' .$q>m_age. '</h4>';
		echo '</td>';

		echo '<tr>';
		echo '<td>';
		echo '<h3> Education :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->m_education. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3> Occupation :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->m_occupation. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Mobile :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->m_mobile. '</h4>';
		echo '</td>';



		echo '<tr>';
		echo '<td>';
		echo '<h3>Fathers Name :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->f_name. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Age :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->f_age. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3> Education :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->f_education. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3> Occupation :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->f_occupation. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Mobile :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->f_mobile. '</h4>';
		echo '</td>';



		echo '<tr>';
		echo '<td>';
		echo '<h3>Guardians Name :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->guardian. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Age :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->g_age. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3> Education :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->g_education. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3> Occupation :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->g_occupation. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Mobile :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->g_mobile. '</h4>';
		echo '</td>';
		

		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Martial Status of Parants:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->mstatus. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Mother Tounge :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->mtounge. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3> Presenting problem :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->present_problem. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3> Sensory and Communication :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->sensory_communication. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Social Behaviour :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->socialbehaviour. '</h4>';
		echo '</td>';


		echo '<tr>';
		echo '<td>';
		echo '<h3>When was the problem(s) noticed? :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->date_noticed. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Recived evaluation or treatment?:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->past_exp. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3> Is the student on medication now?  :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->present_exp. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3> Medical History :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->med_history. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Past School Info :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->school_info. '</h4>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Other Significant Info :</h3>';		
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->other_info. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		echo '<h3>Class Report:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->class_support. '</h4>';
		echo '</td>';
echo '<tr>';
		echo '<td>';
		echo '<h3>Daily Report :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->daily_report. '</h4>';
		echo '</td>';

		

		
		
	}
 echo '</table>';
?>
</div>
