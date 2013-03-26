<!DOCTYPE html>

<!--[gt IE 8]><!--><html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to Foundation | Homepage</title>
  
  <link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon">
  <!-- Included JavaScript Files -->
  <script src="javascripts/foundation.min.js"></script>
  <script src="javascripts/jquery-1.9.1.min.js"></script>
  <script src="javascripts/jquery-ui.min.js"></script>
  <script src="javascripts/modernizr.foundation.js"></script>
		<!-- StyleSheet -->    
		<link rel="stylesheet" href="./stylesheets/foundation.css">
		<link rel="stylesheet" type="text/css" media="all" href="./stylesheets/wordpress.css">
		<link rel="stylesheet" href="./stylesheets/style.css" type="text/css">
		<link rel="stylesheet" href="./stylesheets/jquery-ui.css" type="text/css">

</head>
<!-- THE BODYYYY... -->
<body>
	<div class='input_group'>
		<input type="text" >
<input type="text" id="datepicker">
</div>
	<script>
		$(function() {
			$( "#datepicker" ).datepicker({
				changeMonth: true,
				changeYear: true
			});
		});
	</script>
</body>
</html>