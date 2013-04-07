<html>
<head>
<title> </title>

	<script type="text/javascript" src="http://localhost/codeigniter/datepickercontrol.js"></script>
	


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
	<div class="title_bar">
		<div class="title_image">
		</div>
	</div>
	
	
	
	<div class="titleheader">
	
		<div class="dropdown">
			<a class="account" >
				<span>My Account</span>
			</a>
			<div class="submenu" style="display: none; ">

			  <ul class="root">
				<li >
				      <a href="#Dashboard" >Dashboard</a>
				</li>

	    
			        <li >
	      			      <a href="#Profile" >Profile</a>
	    			</li>
	   			<li >

	      				<a href="#settings">Settings</a>
	    			</li>
	   

	    			<li>
	    				  <a href="#feedback">Send Feedback</a>
	    			</li>



	    			<li>
	      				<a href="#signout">Sign Out</a>
	    			</li>
	  		</ul>
		</div>
	</div>
	</div>
