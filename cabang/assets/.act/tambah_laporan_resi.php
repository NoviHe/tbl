	<?php
	session_start();
	date_default_timezone_set('Asia/Jakarta');
	include '../config.php';

	$no_resi				= $_POST['no_resi'];
	$username_agen			= $_POST['username_agen'];
	$tanggal 				= date("Y-m-d H:i:s");
	$layanan				= $_POST['layanan'];
	$kota_agen				= $_POST['kota_agen'];
	$tujuan_pengiriman		= $_POST['tujuan_pengiriman'];
	$biaya_pengiriman		= $_POST['biaya_pengiriman'];
	$berat_kiriman			= $_POST['berat_kiriman'];
	$jenis_barang			= $_POST['jenis_barang'];
	$dimensi_panjang		= $_POST['dimensi_panjang'];
	$dimensi_lebar			= $_POST['dimensi_lebar'];
	$dimensi_tinggi			= $_POST['dimensi_tinggi'];
	$jumlah_barang			= $_POST['jumlah_barang'];
	$total_harga			= $_POST['total_harga'];
	$metode_pembayaran		= $_POST['metode_pembayaran'];
	$nama_pengirim			= $_POST['nama_pengirim'];
	$nama_penerima			= $_POST['nama_penerima'];
	$no_telp_pengirim		= $_POST['no_telp_pengirim'];
	$no_telp_penerima		= $_POST['no_telp_penerima'];
	$alamat_penerima		= $_POST['alamat_penerima'];
	$nama_marketing			= $_POST['nama_marketing'];
	$keterangan				= $_POST['keterangan'];
	$alamat_pengirim		= $_POST['alamat_pengirim'];
	$patokan				= $_POST['patokan'];


	$query = mysqli_query($koneksi, "INSERT INTO laporan_resi (
		
				no_resi,
				username_agen,
				tanggal,
				layanan,
				kota_agen,
				tujuan_pengiriman,
				biaya_pengiriman,
				berat_kiriman,
				jenis_barang,
				dimensi_panjang,
				dimensi_lebar,
				dimensi_tinggi,
				jumlah_barang,
				total_harga,
				metode_pembayaran,
				nama_pengirim,
				nama_penerima,
				no_telp_pengirim,
				no_telp_penerima,
				alamat_pengirim,
				alamat_penerima,
				nama_marketing,
				keterangan,
				patokan
		) 
		VALUES (
				'$no_resi',
				'$username_agen',
				'$tanggal',
				'$layanan',
				'$kota_agen',
				'$tujuan_pengiriman',
				'$biaya_pengiriman',
				'$berat_kiriman',
				'$jenis_barang',
				'$dimensi_panjang',
				'$dimensi_lebar',
				'$dimensi_tinggi',
				'$jumlah_barang',
				'$total_harga',
				'$metode_pembayaran',
				'$nama_pengirim',
				'$nama_penerima',
				'$no_telp_pengirim',
				'$no_telp_penerima',
				'$alamat_pengirim',
				'$alamat_penerima',
				'$nama_marketing',
				'$keterangan',
				'$patokan'
			)
		");

	$no_resi 				= $_POST['no_resi'];
	$username_agen 			= $_POST['username_agen'];
	$username				= $_POST['nama_marketing'];
	$tanggal 				= date("Y-m-d H:i:s");
	$jumlah		 			= $_POST['total_harga'];
	$kategori				= 'Pemasukan';
	$keterangan 			= $_POST['metode_pembayaran'];

	$query .= mysqli_query($koneksi, "INSERT INTO laporan_pemasukan (
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

	$no_resi 				= $_POST['no_resi'];
	$metode_pembayaran		= $_POST['metode_pembayaran'];
	$tanggal_dibuat_invoice = date("Y-m-d H:i:s");
	$jumlah_harga 			= $_POST['total_harga'];
	$jangka_waktu_bulanan 	= $_POST['jangka_waktu_bulanan'];
	$total_harga_bulanan 	= $_POST['total_harga_bulanan'];

	$query .= mysqli_query($koneksi, "INSERT INTO db_invoice (
						no_resi,
						metode_pembayaran,
						tanggal_dibuat_invoice,
						jumlah_harga,
						jangka_waktu_bulanan,
						total_harga_bulanan
					) 
            VALUES (
						'$no_resi',
						'$metode_pembayaran',
						'$tanggal_dibuat_invoice',
						'$jumlah_harga',
						'$jangka_waktu_bulanan',
						'$total_harga_bulanan'
					)
		");

	$no_resi 		= $_POST['no_resi'];
	$username		= $_POST['username_agen'];
	$nama			= $_POST['username_agen'];
	$status			= 'Paket Telah di Terima Oleh Petugas Agen';
	$keterangan		= '-';
	$tanggal 		= date("Y-m-d H:i:s");

	$query .= mysqli_query($koneksi, "INSERT INTO db_tracking_resi (
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

	header("location:cetak-resi?no_resi=$no_resi");

	// BUAT QRCODE
	// tampung data kiriman
	$organization = "TBL - Tahta Buana Logistik";

	// include file qrlib.php
	include "../assets/phpqrcode/qrlib.php";

	//Nama Folder file QR Code kita nantinya akan disimpan
	$tempdir = "../.core/.assets/.img/qrcode/";

	//jika folder belum ada, buat folder 
	if (!file_exists($tempdir)) {
		mkdir($tempdir);
	}

	//Isi dari QRCode Saat discan
	$isi_qrcode = "https://tahtabuanalogistic.com/tracking/search?no_resi=" . $no_resi;


	//Nama file yang akan disimpan pada folder temp 
	$namafile = $no_resi . ".png";
	//Kualitas dari QRCode 
	$quality = 'H';
	//Ukuran besar QRCode
	$ukuran = 8;
	$padding = 0;
	QRCode::png($isi_qrcode, $tempdir . $namafile, $quality, $ukuran, $padding);

	?>