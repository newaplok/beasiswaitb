						<div class='gs_diagram_line'></div>
						<div class='gs_diagram_state_box'>
<?php
	$ket[1]="Pengisian formulir data pribadi, kontak, rekening, dan Data Akademik";
	$ket[2]="Pengisian formulir data penanggung jawab (orang tua / wali)";
	$ket[3]="Pengisian formulir data keuangan pribadi (pengeluaran dan pemasukan)";
	$ket[4]="Finalisasi : Detail beasiswa dan pemilihan prioritas beasiswa";
	for ($i=1;$i<=4;$i++){
		echo "<div class='state_box'><div class='state_point'";
		if ((isset($_GET['q']))&&($_GET['q']==$i)) {echo " id='state_comp'";}
		echo "><h1>".$i."</h1></div><p";
		if ((isset($_GET['q']))&&($_GET['q']==$i)) {echo " class='highlight'";}
		echo ">".$ket[$i]."</p></div>";
	}
?>
</div>