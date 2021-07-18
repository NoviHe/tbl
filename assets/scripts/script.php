	<?php		
		function tgl_Indonesia($indo_tgl){
			$tr   = trim($indo_tgl);
			$indo_tgl    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
			return $indo_tgl;
		}
	?>
	<?php $feedback = "Tidak Boleh Kosong!";?>
	<?php	
		$sql="SELECT nama_website from data_website";
		$result=$koneksi->query($sql);
		$nama_perusahaan=$result->fetch_assoc();
	?>	
	<?php		
		$sql="SELECT tagline from data_website";
		$result=$koneksi->query($sql);
		$tagline=$result->fetch_assoc();
	?>	
	<?php		
		$sql="SELECT favicon from data_website";
		$result=$koneksi->query($sql);
		$favicon=$result->fetch_assoc();
	?>
	<?php		
		$sql="SELECT logo_website from data_website";
		$result=$koneksi->query($sql);
		$logo=$result->fetch_assoc();
	?>	
	<?php		
		$sql="SELECT logo_login from data_login";
		$result=$koneksi->query($sql);
		$logo_login=$result->fetch_assoc();
	?>	
	<?php		
		$sql="SELECT bg_login from data_login";
		$result=$koneksi->query($sql);
		$bg_image=$result->fetch_assoc();
	?>	
	<?php		
		$sql="SELECT bg_color from data_login";
		$result=$koneksi->query($sql);
		$bg_color=$result->fetch_assoc();
	?>	
	<?php		
		$sql="SELECT color_copyright from data_login";
		$result=$koneksi->query($sql);
		$color_copyright=$result->fetch_assoc();
	?>		