	<center>
		<img src="../.core/.assets/.img/qrcode/<?php echo $d['no_resi'];?>.png" style="margin:15px auto; width:150px;">
	</center>
	<table class="tabel_data">
		<tr>
			<td class="judul" colspan="3" style="text-align:center; text-transform:uppercase;font-weight:600;">
				Detail Data Resi
			</td>
		</tr>
		<!-- Mulai -->
		<tr>
			<td class="judul" style="width:40%;">
				No. Resi
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['no_resi'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Layanan
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['layanan'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Asal Pengiriman
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi" style="text-transform:uppercase;">
				<?php echo $d['kota_agen'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Tujuan Pengiriman
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['tujuan_pengiriman'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Biaya Pengiriman Per Kg
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				Rp. 
				<?php 
					echo number_format($d['biaya_pengiriman'],0,',','.');
				?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Berat Kiriman
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['berat_kiriman'];?> Kg
			</td>
		</tr>
		<tr>
			<td class="judul">
				Total Biaya Pengiriman
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				Rp. 
				<?php 
					echo number_format($d['total_harga'],0,',','.');
				?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Metode Pembayaran
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['metode_pembayaran'];?>
			</td>
		</tr>
		<!-- Selesai -->
	</table>
	
	<!-- Tabel Detail Data Barang -->
	<table class="tabel_data">
		<tr>
			<td class="judul" colspan="3" style="text-align:center; text-transform:uppercase;font-weight:600;">
				Detail Data Barang
			</td>
		</tr>
		<!-- Mulai -->
		<tr>
			<td class="judul">
				Jenis Barang
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['jenis_barang'];?>
			</td>
		</tr>
		<tr>
			<td class="judul" style="width:40%;">
				Dimensi / Volume [CM]
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['dimensi_panjang'];?> cm x
				<?php echo $d['dimensi_lebar'];?> cm x
				<?php echo $d['dimensi_tinggi'];?> cm										
			</td>
		</tr>
		<tr>
			<td class="judul">
				Jumlah Barang
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['jumlah_barang'];?>
			</td>
		</tr>
		<!-- Selesai -->
	</table>
	
	<!-- Tabel Detail Data Pengiriman -->
	<table class="tabel_data">
		<tr>
			<td class="judul" colspan="3" style="text-align:center; text-transform:uppercase;font-weight:600;">
				Detail Data Pengiriman
			</td>
		</tr>
		<!-- Mulai -->
		<tr>
			<td class="judul" style="width:40%;">
				Nama Pengirim
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['nama_pengirim'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				No. Telp Pengirim
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['no_telp_pengirim'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Nama Penerima
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['nama_penerima'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				No. Telp Penerima
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['no_telp_penerima'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Alamat Penerima
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['alamat_penerima'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Keterangan
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['keterangan'];?>
			</td>
		</tr>
		<!-- Selesai -->
	</table>
	
	<!-- Tabel Data Marketing -->
	<table class="tabel_data">
		<tr>
			<td class="judul" colspan="3" style="text-align:center; text-transform:uppercase;font-weight:600;">
				Marketing
			</td>
		</tr>
		<!-- Mulai -->
		<tr>
			<td class="judul">
				Kode Agen
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi" style="text-transform:uppercase;">
				<?php echo $d['username_agen'];?>
			</td>
		</tr>
		<tr>
			<td class="judul" style="width:40%;">
				Kota Agen
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi" style="text-transform:uppercase;">
				<?php echo $d['kota_agen'];?>									
			</td>
		</tr>
		<tr>
			<td class="judul">
				Nama Marketing
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<?php echo $d['nama_marketing'];?>
			</td>
		</tr>
		<tr>
			<td class="judul">
				Tanggal
			</td>
			<td class="titik_dua">
				:
			</td>
			<td class="isi">
				<i class="pe-7s-date"> </i> <?php echo tgl_Indonesia(date('D, d F Y',strtotime(($d['tanggal']), strtotime( date("D, d F Y") )))) ;?>
				&nbsp; 
				<i class="pe-7s-alarm"></i> <?php echo date('H:i:s', strtotime($d['tanggal']));?>
			</td>
		</tr>
		<!-- Selesai -->
	</table>	