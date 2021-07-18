	<?php
		$bulan=date('m');
		$tahun=date('Y');
		
		// CASH
		$data = mysqli_query($koneksi,"select sum(total_harga) as jumlah_pemasukan_cash from laporan_resi where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen ='$username' AND metode_pembayaran='CASH'");
		$d = mysqli_fetch_assoc($data);
		$jumlah_pemasukan_cash = $d['jumlah_pemasukan_cash'];
	?>
	
	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header">
					<div class="card-header-title font-weight-normal font_small_tabel">
						<a href="">
							<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin small_print"></i>
						</a>
						Resi Cash : &nbsp;
						<?php echo tgl_Indonesia(date('F Y'));?> 
						(Akan Dihapus Bulan Maret 2021)
					</div>
					<div class="btn-actions-pane-right" style="display:none;">
						<a href="" data-toggle="modal" data-target="#modals_tambah_data_resi" data-backdrop="static" data-keyboard="false" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex button_versi_satu">
							Tambah Data
						</a>
					</div>
				</div>	
				<div class="table-container desktop_overflow_none" style="padding:15px;">
					<table id="tabel_data_resi_x" class="table table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>Resi</th>
								<th>Asal</th>
								<th>Tujuan</th>
								<th>Tanggal</th>
								<th>Pembayaran</th>
								<th>Marketing</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>			
						<?php
							$no = 1;
							$bulan=date('m');
							$tahun=date('Y');
							$data = mysqli_query($koneksi,"select * from laporan_resi where username_agen ='$username' AND month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND metode_pembayaran='CASH'");
							while($d = mysqli_fetch_array($data)){
						?>	
						<tr>
							<td style="text-align:center; width:5px;">
								<?php echo $no++;?>
							</td>
							<td>
								<a class="text-danger" href="" data-toggle="modal" data-target="#modals_payments_laporan_resi_<?php echo $d['no_resi'];?>" data-backdrop="static" data-keyboard="false" style="text-decoration:none; font-weight:500; text-transform:uppercase;">
									<?php echo $d['no_resi'];?>
								</a>
							</td>
							<td>
								<?php echo $d['kota_agen'];?>
							</td>
							<td>
								<?php echo $d['tujuan_pengiriman'];?>
							</td>
							<td>
								<?php echo date('d-m-Y', strtotime($d['tanggal']));?>
								<?php echo date('H:i:s', strtotime($d['tanggal']));?>
							</td>
							<td style="text-transform:uppercase;">
								<?php echo $d['metode_pembayaran'];?>
							</td>
							<td style="text-align:left;">
								<?php echo $d['nama_marketing'];?>
							</td>
							<td style="text-align:left;">
								Rp. 
								<?php 
									echo number_format($d['total_harga'],0,',','.');
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
									echo number_format($jumlah_pemasukan_cash,0,',','.');
								?>
							</th>
						</tr>
						</tfoot>
					</table>
				</div>
				
			</div>
		</div>
	</div>