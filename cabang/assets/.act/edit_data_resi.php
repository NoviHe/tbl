<?php
		session_start();
		include '../config.php';

		$id 		 	= $_POST['id']; 
		$dari 			= $_POST['dari']; 
		$tujuan 		= $_POST['tujuan']; 
		$harga 			= $_POST['harga']; 

		mysqli_query($koneksi,"UPDATE data_resi SET 		
		
		dari		 	= '$dari',
		tujuan			= '$tujuan',
		harga			= '$harga'
		
		where id='$id'");

        header('location:tujuan-tarif');
?>