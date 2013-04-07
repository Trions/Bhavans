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
		<?php echo validation_errors(); ?>
	</div>
	
	
	<form class="form-1" method="post" action="<?php echo base_url()?>login/usr_lgin">
		<?php echo validation_errors(); ?>

					<p class="field">
						<input type="text" name="name" placeholder="Username or email">
						<i class="icon-user icon-large"></i>
					</p>
						<p class="field">
							<input type="password" name="password" placeholder="Password">
							<i class="icon-lock icon-large"></i>
					</p>
					<p class="submit">
						<button type="submit" name="submit"><i class="icon-arrow-right icon-large"></i></button>
					</p>
				</form>
	

 </body>
 </html>
