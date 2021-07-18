<!-- <div class="row">
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
</div> -->

<div class="row">
	<div class="col-sm-12 col-md-12 col-xl-12">
		<div class="main-card mb-3 card" style="padding-bottom:0px;">
			<div class="card-header-tab card-header">
				<div class="card-header-title font-weight-normal font_small_tabel">
					<a href="">
						<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin small_print"></i>
					</a>
					Data Invoice Belum Selesai : <?php echo tgl_Indonesia(date('F Y')); ?>
				</div>
				<div class="btn-actions-pane-right">
					<a href="" data-toggle="modal" data-target="#modals_tambah_invoice" data-backdrop="static" data-keyboard="false" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex button_versi_satu">
						Tambah Data
					</a>
				</div>
			</div>
			<div class="table-container desktop_overflow_none" style="padding:15px;">
				<table id="tabel_data_resi" class="table table-hover table-striped table-bordered">
					<thead>
						<tr>
							<th>Action</th>
							<th>No.</th>
							<th>Resi</th>
							<th>Tanggal Diterima</th>
							<th>Tanggal Tempo</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nama Barang</th>
							<th>QTY</th>
							<th>Berat</th>
							<th>Total Harga</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$bulan = date('m');
						$tahun = date('Y');
						$data = mysqli_query($koneksi, "select * from laporan_invoice where username_agen ='$username' AND month(tanggal_diterima)>='$bulan' AND year(tanggal_diterima)>='$tahun' AND status='BELUM SELESAI'");
						while ($d = mysqli_fetch_array($data)) {
						?>
							<tr>
								<td style="text-align:center; width:5px;">
									<a class="text-white" href="" data-toggle="modal" data-target="#modals_konfirmasi_invoice_resi_<?php echo $d['id']; ?>" data-backdrop="static" data-keyboard="false">
										<span class='btn btn-primary'>KONFIRMASI?</span>
									</a>
								</td>
								<td style="text-align:center; width:5px;">
									<?php echo $no++; ?>
								</td>
								<td>
									<a href="cetak-invoice?no_resi=<?php echo $d['id']; ?>" class="text-danger" style="text-decoration:none; font-weight:500; text-transform:uppercase;">
										<?php echo $d['id']; ?>
									</a>
								</td>
								<td>
									<?php echo $d['tanggal_diterima']; ?>
								</td>
								<td>
									<?php echo $d['tanggal_tempo']; ?>
								</td>
								<td>
									<?php echo $d['nama']; ?>
								</td>
								<td>
									<?php echo $d['alamat']; ?>
								</td>
								<td>
									<?php echo $d['nama_barang']; ?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['qty']; ?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['berat']; ?>
									KG
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
							<th colspan="10">Total</th>
							<th style="padding:0px; margin:0px; text-align:left; padding-left:10px;">
								Rp.
								<?php
								echo number_format($jumlah_invoice_belum_selesai, 0, ',', '.');
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
					Data Invoice Selesai : <?php echo tgl_Indonesia(date('F Y')); ?>
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
							<th class="sorting_disabled"></th>
							<th>Status</th>
							<th>No.</th>
							<th>Resi</th>
							<th>Tanggal Diterima</th>
							<th>Tanggal Tempo</th>
							<th>Nama</th>
							<th>Alamat</th>
							<th>Nama Barang</th>
							<th>QTY</th>
							<th>Berat</th>
							<th>Total Harga</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$bulan = date('m');
						$tahun = date('Y');
						$data = mysqli_query($koneksi, "select * from laporan_invoice where username_agen ='$username' AND month(tanggal_diterima)>='$bulan' AND year(tanggal_diterima)>='$tahun' AND status='SELESAI'");
						while ($d = mysqli_fetch_array($data)) {
						?>
							<tr>
							<tr>
								<td style="text-align:center; width:5px;">
									<a class="text-danger" href="" data-toggle="modal" data-target="#modals_hapus_laporan_invoice_<?php echo $d['id']; ?>" data-backdrop="static" data-keyboard="false">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td style="text-align:center; width:5px;">
									<span class='btn btn-primary'>SELESAI</span>
								</td>
								<td style="text-align:center; width:5px;">
									<?php echo $no++; ?>
								</td>
								<td>
									<a href="cetak-invoice?no_resi=<?php echo $d['id']; ?>" class="text-danger" style="text-decoration:none; font-weight:500; text-transform:uppercase;">
										<?php echo $d['id']; ?>
									</a>
								</td>
								<td>
									<?php echo $d['tanggal_diterima']; ?>
								</td>
								<td>
									<?php echo $d['tanggal_tempo']; ?>
								</td>
								<td>
									<?php echo $d['nama']; ?>
								</td>
								<td>
									<?php echo $d['alamat']; ?>
								</td>
								<td>
									<?php echo $d['nama_barang']; ?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['qty']; ?>
								</td>
								<td style="text-align:left;">
									<?php echo $d['berat']; ?>
									KG
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
							<th colspan="11">Total</th>
							<th style="padding:0px; margin:0px; text-align:left; padding-left:10px;">
								Rp.
								<?php
								echo number_format($jumlah_invoice_selesai, 0, ',', '.');
								?>
							</th>
						</tr>
					</tfoot>
				</table>
			</div>

		</div>
	</div>
</div>