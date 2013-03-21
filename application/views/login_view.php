<html>
<head>
<title> Login</title>
</head>
<body>

<form method="post" action="index.php/login/usr_lgin">
<table>
	<tr>
		<td> </td>
		<td>
			<label for="name">Name</label>
 			<input type="text" name="name" id="name" value=""/>
 		</td>
 <br/>
	<tr>
		<td></td>
		<td>
 
		<label for="password">Password</label>
		<input type="password" name="password" id="password" value=""/>
 		</td>
 	</tr>
 		<td></td>
 		<td>
 		
 			<input type="submit" value="Login"/>
 			
<?php echo validation_errors();?>
</form>
 </body>
 </html>
