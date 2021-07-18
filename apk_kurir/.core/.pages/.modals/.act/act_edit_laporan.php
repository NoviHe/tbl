<?php
session_start();
		include '../config.php';

		$id 				= $_POST['id']; 
		$status 			= $_POST['status']; 
		$keterangan 		= $_POST['keterangan']; 

		mysqli_query($koneksi,"UPDATE db_tracking_resi SET 
			
		status		 		= '$status',
		keterangan			= '$keterangan'
		
		where id='$id'");

        header('location:page?src=dashboard');
?>