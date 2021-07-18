<?php
date_default_timezone_set('Asia/Jakarta');
$username         = $_SESSION['username'];
?>
<?php
$sql = "SELECT nama from db_usermanager where username='$username' AND tipe_akun='agen'";
$result = $koneksi->query($sql);
$nama = $result->fetch_assoc();
?>
<?php
$sql = "SELECT foto from db_usermanager where username='$username' AND tipe_akun='agen'";
$result = $koneksi->query($sql);
$foto = $result->fetch_assoc();
?>
<?php
$sql = "SELECT kota from db_usermanager where username='$username' AND tipe_akun='agen'";
$result = $koneksi->query($sql);
$kota = $result->fetch_assoc();
?>

<!-- Data Resi 1 Bulan -->
<?php
$bulan = date('m');
$tahun = date('Y');
$data = mysqli_query($koneksi, "select sum(total_harga) as jumlah_pemasukan_resi_sebulan from laporan_resi where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen ='$username'");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_resi_sebulan = $d['jumlah_pemasukan_resi_sebulan'];

$data_total_resi_satu_bulan = mysqli_query($koneksi, "select * from laporan_resi where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen ='$username'");
$total_resi_satu_bulan = mysqli_num_rows($data_total_resi_satu_bulan);

$data_invoice_satu_bulan = mysqli_query($koneksi, "select * from laporan_resi where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen ='$username' AND metode_pembayaran='INVOICE'");
$data_invoice_satu_bulan = mysqli_num_rows($data_invoice_satu_bulan);

// INVOICE
$data = mysqli_query($koneksi, "select sum(total_harga) as jumlah_pemasukan_invoice from laporan_resi where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen ='$username' AND metode_pembayaran='INVOICE'");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_invoice = $d['jumlah_pemasukan_invoice'];

// TUNAI
$data = mysqli_query($koneksi, "select sum(total_harga) as jumlah_pemasukan_tunai from laporan_resi where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen ='$username' AND metode_pembayaran='TUNAI'");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_tunai = $d['jumlah_pemasukan_tunai'];

// COD
$data = mysqli_query($koneksi, "select sum(total_harga) as jumlah_pemasukan_cod from laporan_resi where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen ='$username' AND metode_pembayaran='COD'");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_cod = $d['jumlah_pemasukan_cod'];
?>


























<!-- Data Pemasukan -->
<?php
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pemasukan_total from laporan_pemasukan");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_total = $d['jumlah_pemasukan_total'];

$data_total_pemasukan = mysqli_query($koneksi, "select * from laporan_pemasukan");
$total_data_pemasukan = mysqli_num_rows($data_total_pemasukan);
?>
<!-- Hari Ini -->
<?php
$tgl_sekarang = date('Y-m-d');
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pemasukan_hari_ini from laporan_pemasukan where date(tanggal)='$tgl_sekarang'");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_hari_ini = $d['jumlah_pemasukan_hari_ini'];

$tgl_sekarang = date('Y-m-d');
$data_total_nomor_hari_ini = mysqli_query($koneksi, "select * from laporan_pemasukan where date(tanggal)='$tgl_sekarang'");
$total_nomor_hari_ini = mysqli_num_rows($data_total_nomor_hari_ini);
?>
<!-- Kemarin -->
<?php
$tgl_kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date("Y-m-d"))));
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pemasukan_hari_kemarin from laporan_pemasukan where date(tanggal)='$tgl_kemarin'");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_hari_kemarin = $d['jumlah_pemasukan_hari_kemarin'];

$tgl_kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date("Y-m-d"))));
$data_total_nomor_kemarin = mysqli_query($koneksi, "select * from laporan_pemasukan where date(tanggal)='$tgl_kemarin'");
$total_nomor_kemarin = mysqli_num_rows($data_total_nomor_kemarin);
?>
<!-- 1 Minggu -->
<?php
$tgl_seminggu = date('Y-m-d', strtotime('-7 day', strtotime(date("Y-m-d"))));
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pemasukan_seminggu from laporan_pemasukan where date(tanggal)>='$tgl_seminggu'");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_seminggu = $d['jumlah_pemasukan_seminggu'];

$tgl_seminggu = date('Y-m-d', strtotime('-7 day', strtotime(date("Y-m-d"))));
$data_total_nomor_satu_minggu = mysqli_query($koneksi, "select * from laporan_pemasukan where date(tanggal)>='$tgl_seminggu'");
$total_nomor_satu_minggu = mysqli_num_rows($data_total_nomor_satu_minggu);
?>
<!-- 1 Bulan -->
<?php
$bulan = date('m');
$tahun = date('Y');
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pemasukan_sebulan from laporan_pemasukan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_sebulan = $d['jumlah_pemasukan_sebulan'];

$bulan = date('m');
$tahun = date('Y');
$data_total_nomor_satu_bulan = mysqli_query($koneksi, "select * from laporan_pemasukan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
$total_nomor_satu_bulan = mysqli_num_rows($data_total_nomor_satu_bulan);
?>
<!-- 1 Tahun -->
<?php
$tahun = date('Y');
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pemasukan_setahun from laporan_pemasukan where year(tanggal)>='$tahun'");
$d = mysqli_fetch_assoc($data);
$jumlah_pemasukan_setahun = $d['jumlah_pemasukan_setahun'];

$tahun = date('Y');
$data_total_nomor_satu_tahun = mysqli_query($koneksi, "select * from laporan_pemasukan where year(tanggal)>='$tahun'");
$total_nomor_satu_tahun = mysqli_num_rows($data_total_nomor_satu_tahun);
?>


<!-- Data Pengeluaran -->
<?php
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pengeluaran_total from laporan_pengeluaran");
$d = mysqli_fetch_assoc($data);
$jumlah_pengeluaran_total = $d['jumlah_pengeluaran_total'];

$data_total_pengeluaran = mysqli_query($koneksi, "select * from laporan_pengeluaran");
$total_data_pengeluaran = mysqli_num_rows($data_total_pengeluaran);
?>
<!-- Hari Ini -->
<?php
$tgl_sekarang = date('Y-m-d');
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pengeluaran_hari_ini from laporan_pengeluaran where date(tanggal)='$tgl_sekarang'");
$d = mysqli_fetch_assoc($data);
$jumlah_pengeluaran_hari_ini = $d['jumlah_pengeluaran_hari_ini'];

$tgl_sekarang = date('Y-m-d');
$data_total_nomor_hari_ini_pengeluaran = mysqli_query($koneksi, "select * from laporan_pengeluaran where date(tanggal)='$tgl_sekarang'");
$total_nomor_hari_ini_pengeluaran = mysqli_num_rows($data_total_nomor_hari_ini_pengeluaran);
?>
<!-- Kemarin -->
<?php
$tgl_kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date("Y-m-d"))));
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pengeluaran_hari_kemarin from laporan_pengeluaran where date(tanggal)='$tgl_kemarin'");
$d = mysqli_fetch_assoc($data);
$jumlah_pengeluaran_hari_kemarin = $d['jumlah_pengeluaran_hari_kemarin'];

$tgl_kemarin = date('Y-m-d', strtotime('-1 day', strtotime(date("Y-m-d"))));
$data_total_nomor_kemarin_pengeluaran = mysqli_query($koneksi, "select * from laporan_pengeluaran where date(tanggal)='$tgl_kemarin'");
$total_nomor_kemarin_pengeluaran = mysqli_num_rows($data_total_nomor_kemarin_pengeluaran);
?>
<!-- 1 Minggu -->
<?php
$tgl_seminggu = date('Y-m-d', strtotime('-7 day', strtotime(date("Y-m-d"))));
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pengeluaran_seminggu from laporan_pengeluaran where date(tanggal)>='$tgl_seminggu'");
$d = mysqli_fetch_assoc($data);
$jumlah_pengeluaran_seminggu = $d['jumlah_pengeluaran_seminggu'];

$tgl_seminggu = date('Y-m-d', strtotime('-7 day', strtotime(date("Y-m-d"))));
$data_total_nomor_satu_minggu_pengeluaran = mysqli_query($koneksi, "select * from laporan_pengeluaran where date(tanggal)>='$tgl_seminggu'");
$total_nomor_satu_minggu_pengeluaran = mysqli_num_rows($data_total_nomor_satu_minggu_pengeluaran);
?>
<!-- 1 Bulan -->
<?php
$bulan = date('m');
$tahun = date('Y');
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pengeluaran_sebulan from laporan_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
$d = mysqli_fetch_assoc($data);
$jumlah_pengeluaran_sebulan = $d['jumlah_pengeluaran_sebulan'];

$bulan = date('m');
$tahun = date('Y');
$data_total_nomor_satu_bulan_pengeluaran = mysqli_query($koneksi, "select * from laporan_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
$total_nomor_satu_bulan_pengeluaran = mysqli_num_rows($data_total_nomor_satu_bulan_pengeluaran);
?>
<!-- 1 Tahun -->
<?php
$tahun = date('Y');
$data = mysqli_query($koneksi, "select sum(jumlah) as jumlah_pengeluaran_setahun from laporan_pengeluaran where year(tanggal)>='$tahun'");
$d = mysqli_fetch_assoc($data);
$jumlah_pengeluaran_setahun = $d['jumlah_pengeluaran_setahun'];

$tahun = date('Y');
$data_total_nomor_satu_tahun_pengeluaran = mysqli_query($koneksi, "select * from laporan_pengeluaran where year(tanggal)>='$tahun'");
$total_nomor_satu_tahun_pengeluaran = mysqli_num_rows($data_total_nomor_satu_tahun_pengeluaran);
?>

<?php
$sisa_saldo = $jumlah_pemasukan_total - $jumlah_pengeluaran_total;
?>

<!-- Data INVOICE 1 Bulan -->
<?php
$bulan = date('m');
$tahun = date('Y');

// BELUM SELSEAI
$data = mysqli_query($koneksi, "select sum(total_harga) as jumlah_invoice_belum_selesai from laporan_invoice where month(tanggal_diterima)>='$bulan' AND year(tanggal_diterima)>='$tahun' AND username_agen ='$username' AND status='BELUM SELESAI'");
$d = mysqli_fetch_assoc($data);
$jumlah_invoice_belum_selesai = $d['jumlah_invoice_belum_selesai'];

// BELUM SELSEAI
$data = mysqli_query($koneksi, "select sum(total_harga) as jumlah_invoice_selesai from laporan_invoice where month(tanggal_diterima)>='$bulan' AND year(tanggal_diterima)>='$tahun' AND username_agen ='$username' AND status='SELESAI'");
$d = mysqli_fetch_assoc($data);
$jumlah_invoice_selesai = $d['jumlah_invoice_selesai'];

?>