	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header">
					<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
						<a href="laporan-pengeluaran-cetak-data">
							<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin" style="margin-top:5px;"> </i>
						</a>
						Laporan Pengeluaran : &nbsp;
						<strong>
							<?php echo tgl_Indonesia(date('F Y'));?> 
						</strong>
					</div>
					<div class="btn-actions-pane-right actions-icon-btn mobile_hide" style="margin-right:5px;">
						<div class="btn-group dropdown">
							<button type="button" data-toggle="dropdownx" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
								<i class="pe-7s-more btn-icon-wrapper"></i>
							</button>
						</div>
					</div>
				</div>	
				<div class="table-container desktop_overflow_none" style="padding:15px;">
					<table id="tabel_laporan_pengeluaran" class="table table-hover table-striped table-bordered">
						<thead>
						<tr>
							<th>No.</th>
							<th>Tanggal</th>
							<th>Kode</th>
							<th>Agen</th>
							<th>Akun</th>
							<th>Jumlah</th>
						</tr>
						</thead>
						<tbody>			
						<?php
							$no = 1;
							$bulan=date('m');
							$tahun=date('Y');
							$data = mysqli_query($koneksi,"select * from laporan_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
							while($d = mysqli_fetch_array($data)){
						?>	
						<tr>
							<td style="text-align:center; width:5px;">
								<?php echo $no++;?>
							</td>
							<td style="text-align:center; width:150px;">
								<?php echo date('d-m-Y', strtotime($d['tanggal']));?>
								-
								<?php echo date('H:i:s', strtotime($d['tanggal']));?>
							</td>
							<td style="text-align:center; width:100px;">
								<a class="text-danger" href="" data-toggle="modal" data-target="#modals_edit_data_pengeluaran_<?php echo $d['no_resi'];?>" data-backdrop="static" data-keyboard="false" style="text-decoration:none; font-weight:500;">
									<?php echo $d['no_resi'];?>
								</a>
							</td>
							<td style="text-align:center; width:100px;">
								<?php echo $d['username_agen'];?>
							</td>
							<td style="text-align:center; width:150px;">
								<?php echo $d['username'];?>
							</td>
							<td style="width:99px;">
								Rp. 
								<?php 
									echo number_format($d['jumlah'],0,',','.');
								?>
							</td>
						</tr>
						<?php 
						}
						?>			
						</tbody>
						<tfoot>
						<tr>
							<th colspan="5">Total</th>
							<th style="padding:0px; margin:0px; text-align:left; padding-left:10px;">
								Rp. 
								<?php 
									echo number_format($jumlah_pengeluaran_sebulan,0,',','.');
								?>
							</th>
						</tr>
						</tfoot>
					</table>
				</div>
				
			</div>
		</div>
	</div>
	
	
	
	