	<?php
		session_start();
		date_default_timezone_set('Asia/Jakarta');
		include '../config.php';
		
		$no_resi 			= $_POST['no_resi']; 
		$tanggal			= date("Y-m-d H:i:s");
		$jumlah 			= $_POST['jumlah'];  
		$keterangan 		= $_POST['keterangan']; 
		
		mysqli_query($koneksi,"UPDATE laporan_pemasukan SET 
			
		jumlah		 		= '$jumlah',
		keterangan			= '$keterangan',
		tanggal				= '$tanggal'
		
		where no_resi='$no_resi'");
		
		header("location:laporan-pemasukan");
	?>