	<?php
		session_start();
		date_default_timezone_set('Asia/Jakarta');
		include '../config.php';

		$dari 		= $_POST['dari']; 	
		$nama 		= $_POST['nama'];  
	
		$query = mysqli_query($koneksi, "INSERT INTO db_marketing (
		
				dari,
				nama
		) 
		VALUES (
				'$dari',
				'$nama'
			)
		");

        header('location:marketing');
	?>