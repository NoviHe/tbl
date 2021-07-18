<?php
		session_start();
		include '../config.php';

		$id 		 	= $_POST['id']; 
		$nama 			= $_POST['nama']; 

		mysqli_query($koneksi,"UPDATE db_marketing SET 		
		
		nama		 	= '$nama'
		
		where id='$id'");

        header('location:marketing');
?>