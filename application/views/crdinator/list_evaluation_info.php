<html>
<head>
<title> Evaluvation Inforation</title>
<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php
if($query1==0){echo '<h3> No Evaluation Record Found</h3>';}
 else if ($query2==0){echo '<h3> No Evaluation Record Found </h3>';}
else
{
	
 echo '<table>';
 
 	
		//echo '<h4>' .$q->scl_id. '</h4>';
		foreach ($query2 as $q){
		echo '<tr>';
		echo '<td>';
		echo '<h3>Student Name :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->stu_name. '</h4>';
		echo '</td>';
		echo '<tr>';
		echo '<td>';
		}
		foreach ($query1 as $q){
		echo '<h3>Date :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->date. '</h4>';
		echo '</td>';
		
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Reading:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->reading. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		//echo '<h3>Reading:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->reading_det. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Reading comprehension :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->reading_compre. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		//echo '<h3>Reading:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->reading_compre_det. '</h4>';
		echo '</td>';

		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Spelling :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->spelling. '</h4>';
		echo '</td>';

		echo '<tr>';
		echo '<td>';
		//echo '<h3>Reading:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->spelling_det. '</h4>';
		echo '</td>';

		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Hand Writing :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->handwriting. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		//echo '<h3>Reading:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->handwriting_det. '</h4>';
		echo '</td>';		

		echo '<tr>';
		echo '<td>';
		echo '<h3>Written Expression:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->writen_exp. '</h4>';
		echo '</td>';

		echo '<tr>';
		echo '<td>';
		//echo '<h3>Reading:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->writen_exp_det. '</h4>';
		echo '</td>';

		echo '<tr>';
		echo '<td>';
		echo '<h3>Arithematic :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->arith_math. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		//echo '<h3>Reading:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->arith_math_det. '</h4>';
		echo '</td>';

		echo '<tr>';
		echo '<td>';
		echo '<h3>Subject Content :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->sub_content. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		//echo '<h3>Reading:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->sub_content_det. '</h4>';
		echo '</td>';		

		echo '<tr>';
		echo '<td>';
		echo '<h3>Reamarks :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->remarks. '</h4>';
		echo '</td>';

		/*echo '<tr>';
		echo '<td>';
		echo '<h3>Class Support:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->Clas_support. '</h4>';
		echo '</td>';

		/*echo '<tr>';
		echo '<td>';
		echo '<h3>Daily Report:</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->daily_report. '</h4>';
		echo '</td>';
		
		
</li>
*/
	}
}


	
 echo '</table>';
?>


</div>
