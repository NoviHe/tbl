	<?php
		session_start();
		date_default_timezone_set('Asia/Jakarta');
		include '../config.php';

		$dari 		= $_POST['dari']; 	
		$tujuan 	= $_POST['tujuan']; 
		$harga 		= $_POST['harga'];  
	
		$query = mysqli_query($koneksi, "INSERT INTO data_resi (
		
				dari,
				tujuan,
				harga
		) 
		VALUES (
				'$dari',
				'$tujuan',
				'$harga'
			)
		");

        header('location:tujuan-tarif');
	?>