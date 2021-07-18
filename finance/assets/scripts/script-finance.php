<?php 
	date_default_timezone_set('Asia/Jakarta');
	$username 		= $_SESSION['username'];
	$username_agen 	= $_SESSION['username_agen'];
?>
<?php	
	$sql="SELECT nama from db_usermanager where username='$username' AND tipe_akun='finance'";
	$result=$koneksi->query($sql);
	$nama=$result->fetch_assoc();
?>	
<?php	
	$sql="SELECT foto from db_usermanager where username='$username' AND tipe_akun='finance'";
	$result=$koneksi->query($sql);
	$foto=$result->fetch_assoc();
?>	

<!-- Data Pemasukan -->
	<!-- Hari Ini -->
	<?php
		$tgl_sekarang = date('Y-m-d');		
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pemasukan_hari_ini from laporan_pemasukan where date(tanggal)='$tgl_sekarang' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pemasukan_hari_ini = $d['jumlah_pemasukan_hari_ini'];
		
		$tgl_sekarang = date('Y-m-d');		
		$data_total_nomor_hari_ini = mysqli_query($koneksi,"select * from laporan_pemasukan where date(tanggal)='$tgl_sekarang' AND username_agen='$username_agen'");
		$total_nomor_hari_ini = mysqli_num_rows($data_total_nomor_hari_ini);
	?>
	<!-- Kemarin -->
	<?php
		$tgl_kemarin = date('Y-m-d',strtotime('-1 day', strtotime( date("Y-m-d") )));
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pemasukan_hari_kemarin from laporan_pemasukan where date(tanggal)='$tgl_kemarin' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pemasukan_hari_kemarin = $d['jumlah_pemasukan_hari_kemarin'];
		
		$tgl_kemarin = date('Y-m-d',strtotime('-1 day', strtotime( date("Y-m-d") )));
		$data_total_nomor_kemarin = mysqli_query($koneksi,"select * from laporan_pemasukan where date(tanggal)='$tgl_kemarin' AND username_agen='$username_agen'");
		$total_nomor_kemarin = mysqli_num_rows($data_total_nomor_kemarin);
	?>
	<!-- 1 Minggu -->
	<?php
		$tgl_seminggu = date('Y-m-d',strtotime('-7 day', strtotime( date("Y-m-d") )));
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pemasukan_seminggu from laporan_pemasukan where date(tanggal)>='$tgl_seminggu' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pemasukan_seminggu = $d['jumlah_pemasukan_seminggu'];
		
		$tgl_seminggu = date('Y-m-d',strtotime('-7 day', strtotime( date("Y-m-d") )));
		$data_total_nomor_satu_minggu = mysqli_query($koneksi,"select * from laporan_pemasukan where date(tanggal)>='$tgl_seminggu' AND username_agen='$username_agen'");
		$total_nomor_satu_minggu = mysqli_num_rows($data_total_nomor_satu_minggu);
	?>
	<!-- 1 Bulan -->
	<?php
		$bulan=date('m');
		$tahun=date('Y');
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pemasukan_sebulan from laporan_pemasukan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pemasukan_sebulan = $d['jumlah_pemasukan_sebulan'];
	
		$bulan=date('m');
		$tahun=date('Y');
		$data_total_nomor_satu_bulan = mysqli_query($koneksi,"select * from laporan_pemasukan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen='$username_agen'");
		$total_nomor_satu_bulan = mysqli_num_rows($data_total_nomor_satu_bulan);
	?>
	<!-- 1 Tahun -->
	<?php
		$tahun=date('Y');
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pemasukan_setahun from laporan_pemasukan where year(tanggal)>='$tahun' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pemasukan_setahun = $d['jumlah_pemasukan_setahun'];
		
		$tahun=date('Y');
		$data_total_nomor_satu_tahun = mysqli_query($koneksi,"select * from laporan_pemasukan where year(tanggal)>='$tahun' AND username_agen='$username_agen'");
		$total_nomor_satu_tahun = mysqli_num_rows($data_total_nomor_satu_tahun);
	?>
	
	
<!-- Data Pengeluaran -->
	<!-- Hari Ini -->
	<?php
		$tgl_sekarang = date('Y-m-d');		
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pengeluaran_hari_ini from laporan_pengeluaran where date(tanggal)='$tgl_sekarang' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pengeluaran_hari_ini = $d['jumlah_pengeluaran_hari_ini'];		
		
		$tgl_sekarang = date('Y-m-d');		
		$data_total_nomor_hari_ini_pengeluaran = mysqli_query($koneksi,"select * from laporan_pengeluaran where date(tanggal)='$tgl_sekarang' AND username_agen='$username_agen'");
		$total_nomor_hari_ini_pengeluaran = mysqli_num_rows($data_total_nomor_hari_ini_pengeluaran);
	?>
	<!-- Kemarin -->
	<?php
		$tgl_kemarin = date('Y-m-d',strtotime('-1 day', strtotime( date("Y-m-d") )));
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pengeluaran_hari_kemarin from laporan_pengeluaran where date(tanggal)='$tgl_kemarin' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pengeluaran_hari_kemarin = $d['jumlah_pengeluaran_hari_kemarin'];
		
		$tgl_kemarin = date('Y-m-d',strtotime('-1 day', strtotime( date("Y-m-d") )));
		$data_total_nomor_kemarin_pengeluaran = mysqli_query($koneksi,"select * from laporan_pengeluaran where date(tanggal)='$tgl_kemarin' AND username_agen='$username_agen'");
		$total_nomor_kemarin_pengeluaran = mysqli_num_rows($data_total_nomor_kemarin_pengeluaran);
	?>
	<!-- 1 Minggu -->
	<?php
		$tgl_seminggu = date('Y-m-d',strtotime('-7 day', strtotime( date("Y-m-d") )));
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pengeluaran_seminggu from laporan_pengeluaran where date(tanggal)>='$tgl_seminggu' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pengeluaran_seminggu = $d['jumlah_pengeluaran_seminggu'];
		
		$tgl_seminggu = date('Y-m-d',strtotime('-7 day', strtotime( date("Y-m-d") )));
		$data_total_nomor_satu_minggu_pengeluaran = mysqli_query($koneksi,"select * from laporan_pengeluaran where date(tanggal)>='$tgl_seminggu' AND username_agen='$username_agen'");
		$total_nomor_satu_minggu_pengeluaran = mysqli_num_rows($data_total_nomor_satu_minggu_pengeluaran);
	?>
	<!-- 1 Bulan -->
	<?php
		$bulan=date('m');
		$tahun=date('Y');
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pengeluaran_sebulan from laporan_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pengeluaran_sebulan = $d['jumlah_pengeluaran_sebulan'];
		
		$bulan=date('m');
		$tahun=date('Y');
		$data_total_nomor_satu_bulan_pengeluaran = mysqli_query($koneksi,"select * from laporan_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen='$username_agen'");
		$total_nomor_satu_bulan_pengeluaran = mysqli_num_rows($data_total_nomor_satu_bulan_pengeluaran);
	?>
	<!-- 1 Tahun -->
	<?php
		$tahun=date('Y');
		$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pengeluaran_setahun from laporan_pengeluaran where year(tanggal)>='$tahun' AND username_agen='$username_agen'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pengeluaran_setahun = $d['jumlah_pengeluaran_setahun'];
		
		$tahun=date('Y');
		$data_total_nomor_satu_tahun_pengeluaran = mysqli_query($koneksi,"select * from laporan_pengeluaran where year(tanggal)>='$tahun' AND username_agen='$username_agen'");
		$total_nomor_satu_tahun_pengeluaran = mysqli_num_rows($data_total_nomor_satu_tahun_pengeluaran);
	?>