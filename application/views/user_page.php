<!-- HEADER : --> <?php include "header.php"; ?>

<!-- MAIN START -->
<div class="wrap" id="wrap-main">
	<div class="spacer">
		<div class="main">
			<!-- CONTENT FLOATLEFT START -->
			<div class="content floatleft">
				<!-- ORBIT START -->
      				<?php include "orbit.php"; ?>
				<!-- ORBIT STOP -->
				<!-- RECENT NEWS START -->
				<div class="tabs_container">
					<script>$('#box').load('state.php?q=1');</script>
					<div class="tab_spacer"></div>
					<div class="tab" onclick="$('.contentbox').load('getting_started.php')">Data Diri</div>
					<div class="tab" onclick="$('.contentbox').load('getting_started_2.php')">Data Ortu/Wali</div>
					<div class="tab" onclick="$('.contentbox').load('getting_started_3.php')">Data Keuangan</div>
					<div class="tab" onclick="$('.contentbox').load('getting_started_4.php')">Status Beasiswa</div>
				</div>
				<div class='contentbox'>
					<?php include "getting_started.php" ?>
				</div>
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
<!-- FOOTER : --> <?php include "footer.php"?>