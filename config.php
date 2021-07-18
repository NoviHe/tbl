	<?php
	// $koneksi = mysqli_connect("localhost","tahtabua_db-cargo","tahtabua_db-cargo","tahtabua_db-cargo");
	$koneksi = mysqli_connect("localhost", "root", "root", "tblcargo");
	if (mysqli_connect_errno()) {
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}
	$salt = "SOLUSIDIGITALID.COM";
	?>