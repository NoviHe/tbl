<?php
		date_default_timezone_set('Asia/Jakarta');
		
		session_start();
		include '../config.php';
		
		$no_resi 			= $_POST['no_resi']; 
		$username 			= $_POST['username']; 
		$nama	 			= $_POST['nama']; 
		$status 			= $_POST['status']; 
		$keterangan 		= $_POST['keterangan']; 
		$tanggal			= date("Y-m-d H:i:s");
		
	
		$query = mysqli_query($koneksi, "INSERT INTO db_tracking_resi (
		
				no_resi,
				username,
				nama,
				status,
				keterangan,
				tanggal
		) 
		VALUES (
				'$no_resi',
				'$username',
				'$nama',
				'$status',
				'$keterangan',
				'$tanggal'
			)
		");

        header('location:page?src=dashboard');
?>