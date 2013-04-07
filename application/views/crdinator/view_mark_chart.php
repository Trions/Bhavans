<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Highcharts lib examples</title>
	
	<script type="text/javascript" src="http://localhost/codeigniter/jsapi"></script>
	<script type="text/javascript">
		google.load("jquery", "1.4.4");
	</script>
	<script type="text/javascript" src="http://localhost/codeigniter/highcharts.js"></script>
</head>
<body>
	
	<?php $this->load->view('crdinator/coordinator_header.php');?>
	<?php $this->load->view('crdinator/coordinator_sidebar.php');?>
	<div class="main_content">
	<!--<div id="g_render"  class="left">-->
		<?php
		if (isset($charts)) echo $charts;
	//echo '</div> ?>
	</div>
</body>
</html>'
