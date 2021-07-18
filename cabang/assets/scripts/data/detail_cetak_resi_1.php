<style>
	/* table,
	tr,
	td {
		border: 1px solid black;
	} */


	.tab_row {
		width: 100%;
		margin: 10px 0;
	}

	.col_1 {
		width: 40%;
		padding: 2px 10px;
	}

	.col_2 {
		width: 3%;
	}

	.col_3 {
		width: 57%;

	}

	@media print {
		/* .media_print {
			transform: scale(.8);
		} */

		/* table {
			page-break-inside: avoid;
		} */

		@page {
			size: 21.59cm 13.97cm;
		}

		.satu {
			width: 21cm;
			min-height: 13cm;
		}


		html,
		body {
			height: 100%;
			margin: 0 !important;
			padding: 0 !important;
			overflow: hidden;
		}

		.back_blue {
			background-color: #285DBF !important;
			-webkit-print-color-adjust: exact;
		}
	}
</style>
<div class="satu">
	<div class="container-fluid sat_u">
		<div class="row">
			<table width="100%">
				<thead>
					<tr>
						<td width="50%" style="vertical-align: top; padding-top: 10px;">
							<table style="margin: 10px 0 10px 0;">
								<thead>
									<tr>
										<td width="100px" style="vertical-align: top;" rowspan="2"><img src="../assets/images/konten/logo-tbl-white.png" class="img_logo"></td>
										<td class="judul_cetak">
											<h2 style="text-transform: uppercase; padding: 5px;">
												PT. Tahta Buana Logistic
											</h2>
										</td>
									</tr>
									<tr>
										<td>
											<?php
											$data = mysqli_query($koneksi, "select * from db_usermanager where username='$username' AND tipe_akun='agen'");
											while ($d = mysqli_fetch_array($data)) {
											?>
												<p style="padding: 5px;">
													<?php echo $d['alamat']; ?>
												</p>
											<?php
											}
											?>
										</td>
									</tr>
								</thead>
							</table>
						</td>
						<td width="15%"></td>
						<td width="35%" class="back_blue" style="vertical-align: top; background-color: #285DBF; padding-top: 10px;">
							<table style="margin: 10px 0 10px 0; ">
								<thead>
									<tr>
										<td>
											<?php
											$data = mysqli_query($koneksi, "select * from laporan_resi where no_resi='$no_resi' AND username_agen='$username'");
											while ($d = mysqli_fetch_array($data)) {
											?>
												<h2 class="no_resi" style=" text-align: center;text-transform: uppercase; padding: 0 10px ; color: #285dbf; font-weight: 700; font-size: 20px;">
													<?php echo $d['no_resi']; ?>
												</h2>
											<?php
											}
											?>
										</td>
										<td rowspan="2">
											<?php
											$data = mysqli_query($koneksi, "select * from laporan_resi where no_resi='$no_resi' AND username_agen='$username'");
											while ($d = mysqli_fetch_array($data)) {
											?>
												<div class="qr_code" width="50px">
													<img src="../.core/.assets/.img/qrcode/<?php echo $d['no_resi']; ?>.png" class="img_qrcode">
												</div>

											<?php
											}
											?>
										</td>
									</tr>
									<tr>
										<td>
											<?php
											$data = mysqli_query($koneksi, "select * from db_usermanager where username='$username' AND tipe_akun='agen'");
											while ($d = mysqli_fetch_array($data)) {
											?>
												<p class="cetak_p" style="font-size:14px; font-weight:500; color: #fff; text-align: center; vertical-align: top;">
													<?php echo $d['no_telp']; ?>
													<br>
													www.tahtabuanalogistic.com
												</p>
											<?php
											}
											?>
										</td>
									</tr>
								</thead>
							</table>
						</td>
					</tr>
				</thead>
			</table>
		</div>
		<div class="row" style="align-items: center;">
			<?php
			$data = mysqli_query($koneksi, "select * from laporan_resi where no_resi='$no_resi' AND username_agen='$username'");
			while ($d = mysqli_fetch_array($data)) {
			?>
				<table width="100%" style="border: 2px solid black; line-height: 25px;">
					<tr>
						<td width="50%" rowspan="2" style="vertical-align:top;">
							<table class="tab_row">
								<tr>
									<td class="col_1">
										Nama Pengirim
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['nama_pengirim']; ?>
									</td>
								</tr>
								<tr>
									<td class="col_1">
										No. Telp Pengirim
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['no_telp_pengirim']; ?>
									</td>
								</tr>
								<tr>
									<td class="col_1">
										Nama Penerima
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['nama_penerima']; ?>
									</td>
								</tr>
								<tr>
									<td class="col_1">
										No. Telp Penerima
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['no_telp_penerima']; ?>
									</td>
								</tr>
								<tr>
									<td class="col_1" style="vertical-align:top;">
										Alamat Penerima
									</td>
									<td class="col_2" style="vertical-align:top;">
										:
									</td>
									<td class="col_3 alamat_keterangan_cetak_td" style="vertical-align:top; line-height:25px; padding-top:4px;">
										<div class="cetak_alamat_keterangan alamat_cetak" style="height:80px; overflow:hidden;">
											<?php echo $d['alamat_penerima']; ?>
										</div>
									</td>
								</tr>
								<tr>
									<td class="col_1">
										Kota Tujuan
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['tujuan_pengiriman']; ?>
									</td>
								</tr>
								<tr>
									<td class="col_1">
										Jenis Barang
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['jenis_barang']; ?>
									</td>
								</tr>
								<tr>
									<td class="col_1">
										Berat Barang
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['berat_kiriman']; ?> Kg
									</td>
								</tr>
								<tr>
									<td class="col_1">
										Dimensi / Volume
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['dimensi_panjang']; ?> cm x
										<?php echo $d['dimensi_lebar']; ?> cm x
										<?php echo $d['dimensi_tinggi']; ?> cm
									</td>
								</tr>
							</table>
						</td>
						<td width="50%" style="border: 2px solid black;">
							<table class="tab_row">
								<tr>
									<td class="col_1">
										Service
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['layanan']; ?>
									</td>
								</tr>
								<tr>
									<td class="col_1">
										Jumlah Barang
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['jumlah_barang']; ?>
									</td>
								</tr>
								<tr>
									<td class="col_1">
										Harga
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										Rp.
										<?php
										echo number_format($d['total_harga'], 0, ',', '.');
										?>
									</td>
								</tr>
								<tr>
									<td class="col_1">
										Metode Pembayaran
									</td>
									<td class="col_2">
										:
									</td>
									<td class="col_3">
										<?php echo $d['metode_pembayaran']; ?>
									</td>
								</tr>
								<tr>
									<td class="col_1" style="vertical-align:top;">
										Tanggal
										<br>
										Keterangan
									</td>
									<td class="col_2" style="vertical-align:top;">
										:
										<br>
										:
									</td>
									<td class="col_3 alamat_keterangan_cetak_td" style="vertical-align:top; line-height:25px; padding-top:2px;">
										<div class="tanggal_ket" style="height:20px; overflow:hidden; border:0px solid #000; padding-top:1px;">
											<?php echo tgl_Indonesia(date('D, d F Y', strtotime(($d['tanggal']), strtotime(date("D, d F Y"))))); ?>
										</div>
										<div class="cetak_alamat_keterangan tanggal_ket" style="height:60px; overflow:hidden; border:0px solid #000; padding-top:12px;">
											<?php echo $d['keterangan']; ?>
										</div>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td width="50%" style="border: 2px solid black;">
							<table class="tab_row">
								<tr height="70px">
									<td class="font_bold" width="50%" style="vertical-align:top;font-weight:bold; color:#000; padding-left: 10px;">
										<em>Tanda Tangan Penerima,</em>
									</td>
									<td class="font_bold" width="50%" style="vertical-align:top;font-weight:bold; color:#000; text-align: right; padding-right: 20px;">
										<em>Tanda Tangan Kurir.</em>
									</td>
								</tr>
								<tr>
									<td class="font_bold" style="padding-left: 10px;font-weight:bold; color:#000;">
										<em>
											(<?php echo $d['nama_penerima']; ?>)
										</em>
									</td>
									<td class="font_bold" style="font-weight:bold; color:#000; text-align: right; padding-right: 20px;">
										<em>
											(.........................)
										</em>
									</td>
								</tr>
							</table>
						</td>
					</tr>
				</table>
			<?php
			}
			?>
		</div>
	</div>
</div>