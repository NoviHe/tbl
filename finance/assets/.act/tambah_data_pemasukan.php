	<?php
		session_start();
		date_default_timezone_set('Asia/Jakarta');
		include '../config.php';
		
		$no_resi 			= $_POST['no_resi']; 
		$username_agen 		= $_POST['username_agen']; 
		$username 			= $_POST['username']; 
		$tanggal			= date("Y-m-d H:i:s");
		$jumlah 			= $_POST['jumlah']; 
		$kategori 			= $_POST['kategori']; 
		$keterangan 		= $_POST['keterangan']; 
		
		$query = mysqli_query($koneksi, "INSERT INTO laporan_pemasukan (
		
				no_resi,
				username_agen,
				username,
				tanggal,
				jumlah,
				kategori,
				keterangan
		) 
		VALUES (
				'$no_resi',
				'$username_agen',
				'$username',
				'$tanggal',
				'$jumlah',
				'$kategori',
				'$keterangan'
			)
		");
		
		header("location:laporan-pemasukan");
	?>