<?php $this->load->view('teacher/teacher_header.php');?>
<?php $this->load->view('teacher/teacher_sidebar.php');?>
		<div class="main_content">

		<?php
		if($query)
		{
			foreach($query as $q) 
			{
				echo "<div class=\"message_container\">";
					echo"<div class=\"sender_name\">";
					echo"<span>";
						echo"From :   ";
						echo $q->name;
					        echo"<br>";
						echo " Date :"; 
						echo $q->m_date;
					echo"</span>";
					echo"</div>";
					
					echo"<div class=\"message_content\">";
						echo $q->message_content;
					echo "</div>";
				echo"</div>";
				
			}
		}
		else
		{
		
			echo "No messages to Display";	
		}


		?>
		</div>
	</div>

