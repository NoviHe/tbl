<style>
	/* table,
	th,
	td {
		border: 1px solid black;
	} */

	.col_satu {
		width: 150px;
		vertical-align: top;
	}

	.col_dua {
		width: 20px;
		vertical-align: top;
	}

	.tanggal {
		text-align: center;
		margin: 10px;
		border: 2px solid black;
	}

	.nominal {
		text-align: center;
		margin: 10px;
		border: 2px solid black;
	}

	.pembayaran {
		text-align: start;
		font-size: 15px;
		border: 2px solid black;
		padding: 10px;
	}
</style>
<div class="satu">
	<div class="container-fluid" id="resi_top">
		<div class="row">
			<table width="100%">
				<thead>
					<tr style="text-align: center;">
						<td style="width: 140px;">
							<figure>
								<img src="../assets/images/konten/logo-tbl-white.png" class="img_logo">
								<figcaption style="font-size: 7pt;">PT. Tahta Buana Logistik</figcaption>
							</figure>
						</td>
						<td style="font-size: 25px; color: black; padding-left: 15px; width: 100px;">
							INVOICE
						</td>
						<td style="font-size: 18px; color: black; ">
							<p style="text-align: right; margin-top: 15px;">
								<?php echo date(' d F Y'); ?></p>
						</td>
					</tr>
					<tr>
						<td colspan="3">
							<hr style="border: 1px solid black;">
						</td>
					</tr>
				</thead>
			</table>
		</div>
	</div>
	<?php
	$data = mysqli_query($koneksi, "select * from laporan_invoice where id='$no_resi' AND username_agen='$username'");
	$d = mysqli_fetch_array($data)
	?>
	<div class="container-fluid">
		<div class="row m-lg-1">
			<table width="100%">
				<tbody style="font-size: 12pt; color: black;">
					<tr>
						<td class="col_satu">Customer</td>
						<td class="col_dua">:</td>
						<td colspan="4"><?= $d['nama'] ?></td>
					</tr>
					<tr>
						<td class="col_satu">Tujuan</td>
						<td class="col_dua">:</td>
						<td colspan="4"><?= $d['alamat'] ?></td>
					</tr>
					<tr>
						<td class="col_satu">No Resi</td>
						<td class="col_dua">:</td>
						<td class="col_tiga_plus"><?= $d['id'] ?></td>
						<td class="col_satu">Tanggal Resi</td>
						<td class="col_dua">:</td>
						<td class="col_tiga_plus"><?= date('d F Y', strtotime($d['tanggal_resi']))  ?></td>
					</tr>
					<tr>
						<td class="col_satu">Jenis Barang</td>
						<td class="col_dua">:</td>
						<td colspan="4"><?= $d['jenis_barang'] ?></td>
					</tr>
					<tr>
						<td class="col_satu">Asuransi</td>
						<td class="col_dua">:</td>
						<td colspan="4"><?= $d['asuransi'] ?></td>
					</tr>
					<tr>
						<td class="col_satu">Qyt</td>
						<td class="col_dua">:</td>
						<td colspan="4"><?= $d['qty'] ?></td>
					</tr>
					<tr>
						<td class="col_satu">Berat</td>
						<td class="col_dua">:</td>
						<td colspan="4"><?= $d['berat'] ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="container-fluid mt-4">
		<div class="row m-lg-1">
			<table width="100%">
				<tbody style="color:black; font-size: 18px;">
					<tr>
						<td width="44%">TANGGAL BARANG DITERIMA :</td>
						<td width="2%"></td>
						<td width="44%">NOMINAL :</td>
					</tr>
					<tr>
						<td class="tanggal"><?= date('d F Y', strtotime($d['tanggal_diterima']))  ?></td>
						<td></td>
						<td class="nominal" style="font-size: 26pt;" rowspan="3">Rp. <?php echo number_format($d['total_harga'], 0, ',', '.'); ?> </td>
					</tr>
					<tr>
						<td>TANGGAL JATUH TEMPO :</td>
						<td>
						</td>
					</tr>
					<tr>
						<td class="tanggal"><?= date('d F Y', strtotime($d['tanggal_tempo']))  ?></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<div class="container-fluid mt-3">
		<div class="row m-lg-1">
			<table width="100%">
				<tbody style="color:black;">
					<tr>
						<td width="55%" style="font-size: 12px; padding-left: 10px;">
							Catatan:<br>
							*Jatuh Tempo Pembayaran terhitung 14 hari kalender setelah barang diterima.<br>
							**Apabila jatuh tempo dihari libur, maka pembayaran harus dilakukan sebelum hari libur.
						</td>
						<td width="10%"></td>
						<td width="35%" style="font-size: 12pt; vertical-align: top;">
							Tanda Tangan,
						</td>
					</tr>
					<tr>
						<td class="pembayaran">
							Pembayaran bisa dilakukan ke No. Rekening: <br>
							PT Tahta Buana Logistik (Bank BJB cab. Sukajadi) <br>
							No. Rek. 0081323316656
						</td>
						<td></td>
						<td style="font-size: 12pt; vertical-align: bottom;">(Direktur)</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>