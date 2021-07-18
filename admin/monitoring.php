	<?php include "assets/scripts/head.php";?>
	<?php $halaman = "monitoring";?>
	<?php $halaman_dua = "";?>
	<style>
		.<?php echo $halaman;?>-active {
			color: #da624a!important;
			background: #fcf1ef;
		}	
		.<?php echo $halaman;?>-actives {
			display: block;
			width: 100%;
			padding: .4rem 1.1rem;
			clear: both;
			font-weight: 400;
			color: #fff!important;
			text-align: inherit;
			white-space: nowrap;
			background-color: #da624a!important;
			border: 0;
			text-decoration: none
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
							<div class="inner-bar-left bar_mobile_none" style="width:200px;">
                                 <ul class="nav">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link open-right-drawer cursor_none">
                                            &nbsp;
                                        </a>
                                    </li>
                                </ul>
                            </div> 
							<div class="inner-bar-center">
								<ul class="nav">
									<li class="nav-item">
										<a role="tab" data-toggle="tab" class="nav-link active" href="#tab-content-0">
											<span>Overview</span>
										</a>
									</li>
									<li class="nav-item" style="display:none;">
										<a role="tab" data-toggle="tab" class="nav-link" href="#tab-content-1">
											<span>Audiences</span>
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
							
							<!-- Konten -->
							<div class="app-inner-layout__content">
                                <div class="tab-content">
									<!-- Tab -->
									<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
										<div class="container-fluid">
											<div class="row">
												<div class="col-sm-12 col-md-12 col-xl-12">
													<div class="mbg-3 alert alert-info alert-dismissible fade show" role="alert">
														<span class="pr-2">
															<i class="fa fa-info"></i>
														</span>
														Sistem ini hanya dapat berjalan baik jika menggunakan browser google chrome!
													</div>
													<?php include "assets/scripts/data/total-laporan-keuangan.php";?>
													<?php include "assets/scripts/data/pemasukan.php";?>
													<?php include "assets/scripts/data/pengeluaran-monitoring.php";?>
													<?php include "assets/scripts/data/data-laporan-usermanger.php";?>
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