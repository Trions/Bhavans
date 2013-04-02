<?php $this->load->view('crdinator/coordinator_header.php');?>
<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
<div class="main_content">
<?php

 if($query==0){echo 'No Reports From The Class Teacher Yet';}
 else{
 echo '<table>';
 foreach ($query as $q)
 	{
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Student Name :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->new_stu_name. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Student Grade :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->new_stu_grade. '</h4>';
		echo '</td>';
				
		echo '<tr>';
		echo '<td>';
		echo '<h3>Teacher id :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->teach_id. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Teacher Subject :</h3>';
		echo '</td>';
		echo '<td>';
		echo '<h4>' .$q->teach_subject. '</h4>';
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>View About Student Parent :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->teach_view_o_stu_parnt=='0' || $q->teach_view_o_stu_parnt==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->teach_view_o_stu_parnt. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Additional Information :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->cmt_on_addi_info=='0' || $q->cmt_on_addi_info==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->cmt_on_addi_info. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Class Room Behaviour :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->cls_rm_beha=='0' || $q->cls_rm_beha==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->cls_rm_beha. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Peer Interaction :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->peer_inte=='0' || $q->peer_inte==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->peer_inte. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Class Participation :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->cls_parti=='0' || $q->cls_parti==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->cls_parti. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Ability to Follow Instructions :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->ablty_to_flw_inst=='0' || $q->ablty_to_flw_inst==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->ablty_to_flw_inst. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Attention and Concentration :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->attn_nd_concen=='0' || $q->attn_nd_concen==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->attn_nd_concen. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Academic Performance :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->acd_perfo=='0' || $q->acd_perfo==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->acd_perfo. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Strengths :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->strengths=='0' || $q->strengths==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->strengths. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Performance During Last Academic Year :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->perfo_lst_yr=='0' || $q->perfo_lst_yr==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->perfo_lst_yr. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Remarks :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->ny_rmrks=='0' || $q->ny_rmrks==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->ny_rmrks. '</h4>';}
		echo '</td>';
		
		echo '<tr>';
		echo '<td>';
		echo '<h3>Date :</h3>';
		echo '</td>';
		echo '<td>';
		if($q->date=='0' || $q->date==' '){echo '<h4>not mentioned</h4>';}
		else{echo '<h4>' .$q->date. '</h4>';}
		echo '</td>';
		
		
				
		
	}
      }
 echo '</table>';
?>
</div>
