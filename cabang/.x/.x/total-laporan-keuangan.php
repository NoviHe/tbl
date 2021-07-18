	<div class="mb-3 card">
		<div class="card-header-tab card-header">
			<div class="card-header-title text-capitalize font-weight-normal" style="margin-left:-5px;">
				Laporan Keuangan Keseluruhan
			</div>
		</div>
		<div class="no-gutters row">
			<div class="col-sm-6 col-md-4 col-xl-4">
				<div class="card no-shadow rm-border bg-transparent widget-chart text-left">
					<div class="icon-wrapper rounded-circle">
						<div class="icon-wrapper-bg opacity-10 bg-success"></div>
						<i class="lnr-chevron-up text-white opacity-8"></i>
					</div>
					<div class="widget-chart-content">
						<div class="widget-subheading">
							Total Pemasukan IDR
						</div>
						<div class="widget-numbers font_edit">
							<?php 
								echo number_format($jumlah_pemasukan_total,0,',','.');
							?>
						</div>
						<div class="widget-description opacity-8 text-focus">
							<?php echo $total_data_pemasukan;?> Data
						</div>
					</div>
				</div>
				<div class="divider m-0 d-md-none d-sm-block"></div>
			</div>
			<div class="col-sm-6 col-md-4 col-xl-4">
				<div class="card no-shadow rm-border bg-transparent widget-chart text-left">
					<div class="icon-wrapper rounded-circle">
						<div class="icon-wrapper-bg opacity-10 bg-danger"></div>
						<i class="lnr-chevron-down text-white opacity-8"></i>
					</div>
					<div class="widget-chart-content">
						<div class="widget-subheading">
							Total Pengeluaran IDR
						</div>
						<div class="widget-numbers font_edit">
							<?php 
								echo number_format($jumlah_pengeluaran_total,0,',','.');
							?>
						</div>
						<div class="widget-description opacity-8 text-focus">
							<?php echo $total_data_pengeluaran;?> Data
						</div>
					</div>
				</div>
				<div class="divider m-0 d-md-none d-sm-block"></div>
			</div>
			<div class="col-sm-6 col-md-4 col-xl-4">
				<div class="card no-shadow rm-border bg-transparent widget-chart text-left">
					<div class="icon-wrapper rounded-circle">
						<div class="icon-wrapper-bg opacity-10 bg-warning"></div>
						<i class="lnr-sync text-white opacity-8"></i>
					</div>
					<div class="widget-chart-content">
						<div class="widget-subheading">
							Sisa Saldo IDR
						</div>
						<div class="widget-numbers font_edit">
							<?php 
								echo number_format($sisa_saldo,0,',','.');
							?>
						</div>
						<div class="widget-description opacity-8 text-focus">
							Berdasarkan Data
						</div>
					</div>
				</div>
				<div class="divider m-0 d-md-none d-sm-block"></div>
			</div>
		</div>
	</div>