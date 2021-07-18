<?php
		session_start();
		include '../config.php';

		$no_resi				= $_POST['no_resi'];
		$jumlah_barang			= $_POST['jumlah_barang'];
		$dimensi_panjang		= $_POST['dimensi_panjang'];
		$dimensi_lebar			= $_POST['dimensi_lebar'];
		$dimensi_tinggi			= $_POST['dimensi_tinggi'];
		$jenis_barang			= $_POST['jenis_barang'];
		$nama_pengirim			= $_POST['nama_pengirim'];
		$nama_penerima			= $_POST['nama_penerima'];
		$no_telp_pengirim		= $_POST['no_telp_pengirim'];
		$no_telp_penerima		= $_POST['no_telp_penerima'];
		$alamat_penerima		= $_POST['alamat_penerima'];
		$keterangan				= $_POST['keterangan'];
		$alamat_pengirim		= $_POST['alamat_pengirim'];
		$patokan				= $_POST['patokan'];

		mysqli_query($koneksi,"UPDATE laporan_resi SET 		
		
		jumlah_barang		 	= '$jumlah_barang',
		dimensi_panjang		 	= '$dimensi_panjang',
		dimensi_lebar		 	= '$dimensi_lebar',
		dimensi_tinggi		 	= '$dimensi_tinggi',
		jenis_barang		 	= '$jenis_barang',
		nama_pengirim		 	= '$nama_pengirim',
		nama_penerima		 	= '$nama_penerima',
		no_telp_pengirim		= '$no_telp_pengirim',
		no_telp_penerima		= '$no_telp_penerima',
		alamat_penerima		 	= '$alamat_penerima',
		keterangan		 		= '$keterangan',
		alamat_pengirim		 	= '$alamat_pengirim',
		patokan		 			= '$patokan'
		
		where no_resi='$no_resi'");

        header('location:pengiriman');
?>