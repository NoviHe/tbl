	<?php include "assets/scripts/head.php";?>
	<?php $halaman = "laporan";?>
	<?php $halaman_dua = "pemasukan";?>
	<style>
		.keuangan-active {
			color: #da624a!important;
			background: #fcf1ef;
		}	
		.keuangan-actives {
			display: block;
			width: 100%;
			clear: both;
			font-weight: 400;
			color: #fff!important;
			text-align: inherit;
			white-space: nowrap;
			background-color: #da624a!important;
			border: 0;
			text-decoration: none;
			text-transform:uppercase!important;
		}
	</style>
	
	<div class="app-container app-theme-gray">
        <div class="app-main">
			<?php include "assets/scripts/menu.php";?>
            <div class="app-sidebar-overlay d-none animated fadeIn"></div>
            <div class="app-main__outer">
                <div class="app-main__inner">
					<?php include "assets/scripts/header.php";?>					
                    <div class="app-inner-layout app-inner-layout-page">
                        <div class="app-inner-bar">
                            <div class="inner-bar-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link show-menu-btn">
                                            <i class="fa fa-align-left mr-2"></i>
                                            <span class="hide-text-md">Menu</span>
                                        </a>
                                        <a href="#" class="nav-link close-menu-btn">
                                            <i class="fa fa-align-right mr-2"></i>
                                            <span class="hide-text-md">Menu</span>
                                        </a>
                                    </li>
                                </ul>
                            </div> 
							<div class="inner-bar-center">
								<ul class="nav">
									<li class="nav-item">
										<a href="laporan-keuangan" class="nav-link active">
											<span>Laporan Keuangan</span>
										</a>
									</li>
								</ul>
							</div>
							<div class="inner-bar-right">
                                <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link open-right-drawer cursor_none">
                                            &nbsp;
                                        </a>
                                    </li>
                                </ul>
                            </div>
						</div>
                        <div class="app-inner-layout__wrapper">
							<?php include "assets/scripts/menu/laporan.php";?>
							
							<!-- Konten -->
							<div class="app-inner-layout__content">
                                <div class="tab-content">
									<!-- Tab -->
									<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
										<div class="container-fluid">
											<div class="row">
												<div class="col-sm-12 col-md-12 col-xl-12" style="margin-bottom:100px;">
													<div class="mb-3 card">
														<div class="tabs-lg-alternate card-header">
															<ul class="nav nav-justified">
																<li class="nav-item">
																	<a href="laporan-pemasukan" class="nav-link active">
																		<div class="widget-number small_info">
																			<i class="fa fa-calculator"></i> <span>Pemasukan</span>
																		</div>
																	</a>
																</li>
																<li class="nav-item">
																	<a href="laporan-pengeluaran" class="nav-link">
																		<div class="widget-number small_info">
																			<i class="fa fa-calculator"></i> <span>Pengeluaran</span>
																		</div>
																	</a>
																</li>
															</ul>
														</div>
														<div class="tab-content">
															<div class="tab-pane active" role="tabpanel">
																<div class="card-body" style="padding-top:40px; padding-bottom:10px;">
																	<?php include "assets/scripts/data/pemasukan.php";?>
																	<?php include "assets/scripts/data/pemasukan-tabel.php";?>		
																</div>
															</div>
														</div>
													</div>	
												</div>
											</div>
											
										</div>
									</div>
										
                                </div>
                            </div>
							<!-- End Konten -->
                        </div>
                    </div>
                </div>
				
                <?php include "assets/scripts/footer_pages.php";?>				
            </div>
        </div>
	</div>
	<?php include "assets/scripts/footer.php";?>
	
	<!-- Modals Detail Data Resi -->	
	<?php	
		$bulan=date('m');
		$tahun=date('Y');
		$data = mysqli_query($koneksi,"select * from laporan_resi where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
		while($d = mysqli_fetch_array($data)){
	?>	
	<div id="modals_detail_resi_<?php echo $d['no_resi'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modals_update_data">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Detail : <?php echo $d['no_resi'];?></h5>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 modals_hapus">
							<?php include "assets/scripts/data/detail_resi.php";?>
						</div>
					</div>
				</div>
				<div class="modal-footer show">
					<button type="button" class="btn btn-konfirmasi btn-kembali" data-dismiss="modal">
						<i class="fa fa-backward"></i> Kembali
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	
	<!-- Modals Detail Pemasukan DBT -->	
	<?php	
		$bulan=date('m');
		$tahun=date('Y');
		$data = mysqli_query($koneksi,"select * from laporan_pemasukan where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun'");
		while($d = mysqli_fetch_array($data)){
	?>	
	<div id="modals_edit_data_pemasukan_<?php echo $d['no_resi'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modals_update_data">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Detail : <?php echo $d['no_resi'];?></h5>
				</div>
				<div class="modal-body">
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 modals_hapus">
							<table class="tabel_data" style="margin-top:0px;">
								<tr>
									<td class="judul" colspan="3" style="text-align:center; text-transform:uppercase;font-weight:600;">
										<?php echo $d['no_resi'];?>
									</td>
								</tr>
								<!-- Mulai -->
								<tr>
									<td class="judul">
										KodeLaporan
									</td>
									<td class="titik_dua">
										:
									</td>
									<td class="isi" style="text-transform:uppercase;">
										<?php echo $d['no_resi'];?>
									</td>
								</tr>
								<tr>
									<td class="judul" style="width:40%;">
										Akun
									</td>
									<td class="titik_dua">
										:
									</td>
									<td class="isi">
										<?php echo $d['username_agen'];?>
										-
										<?php echo $d['username'];?>
									</td>
								</tr>
								<tr>
									<td class="judul">
										Jumlah
									</td>
									<td class="titik_dua">
										:
									</td>
									<td class="isi">
										Rp. 
										<?php 
											echo number_format($d['jumlah'],0,',','.');
										?>
									</td>
								</tr>
								<tr>
									<td class="judul">
										Keterangan
									</td>
									<td class="titik_dua">
										:
									</td>
									<td class="isi">
										<?php echo $d['keterangan'];?>
									</td>
								</tr>
								<tr>
									<td class="judul">
										Tanggal
									</td>
									<td class="titik_dua">
										:
									</td>
									<td class="isi">
										<i class="pe-7s-date"> </i> <?php echo tgl_Indonesia(date('D, d F Y',strtotime(($d['tanggal']), strtotime( date("D, d F Y") )))) ;?>
										&nbsp; 
										<i class="pe-7s-alarm"></i> <?php echo date('H:i:s', strtotime($d['tanggal']));?>
									</td>
								</tr>
								<!-- Selesai -->
							</table>
							
							
						</div>
					</div>
				</div>
				<div class="modal-footer show">
					<button type="button" class="btn btn-konfirmasi btn-kembali" data-dismiss="modal">
						<i class="fa fa-backward"></i> Kembali
					</button>
				</div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>