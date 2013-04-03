<html>
<<<<<<< HEAD
<link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/style.css" />
<div class="container">

=======
<head>
<title> </title>
<script type="text/javascript" src="http://localhost/codeigniter/jquery-1.9.1.js"></script>
<script type="text/javascript" >
$(document).ready(function()
{
$(".account").click(function()
{
var X=$(this).attr('id');

if(X==1)
{
$(".submenu").hide();
$(this).attr('id', '0');	
}
else
{

$(".submenu").show();
$(this).attr('id', '1');
}
	
});

//Mouseup textarea false
$(".submenu").mouseup(function()
{
return false
});
$(".account").mouseup(function()
{
return false
});


//Textarea without editing.
$(document).mouseup(function()
{
$(".submenu").hide();
$(".account").attr('id', '');
});
	
});
	
	</script>
<link rel="stylesheet" type="text/css" href="http://localhost/codeigniter/style.css" />

</head>
<body>
<div class="container">
>>>>>>> 2238fc50ea49f20582d036f8f78a0f464215b038
	<div class="title_bar">
				Athena
				<br>
	</div>
