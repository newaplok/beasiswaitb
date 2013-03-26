<?php
    $sesi = $this->session->all_userdata();
    $linklogout = base_url()."index.php/mahasiswa_ctrl/logout";
    $p = $profil;
?>


<html>
    <head>
	
    </head>
    <body style="background-color: #ccF;">
	<table border='1'>
	    <tr>
		<td><a>id</a></td>
		<td><a><?php echo $p->id; ?></a></td>
	    </tr>
	    <tr>
		<td><a>nama_lengkap </a></td>
		<td><a><?php echo $p->nama_lengkap; ?></a></td>
	    </tr>
	    <tr>
		<td><a>nim_jurusan</a></td>
		<td><a><?php echo $p->nim_jurusan; ?></a></td>
	    </tr>
	    <tr>
		<td><a>nim_tpb</a></td>
		<td><a><?php echo $p->nim_tpb; ?></a></td>
	    </tr>
	    <tr>
		<td><a>angkatan</a></td>
		<td><a><?php echo $p->angkatan; ?></a></td>
	    </tr>
	    <tr>
		<td><a>fakultas</a></td>
		<td><a><?php echo $p->fakultas; ?></a></td>
	    </tr>
	    <tr>
		<td><a>jurusan</a></td>
		<td><a><?php echo $p->jurusan; ?></a></td>
	    </tr>
	    <tr>
		<td><a>tempat_lahir</a></td>
		<td><a><?php echo $p->tempat_lahir; ?></a></td>
	    </tr>
	    <tr>
		<td><a>tgl_lahir</a></td>
		<td><a><?php echo $p->tgl_lahir; ?></a></td>
	    </tr>
	    <tr>
		<td><a>jenis_kelamin</a></td>
		<td><a><?php echo $p->jenis_kelamin; ?></a></td>
	    </tr>
	    <tr>
		<td><a>agama</a></td>
		<td><a><?php echo $p->agama; ?></a></td>
	    </tr>
	    <tr>
		<td><a>alamat_bandung</a></td>
		<td><a><?php echo $p->alamat_bandung; ?></a></td>
	    </tr>
	    <tr>
		<td><a>alamat_asal</a></td>
		<td><a><?php echo $p->alamat_asal; ?></a></td>
	    </tr>
	    <tr>
		<td><a>email_itb</a></td>
		<td><a><?php echo $p->email_itb; ?></a></td>
	    </tr>
	    <tr>
		<td><a>email</a></td>
		<td><a><?php echo $p->email; ?></a></td>
	    </tr>
	    <tr>
		<td><a>nomor_tlp</a></td>
		<td><a><?php echo $p->nomor_tlp; ?></a></td>
	    </tr>
	    <tr>
		<td><a>nomor_hp</a></td>
		<td><a><?php echo $p->nomor_hp; ?></a></td>
	    </tr>
	    <tr>
		<td><a>no_rekening</a></td>
		<td><a><?php echo $p->no_rekening; ?></a></td>
	    </tr>
	    <tr>
		<td><a>no_rek_lain</a></td>
		<td><a><?php echo $p->no_rek_lain; ?></a></td>
	    </tr>
	    <tr>
		<td><a>nama_bank_lain</a></td>
		<td><a><?php echo $p->nama_bank_lain; ?></a></td>
	    </tr>
	    <tr>
		<td><a>transportasi</a></td>
		<td><a><?php echo $p->transportasi; ?></a></td>
	    </tr>
	    <tr>
		<td><a>status_tinggal</a></td>
		<td><a><?php echo $p->status_tinggal; ?></a></td>
	    </tr>
	    <tr>
		<td><a>prioritas_beasiswa</a></td>
		<td><a><?php echo $p->prioritas_beasiswa; ?></a></td>
	    </tr>
	    <tr>
		<td><a>alasan</a></td>
		<td><a><?php echo $p->alasan; ?></a></td>
	    </tr>
	    
	</table>
	<a>Login sukses</a>
	<form action= <?php echo $linklogout;?> >
	    <input type="submit" value="Logout"></submit>
	</form>
	
    </body>
</html>

















