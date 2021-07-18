<?php
		date_default_timezone_set('Asia/Jakarta');
		
		session_start();
		include '../config.php';
		
		$jenis_absen 	= $_POST['jenis_absen']; 
		$username_agen 	= $_POST['username_agen']; 
		$username 		= $_POST['username']; 
		$nama 			= $_POST['nama']; 
		$lokasi 		= $_POST['lokasi']; 
		$tanggal		= date("Y-m-d H:i:s");
		
	
		$query = mysqli_query($koneksi, "INSERT INTO db_karyawan (
		
				jenis_absen,
				username_agen,
				username,
				nama,
				lokasi,
				tanggal
		) 
		VALUES (
				'$jenis_absen',
				'$username_agen',
				'$username',
				'$nama',
				'$lokasi',
				'$tanggal'
			)
		");

        header('location:page?src=dashboard');
?>