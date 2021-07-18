	<?php
	session_start();
	include '../config.php';

	$username			= $_POST['username'];
	$no_telp			= $_POST['no_telp'];
	$kota				= $_POST['kota'];
	$alamat				= $_POST['alamat'];

	$query = mysqli_query($koneksi, "update db_usermanager set 
		
		no_telp			='$no_telp',
		kota		 	='$kota',
		alamat		 	='$alamat'
		
		where username='$username' AND tipe_akun='agen'
		");

	header("location:pengaturan-profil");
	?>