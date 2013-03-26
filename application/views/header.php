<!DOCTYPE html>
<?php
  
  $url_link = base_url() . "_include/";
  
  
  
?>
<!--[gt IE 8]><!--><html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Welcome to Foundation | Homepage</title>
  
  <link rel="shortcut icon" href=<?php echo $url_link."images/favicon.ico";?> type="image/x-icon">
  <!-- Included JavaScript Files -->

  <script src=<?php echo $url_link."javascripts/jquery-1.9.1.min.js";?>></script>
  <script src=<?php echo $url_link."javascripts/foundation.min.js";?>></script>
  <script src=<?php echo $url_link."javascripts/jquery-ui.min.js";?>></script>
  <script src=<?php echo $url_link."javascripts/modernizr.foundation.js";?>></script>
		<!-- StyleSheet -->    
		<link rel="stylesheet" type="text/css" media="all" href=<?php echo $url_link."stylesheets/wordpress.css";?>>
		<link rel="stylesheet" type="text/css" href=<?php echo $url_link."stylesheets/style.css"; ?>>
		<link rel="stylesheet" type="text/css" href=<?php echo $url_link."stylesheets/foundation.css";?>>	
		<link rel="stylesheet" type="text/css" href=<?php echo $url_link."stylesheets/jquery-ui.css";?>>
	<script>
		$(function() {
			$( "#datepick" ).datepicker({changeMonth: true,	changeYear: true, yearRange:"1980:2000",});
			$( "#datepick2" ).datepicker({changeMonth: true, changeYear: true, yearRange:"1980:2000",});
			$( "#datepick3" ).datepicker({changeMonth: true, changeYear: true, yearRange:"1980:2000",});})
		$(window).load(function() { $('#slider').orbit();});
		$("#selector").change(function () {
			if($(this).val() == "dummy") $(this).addClass("empty");
				else $(this).removeClass("empty")
			});
		$("#selector").change();
	</script>
	<script type="text/javascript" src=<?php echo $url_link."javascripts/jquery.validate.js";?>></script>
	<script type="text/javascript">
		jQuery.validator.setDefaults({debug: true,success: "valid"});;
		$(document).ready(function(){
    		$(["[role=required]"]).validate({
  			rules: { field: "required" }
			});
		});
	</script>
</head>
<!-- THE BODYYYY... -->
<body id='home'>
	<!-- START MAIN MENU -->
	<input type="text" id="datepicker">
	<div class="wrap" id="wrap-top">
		<div class="spacer">
			<div id="top">
				<div id="topleft" class="floatleft">
					<div id="myslidemenu" class="mn5">
						<ul>
							<li><a href="" class="lambsmall">Home</a></li>
							<li><a href="">Tentang Kami</a></li>
							<li><a href="">Pelayanan Mahasiswa</a></li>
							<li><a href="">Beasiswa</a></li>
							<li><a href="">Career Center</a></li>
							<li><a href="">Downloads</a></li>
						</ul>
					</div>
				</div>
				<div id="topright" class="floatright">
					<a href="http://petakampus.itb.ac.id/">Peta Kampus</a>
				</div>
				<div class="clearboth"></div>
			</div>
		</div>
	</div>
	<div class="clearboth"></div>
	<!-- END MAIN MENU -->
	<!-- HEADER START -->
	<div class="wrap" id="wrap-header">
		<div class="spacer">
			<div id="header">
				<div id="headerimg" class="floatleft"></div>
				<div id="headertop" class="floatleft">
					<h1><a href="http://www.kemahasiswaan.itb.ac.id" title="ComLabs-USDI | Institut Teknologi Bandung" rel="home">Lembaga Kemahasiswaan</a></h1>
					<div id="description">Institut Teknologi Bandung</div>
				</div>
				<div id="headersearch" class="floatright">		
					<form method="get" id="searchform" action="http://www.comlabs.itb.ac.id/">
						<div>
							<h3>Search</h3>
							<input type="text" value="" name="s" id="s">
						</div>
					</form>
				</div>
				<div class="clearboth"></div>
			</div>
		</div>
	</div>
	<!-- HEADER STOP -->
		<hr>