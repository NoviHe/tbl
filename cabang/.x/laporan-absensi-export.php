<!DOCTYPE html>
<html>
<head>
	<title>&nbsp;</title>
</head>
<body>	
	<?php
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Laporan_Absensi_Karyawan_BTS_Cargo.xls");
	?>
		
	<?php		
	function tgl_Indonesia($indo_tgl){
		$tr   = trim($indo_tgl);
		$indo_tgl    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
		return $indo_tgl;
	}
	?>
	
	<?php 
		$bulan=date('m');
		$tahun=date('Y');
		$bulan_ini = date("d-m-Y");
		//$bulan=01;
		//$tahun=2021;
		//$bulan_ini = date("01-01-2021");
	?>
	
	<center>
		<h1>
			<br>
			Laporan Absensi Karyawan BTS Cargo : <?php echo tgl_Indonesia(date('F Y'));?>
		</h1>
	</center>
	<table border="1">
		<tr>
			<th rowspan="2" style="background-color:#eee;">
				No.
			</th>
			<th rowspan="2" style="background-color:#eee;">
				Nama
			</th>
			<th rowspan="2" style="background-color:#eee;">
				ID Karyawan
			</th>
			<th rowspan="2" style="background-color:#eee;">
				Absen
			</th>
			<th colspan="27" style="text-align:center; border-right:none; background-color:#eee;">
				Tanggal
			</th>
		</tr>
		<tr>
			<?php 
				$tgl_pertama = date('1', strtotime($bulan_ini));
				$tgl_terakhir = date('t', strtotime($bulan_ini));
				for ($i=$tgl_pertama; $i <= $tgl_terakhir; $i++) { 
					echo "<th style='background-color:#eee;'>$i</th>";
				}
			?>
		</tr>
		<?php 
			include "../config.php";
		?>

		<?php
			$no = 1;
			$data = mysqli_query($koneksi,"select * from db_usermanager where tipe_akun='staf_karyawan' order by nama asc");
			while($d = mysqli_fetch_array($data)){
		?>	
		<tr>
			<th rowspan="2" style="text-align:center; font-weight:normal;">
				<?php echo $no++;?>
			</th>
			<th rowspan="2" style="text-align:left; font-weight:normal;">
				<?php echo $d['nama'];?>
			</th>
			<th rowspan="2" style="text-align:center; font-weight:normal;">
				<?php echo $d['username'];?>
			</th>
			<td style="font-weight:normal; text-align:center;">&nbsp; Masuk &nbsp;</td>
			<?php 
				$tgl_pertama = date('1', strtotime($bulan_ini));
				$tgl_terakhir = date('t', strtotime($bulan_ini));
				for ($i=$tgl_pertama; $i <= $tgl_terakhir; $i++) { 
					$stmt = mysqli_query($koneksi , "select tanggal from db_karyawan where year(tanggal) = '".$tahun."' and month(tanggal) = '".$bulan."' and day(tanggal) = '".$i."' and jenis_absen = 'absen masuk' and nama =  '".$d['nama']."'");
					if(mysqli_num_rows($stmt) > 0) 
					{
						$stmtRes = $stmt->fetch_assoc();
						echo "<td style='text-align:center;'>&nbsp;&nbsp;".date('H:i:s', strtotime($stmtRes['tanggal']))."&nbsp;&nbsp;</td>";
					} else {
						echo "<td style='text-align:center;'>-</td>";
					}
					
				}
				
			?>
		</tr>
		<tr>
			<td style="font-weight:normal; text-align:center;">&nbsp; Pulang &nbsp;</td>
			<?php 
				$tgl_pertama = date('1', strtotime($bulan_ini));
				$tgl_terakhir = date('t', strtotime($bulan_ini));
				for ($i=$tgl_pertama; $i <= $tgl_terakhir; $i++) { 
					$stmt = mysqli_query($koneksi , "select tanggal from db_karyawan where year(tanggal) = '".$tahun."' and month(tanggal) = '".$bulan."' and day(tanggal) = '".$i."' and jenis_absen = 'absen pulang' and nama =  '".$d['nama']."'");
					if(mysqli_num_rows($stmt) > 0) 
					{
						$stmtRes = $stmt->fetch_assoc();
						echo "<td style='text-align:center;'>&nbsp;&nbsp;".date('H:i:s', strtotime($stmtRes['tanggal']))."&nbsp;&nbsp;</td>";
					} else {
						echo "<td style='text-align:center;'>-</td>";
					}
					
				}
			?>
		</tr>
		<?php 
		}
		?>	
	</table>
	<p>
		<b>Keterangan :</b>
		<br>
		Jam:Menit:Detik
	</p>
</body>
</html>