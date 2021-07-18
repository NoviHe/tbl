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
					Pengiriman Periode : &nbsp;
					<strong>
						<?php echo tgl_Indonesia(date('F Y')); ?>
					</strong>
				</div>
				<div class="btn-actions-pane-right" style="display:none;">
					<a href="" data-toggle="modal" data-target="#modals_tambah_data_resi" data-backdrop="static" data-keyboard="false" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex button_versi_satu">
						Tambah Data
					</a>
				</div>
			</div>
			<div class="table-container desktop_overflow_none">
				<table id="tabel_data_resi" class="table table-hover table-striped table-bordered" style="width:100%">
					<thead>
						<tr>
							<th class="sorting_disabled"></th>
							<th>No.</th>
							<th>Resi</th>
							<th>Asal</th>
							<th>Pengirim</th>
							<th>Tujuan</th>
							<th>Penerima</th>
							<th>Tanggal</th>
							<th>Jumlah</th>
							<th>Pembayaran</th>
							<th>Marketing</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						$bulan = date('m');
						$tahun = date('Y');
						$data = mysqli_query($koneksi, "select * from laporan_resi where username_agen ='$username' AND month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' order by tanggal desc");
						while ($d = mysqli_fetch_array($data)) {
						?>
							<tr>
								<td style="text-align:center; width:5px;">
									<a class="text-danger" href="" data-toggle="modal" data-target="#modals_hapus_laporan_resi_<?php echo $d['no_resi']; ?>" data-backdrop="static" data-keyboard="false">
										<i class="fa fa-trash"></i>
									</a>
								</td>
								<td style="text-align:center; width:5px;">
									<?php echo $no++; ?>
								</td>
								<td>
									<a class="text-danger" href="" data-toggle="modal" data-target="#modals_edit_laporan_resi_<?php echo $d['no_resi']; ?>" data-backdrop="static" data-keyboard="false" style="text-decoration:none; font-weight:500; text-transform:uppercase;">
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
								<td style="text-align:left;">
									Rp.
									<?php
									echo number_format($d['total_harga'], 0, ',', '.');
									?>
								</td>
								<td style="text-align:left; text-transform:uppercase;">
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
							</tr>
						<?php
						}
						?>
					</tbody>
					<tfoot>
						<tr>
							<th class="sorting_disabled"></th>
							<th>No.</th>
							<th>Resi</th>
							<th>Asal</th>
							<th>Pengirim</th>
							<th>Tujuan</th>
							<th>Penerima</th>
							<th>Tanggal</th>
							<th>Jumlah</th>
							<th>Pembayaran</th>
							<th>Marketing</th>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>