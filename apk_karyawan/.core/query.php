	<!-- Tanggal -->
	<?php		
		function tgl_Indonesia($indo_tgl){
			$tr   = trim($indo_tgl);
			$indo_tgl    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
			return $indo_tgl;
		}
	?>
	
	<!-- Timezone -->
	<?php 
		date_default_timezone_set('Asia/Jakarta');
	?>
	
	<!-- Tagline -->
	<?php
		$sql="SELECT tagline from data_website";
		$result=$koneksi->query($sql);
		$row=$result->fetch_assoc();
	?>	
	
	<!-- Username -->
	<?php
		$username 		= $_SESSION['username'];
		$username_agen 	= $_SESSION['username_agen'];
		$nama	 		= $_SESSION['nama'];
		$kota	 		= $_SESSION['kota'];
	?>
	
	<!-- Hari Ini -->
	<?php $tgl_sekarang = date('Y-m-d');?>
	
	
	
	
	
	
	
	
	
	
	
	