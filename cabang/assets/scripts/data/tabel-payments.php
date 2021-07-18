<div class="row">
	<div class="col-sm-12 col-md-6 col-xl-4">
		<div class="card mb-3 widget-chart bg-strong-bliss card-border">
			<div class="widget-chart-content text-white">
				<div class="icon-wrapper rounded">
					<div class="icon-wrapper-bg bg-white opacity-4"></div>
					<i class="lnr-database text-white"></i>
				</div>
				<div class="widget-numbers"><?php echo $total_resi_satu_bulan; ?></div>
				<div class="widget-subheading">Resi Input</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12 col-md-6 col-xl-4">
		<div class="card mb-3 widget-chart bg-arielle-smile card-border">
			<div class="widget-chart-content text-white">
				<div class="icon-wrapper rounded">
					<div class="icon-wrapper-bg bg-white opacity-4"></div>
					<i class="lnr-diamond text-white"></i>
				</div>
				<div class="widget-numbers">
					<?php
					echo number_format($jumlah_pemasukan_resi_sebulan, 0, ',', '.');
					?>
				</div>
				<div class="widget-subheading">Payments (Rp.)</div>
			</div>
		</div>
	</div>

	<div class="col-sm-12 col-md-6 col-xl-4">
		<div class="card mb-3 widget-chart bg-night-sky card-border">
			<div class="widget-chart-content text-white">
				<div class="icon-wrapper rounded">
					<div class="icon-wrapper-bg bg-white opacity-4"></div>
					<i class="lnr-envelope text-white"></i>
				</div>
				<div class="widget-numbers"><?php echo $data_invoice_satu_bulan; ?></div>
				<div class="widget-subheading">Invoice</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12 col-md-12 col-xl-12">
		<div class="main-card mb-3 card" style="padding-bottom:0px;">
			<div class="card-header-tab card-header">
				<div class="card-header-title font-weight-normal font_small_tabel">
					<a href="">
						<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin small_print"></i>
					</a>
					Resi Invoice : <?php echo tgl_Indonesia(date('F Y')); ?>
				</div>
				<div class="btn-actions-pane-right" style="display:none;">
					<a href="" data-toggle="modal" data-target="#modals_tambah_data_resi" data-backdrop="static" data-keyboard="false" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex button_versi_satu">
						Tambah Data
					</a>
				</div>
			</div>
			<div class="table-container desktop_overflow_none" style="padding:15px;">
				<table id="tabel_data_resi" class="table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Resi</th>
							<th>Asal</th>
							<th>Pengirim</th>
							<th>Tujuan</th>
							<th>Penerima</th>
							<th>Tanggal</th>
							<th>Pembayaran</th>
							<th>Marketing</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$bulan = date('m');
						$tahun = date('Y');
						$data = mysqli_query($koneksi, "select * from laporan_resi where username_agen ='$username' AND month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND metode_pembayaran='INVOICE'");
						while ($d = mysqli_fetch_array($data)) {
						?>
							<tr>

								<td style="text-align:center; width:5px;">
									<?php echo $no++; ?>
								</td>
								<td>
									<a href="payments-invoice?no_resi=<?php echo $d['no_resi']; ?>" class="text-danger" style="text-decoration:none; font-weight:500; text-transform:uppercase;">
										<?php echo $d['no_resi']; ?>
									</a>
								</td>
								<td>
									<?php echo $d['kota_agen']; ?>
								</td>
								<td>
									<?php echo $d['nama_pengirim']; ?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['tujuan_pengiriman']; ?>
								</td>
								<td>
									<?php echo $d['nama_penerima']; ?>
								</td>
								<td>
									<?php echo date('d-m-Y', strtotime($d['tanggal'])); ?>
									<?php echo date('H:i:s', strtotime($d['tanggal'])); ?>
								</td>
								<td style="text-transform:uppercase;">
									<?php
									if ($d['status'] == 1) {
										echo "<span class='badge badge-primary'>SELESAI</span>";
									} else { ?>
										<span class='badge badge-primary'>
											<a class="text-white" href="" data-toggle="modal" data-target="#modals_action_invoice_resi_<?php echo $d['no_resi']; ?>" data-backdrop="static" data-keyboard="false">
												INVOICE
											</a>
										</span>
									<?php } ?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['nama_marketing']; ?>
								</td>
								<td style="text-align:left;">
									Rp.
									<?php
									echo number_format($d['total_harga'], 0, ',', '.');
									?>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="7">Total</th>
							<th style="padding:0px; margin:0px; text-align:left; padding-left:10px;">
								Rp.
								<?php
								echo number_format($jumlah_pemasukan_invoice, 0, ',', '.');
								?>
							</th>
						</tr>
					</tfoot>
				</table>
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12 col-md-12 col-xl-12">
		<div class="main-card mb-3 card" style="padding-bottom:0px;">
			<div class="card-header-tab card-header">
				<div class="card-header-title font-weight-normal font_small_tabel">
					<a href="">
						<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin small_print"></i>
					</a>
					Resi Tunai :
					<?php echo tgl_Indonesia(date('F Y')); ?>
				</div>
				<div class="btn-actions-pane-right" style="display:none;">
					<a href="" data-toggle="modal" data-target="#modals_tambah_data_resi" data-backdrop="static" data-keyboard="false" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex button_versi_satu">
						Tambah Data
					</a>
				</div>
			</div>
			<div class="table-container desktop_overflow_none" style="padding:15px;">
				<table id="tabel_data_resi_2" class="table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Resi</th>
							<th>Asal</th>
							<th>Pengirim</th>
							<th>Tujuan</th>
							<th>Penerima</th>
							<th>Tanggal</th>
							<th>Pembayaran</th>
							<th>Marketing</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$bulan = date('m');
						$tahun = date('Y');
						$data = mysqli_query($koneksi, "select * from laporan_resi where username_agen ='$username' AND month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND metode_pembayaran='TUNAI'");
						while ($d = mysqli_fetch_array($data)) {
						?>
							<tr>
								<td style="text-align:center; width:5px;">
									<?php echo $no++; ?>
								</td>
								<td>
									<a class="text-danger" href="" data-toggle="modal" data-target="#modals_payments_laporan_resi_<?php echo $d['no_resi']; ?>" data-backdrop="static" data-keyboard="false" style="text-decoration:none; font-weight:500; text-transform:uppercase;">
										<?php echo $d['no_resi']; ?>
									</a>
								</td>
								<td>
									<?php echo $d['kota_agen']; ?>
								</td>
								<td>
									<?php echo $d['nama_pengirim']; ?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['tujuan_pengiriman']; ?>
								</td>
								<td>
									<?php echo $d['nama_penerima']; ?>
								</td>
								<td>
									<?php echo date('d-m-Y', strtotime($d['tanggal'])); ?>
									<?php echo date('H:i:s', strtotime($d['tanggal'])); ?>
								</td>
								<td style="text-transform:uppercase;">
									<?php
									if ($d['metode_pembayaran'] == 'TUNAI') {
										echo "<span class='badge badge-success'>TUNAI</span>";
									} else if ($d['metode_pembayaran'] == 'INVOICE') {
										echo "<span class='badge badge-primary'>INVOICE</span>";
									} else {
										echo "<span class='badge badge-warning'>COD</span>";
									}
									?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['nama_marketing']; ?>
								</td>
								<td style="text-align:left;">
									Rp.
									<?php
									echo number_format($d['total_harga'], 0, ',', '.');
									?>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="7">Total</th>
							<th style="padding:0px; margin:0px; text-align:left; padding-left:10px;">
								Rp.
								<?php
								echo number_format($jumlah_pemasukan_tunai, 0, ',', '.');
								?>
							</th>
						</tr>
					</tfoot>
				</table>
			</div>

		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-12 col-md-12 col-xl-12">
		<div class="main-card mb-3 card" style="padding-bottom:0px;">
			<div class="card-header-tab card-header">
				<div class="card-header-title font-weight-normal font_small_tabel">
					<a href="">
						<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin small_print"></i>
					</a>
					Resi COD : &nbsp;
					<?php echo tgl_Indonesia(date('F Y')); ?>
				</div>
				<div class="btn-actions-pane-right" style="display:none;">
					<a href="" data-toggle="modal" data-target="#modals_tambah_data_resi" data-backdrop="static" data-keyboard="false" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex button_versi_satu">
						Tambah Data
					</a>
				</div>
			</div>
			<div class="table-container desktop_overflow_none" style="padding:15px;">
				<table id="tabel_data_resi_3" class="table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th>No.</th>
							<th>Resi</th>
							<th>Asal</th>
							<th>Pengirim</th>
							<th>Tujuan</th>
							<th>Penerima</th>
							<th>Tanggal</th>
							<th>Pembayaran</th>
							<th>Marketing</th>
							<th>Jumlah</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$bulan = date('m');
						$tahun = date('Y');
						$data = mysqli_query($koneksi, "select * from laporan_resi where username_agen ='$username' AND month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND metode_pembayaran='COD'");
						while ($d = mysqli_fetch_array($data)) {
						?>
							<tr>
								<td style="text-align:center; width:5px;">
									<?php echo $no++; ?>
								</td>
								<td>
									<a class="text-danger" href="" data-toggle="modal" data-target="#modals_payments_laporan_resi_<?php echo $d['no_resi']; ?>" data-backdrop="static" data-keyboard="false" style="text-decoration:none; font-weight:500; text-transform:uppercase;">
										<?php echo $d['no_resi']; ?>
									</a>
								</td>
								<td>
									<?php echo $d['kota_agen']; ?>
								</td>
								<td>
									<?php echo $d['nama_pengirim']; ?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['tujuan_pengiriman']; ?>
								</td>
								<td>
									<?php echo $d['nama_penerima']; ?>
								</td>
								<td>
									<?php echo date('d-m-Y', strtotime($d['tanggal'])); ?>
									<?php echo date('H:i:s', strtotime($d['tanggal'])); ?>
								</td>
								<td style="text-transform:uppercase;">
									<?php
									if ($d['metode_pembayaran'] == 'TUNAI') {
										echo "<span class='badge badge-success'>TUNAI</span>";
									} else if ($d['metode_pembayaran'] == 'INVOICE') {
										echo "<span class='badge badge-primary'>INVOICE</span>";
									} else {
										echo "<span class='badge badge-warning'>COD</span>";
									}
									?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['nama_marketing']; ?>
								</td>
								<td style="text-align:left;">
									Rp.
									<?php
									echo number_format($d['total_harga'], 0, ',', '.');
									?>
								</td>
							</tr>
						<?php
						}
						?>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="7">Total</th>
							<th style="padding:0px; margin:0px; text-align:left; padding-left:10px;">
								Rp.
								<?php
								echo number_format($jumlah_pemasukan_cod, 0, ',', '.');
								?>
							</th>
						</tr>
					</tfoot>
				</table>
			</div>

		</div>
	</div>
</div>