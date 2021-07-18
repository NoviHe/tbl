	<div class="row">
		<div class="col-lg-12 col-xl-6">
			<div class="main-card mb-3 card">
				<div class="grid-menu grid-menu-1col">
					<div class="no-gutters row">
						<div class="col-sm-12" style="border:none;">
							<div class="widget-chart widget-chart-hover" style="padding:65px 0px 230px 0px;">
								<h5 class="menu-header-title text-danger" style="margin-bottom:50px;">Pengeluaran Bulan Ini</h5>
								<div class="widget-numbers">
									Rp. 
									<?php 
										echo number_format($jumlah_pengeluaran_sebulan,0,',','.');
									?>
								</div>
								<div class="widget-subheading text-danger" style="font-weight:500;">
									<?php echo tgl_Indonesia(date('F Y'));?>
									<br>
									<?php echo $total_nomor_satu_bulan_pengeluaran;?> Data
								</div>
								 <div class="widget-chart-wrapper">
									<div id="dashboard-sparklines-simple-2"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-xl-6">
			<div class="main-card mb-3 card">
				<div class="grid-menu grid-menu-1col">
					<div class="no-gutters row">
						<div class="col-sm-6">
							<div class="widget-chart widget-chart-hover" style="padding:20px 0px 94px 0px;">
								<h5 class="menu-header-title text-danger" style="font-size:13px; margin-bottom:30px;">
									Pengeluaran Hari Ini
								</h5>
								<div class="widget-numbers" style="font-size:20px; margin-bottom:20px;">
									Rp. 
									<?php 
										echo number_format($jumlah_pengeluaran_hari_ini,0,',','.');
									?>
								</div>
								<div class="widget-subheading text-danger" style="font-weight:500; font-size:12px;">
									<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_sekarang)));?>
									<br>
									<?php echo $total_nomor_hari_ini_pengeluaran;?> Data
								</div>
								<div class="widget-chart-wrapper">
									<div id="dashboard-sparklines-1"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="widget-chart widget-chart-hover" style="padding:20px 0px 94px 0px;">
								<h5 class="menu-header-title text-danger" style="font-size:13px; margin-bottom:30px;">
									Pengeluaran Kemarin
								</h5>
								<div class="widget-numbers" style="font-size:20px; margin-bottom:20px;">
									Rp. 
									<?php 
										echo number_format($jumlah_pengeluaran_hari_kemarin,0,',','.');
									?>
								</div>
								<div class="widget-subheading text-danger" style="font-weight:500; font-size:12px;">
									<?php echo tgl_Indonesia(date('d F Y', strtotime($tgl_kemarin)));?>
									<br>
									<?php echo $total_nomor_kemarin_pengeluaran;?> Data
								</div>
								<div class="widget-chart-wrapper">
									<div id="dashboard-sparklines-2"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="widget-chart widget-chart-hover" style="padding:20px 0px 94px 0px;">
								<h5 class="menu-header-title text-danger" style="font-size:13px; margin-bottom:30px;">
									Pengeluaran Minggu Ini
								</h5>
								<div class="widget-numbers" style="font-size:20px; margin-bottom:20px;">
									Rp. 
									<?php 
										echo number_format($jumlah_pengeluaran_seminggu,0,',','.');
									?>
								</div>
								<div class="widget-subheading text-danger" style="font-weight:500; font-size:12px;">
									<?php echo date('d', strtotime($tgl_seminggu));?>
									- 
									<?php echo tgl_Indonesia(date('d F Y'));?>
									<br>
									<?php echo $total_nomor_satu_minggu_pengeluaran;?> Data
								</div>
								 <div class="widget-chart-wrapper">
									<div id="dashboard-sparklines-3"></div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="widget-chart widget-chart-hover" style="padding:20px 0px 94px 0px;">
								<h5 class="menu-header-title text-danger" style="font-size:13px; margin-bottom:30px;">
									Pengeluaran Tahun Ini
								</h5>
								<div class="widget-numbers" style="font-size:20px; margin-bottom:20px;">
									Rp. 
									<?php 
										echo number_format($jumlah_pengeluaran_setahun,0,',','.');
									?>
								</div>
								<div class="widget-subheading text-danger" style="font-weight:500; font-size:12px;">
									Tahun <?php echo tgl_Indonesia(date('Y'));?>
									<br>
									<?php echo $total_nomor_satu_tahun_pengeluaran;?> Data
								</div>
								 <div class="widget-chart-wrapper">
									<div id="dashboard-sparklines-4"></div>
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>