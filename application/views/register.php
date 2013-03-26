<!-- HEADER : --> <?php /*include "header.php";*/ ?>

<?php
  
  $url_link = base_url() . "_include/";
  
  
  
?>
<!-- MAIN START -->
<div class="wrap" id="wrap-main">
	<div class="spacer">
		<div class="main">
			<!-- CONTENT FLOATLEFT START -->
			<div class="content floatleft">
				<!-- ORBIT START -->
				<div id="wrap-splash"><div id="splashbg"><div id="splash">
      				<div id="slider" style='height:300px'>
						<img src="<?php echo $url_link."images/slide.jpg";?>" />
						<img src="<?php echo $url_link."images/slide.jpg";?>" />
						<img src="<?php echo $url_link."images/slide.jpg";?>" />
						<img src="<?php echo $url_link."images/slide.jpg";?>" />
					</div>
				</div></div></div>
				<!-- ORBIT STOP -->
				<!-- RECENT NEWS START -->
				<div class='contentbox'>
					<h2>Registrasi</h2>
					<form method="post" action="1"><div class='input_group'>
						<h4>Data Diri</h4>
						<div class='label'><h5>Nama Lengkap</h5></div>
						<input widthset="longer" name="Name" title="Nama Lengkap" role=required/><br/>
						<div class='label'><h5>NIM TPB</h5></div>
						<input widthset="shorter" name="NIM TPB" title="NIM TPB" role=required/><br/>
						<div class='label'><h5>NIM Jurusan</h5></div>
						<select><?php include "list-jurusan.php" ?></select>*optional<br/>
						<div class='label'><h5>Fakultas</h5></div>
						<select><?php include "list-fakultas.php" ?></select><br/>
						<div class='label'><h5>Program Studi</h5></div>
						<input widthset="shorter" name="NIM Jurusan" title="NIM JURUSAN"/><br/>
						<h4>Password</h4>
						<div class='label'><h5>Password</h5></div>
						<input type="password" name="NIM TPB" title="NIM TPB"/><br/>
						<div class='label'><h5>Re-Type Password</h5></div>
						<input type="password" name="NIM Jurusan" title="NIM JURUSAN"/><br/>
					</div>
					<button type="submit" class="radius button">Register</button></form>
				</div><!-- RECENT NEWS STOP -->
				<div class="clearboth"></div>
					<div class="contentwidget">
						<ul>
							<li class="widget"></li>
						</ul>
					</div>
			</div> <!-- CONTENT FLOATLEFT STOP -->
		</div> <!-- LEFT MAIN STOP -->
		<hr>
		<?php include "sidebar.php" ?>
	</div>
	<div class="clearboth"></div>
	<div class="clearboth"></div>
</div>
<!-- FOOTER : --> <?php /*include "footer.php"*/?>