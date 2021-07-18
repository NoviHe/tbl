	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header">
					<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
						<a href="laporan-pemasukan-cetak-data">
							<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin" style="margin-top:5px;"> </i>
						</a>
						Laporan Absensi : &nbsp;
						<strong>
							<?php 
								$bulan=date('m');
								$tahun=date('Y');
							?>
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
				<div style="width:944px; overflow-x:auto;white-space:nowrap;">
					<?php 
						$hari_ini = date("d-m-Y");
						$tgl_pertama = date('1', strtotime($hari_ini));
						$tgl_terakhir = date('t', strtotime($hari_ini));
						for ($i=$tgl_pertama; $i <= $tgl_terakhir; $i++) { 
							echo "<div class='judul_tanggal'>$i</div>";
						}
					?>
				</div>
				
			</div>
		</div>
	</div>