<h2>Data Diri</h2>
<form method="post" action="2"><div class='input_group'>
	<h4>Data Pribadi</h4>
	<div class='label'><h5>Nama Lengkap</h5></div>
	<input widthset="longer" name="Name" title="Nama Lengkap" value="Ignatius Evan Daryanto" readonly/><br/>
	<div class='label'><h5>NIM TPB</h5></div>
	<input widthset="shorter" name="NIM TPB" title="NIM TPB"/><br/>
	<div class='label'><h5>NIM Jurusan</h5></div>
	<input widthset="shorter" name="NIM Jurusan" title="NIM JURUSAN" value="13511019" readonly/><br/>
	<div class='label'><h5>Fakultas</h5></div>
	<select><?php include "list-fakultas.php" ?></select><br/>
	<div class='label'><h5>Program Studi</h5></div>
	<select><?php include "list-jurusan.php" ?></select><br/>
	<div class='label'><h5>Kota kelahiran</h5></div>
	<input widthset="short" name="kota_lahir" title="Kota kelahiran"/><br/>
	<div class='label'><h5>Tanggal kelahiran</h5></div>
	<input type="text" id="datepick"><br/>
	<div class='label'><h5>Jenis Kelamin</h5></div>
	<select><option value="P">Pria</option><option value="W">Wanita</option></select><br/>
	<div class='label'><h5>Agama</h5></div>
	<select id="selector" >
		<option value="0" disabled selected>Pilih</option>
		<option value="Islam">Islam</option>
		<option value="Kristen">Kristen</option>
		<option value="Katolik">Katolik</option>
		<option value="Budha">Budha</option>
		<option value="Hindu">Hindu</option>
	</select><br/>
	<h4>Kontak</h4>
	<div class='label'><h5>Alamat Bandung</h5></div>
	<textarea widthset="short" name="al_bdg" title="Alamat Bandung"/></textarea><br/>
	<div class='label'><h5>Status Tempat Tinggal</h5></div>
	<select>
		<option value="0" disabled selected>Pilih</option>
		<option value="Rumah Sendiri">Rumah Sendiri</option>
		<option value="Kontrak">Kontrak</option>
		<option value="Kost">Kost</option>
		<option value="Rumah Saudara">Rumah Saudara</option>
		<option value="Asrama">Asrama</option>
	</select><br/>
	<div class='label'><h5>Cara tempuh ke kampus</h5></div>
	<select>
		<option value="0" disabled selected>Pilih</option>
		<option value="Jalan">Jalan Kaki</option>
		<option value="Umum">Kendaraan Umum</option>
		<option value="Mobil">Kendaraan Pribadi : Mobil</option>
		<option value="Motor">Kendaraan Pribadi : Sepeda Motor</option>
	</select><br/>
	<div class='label'><h5>Alamat Asal</h5></div>
	<textarea widthset="short" name="al_asl" title="Alamat Asal"/></textarea><br/>
	<div class='label'><h5>E-mail ITB</h5></div>
	<input widthset="long" name="email" title="Email ITB"/>@s.itb.ac.id<br/>
	<div class='label'><h5>E-mail Lain</h5></div>
	<input widthset="longer" name="email" title="Email lain" type="email"/><br/>
	<div class='label'><h5>Nomer Telepon Bandung</h5></div>
	<input widthset="short" name="NIM Jurusan" title="NIM JURUSAN"/><br/>
	<div class='label'><h5>Nomer HP</h5></div>
	<input widthset="short" name="HP" title="HP"/><br/>
	<h4>Nomer Rekening</h4>
	<div class='label'><h5>Nomer rekening BNI</h5></div>
	<input widthset="short" name="email" title="NIM JURUSAN"/><br/>
	<div class='label'><h5>Nomer rekening lain</h5></div>
	<input widthset="long" name="email" title="NIM JURUSAN"/><br/>
	<h4>Data Akademik</h4>
	<div class='label'><h5>Semester</h5></div>
	<input widthset="shortest" name="email" title="Semester"/><br/>
	<div class='label'><h5>IPK</h5></div>
	<input widthset="shortest" name="email" title="Indeks Prestasi Kumulatif"/><br/>
	<div class='label'><h5>Nilai UAN (khusus TPB)</h5></div>
	<input widthset="shortest" name="email" title="Nilai Ujian Akhir National"/><br/>
	<div class='label'><h5>SKS yang sudah diambil</h5></div>
	<input widthset="shortest" name="email" title="NIM JURUSAN"/><br/>
</div>
<button type="submit" class="radius button">Submit</button></form>