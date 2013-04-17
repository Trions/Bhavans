<html>
<head>
<title>
 Login</title>
</head>
<link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/style.css" />

<body>
<div class="container">
	<div class="title_bar">
		<div class="title_image">
		</div>
		
	</div>
	
	
	<form class="form-1" method="post" action="<?php echo base_url()?>login/usr_lgin">
		

					<p class="field">
						<input type="text" name="name" value="<?php echo set_value('name');?>"placeholder="Username">
						<?php echo form_error('name', '<div class="error">', '</div>'); ?>
						
					</p>
						<p class="field">
							<input type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
						<?php echo form_error('password', '<div class="error">', '</div>'); ?>
							
					</p>
					<p class="submit">
						<button type="submit" name="submit"></button>
					</p>
				<div class="error">
				
				</div>
				</form>
				

 </body>
 </html>
