	<?php include "assets/scripts/head.php";?>
	<?php $halaman = "Data";?>
	<?php $halaman_dua = "Marketing";?>
	<style>
		.marketing-active {
			color: #da624a!important;
			background: #fcf1ef;
		}	
		.marketing-actives {
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
										<a href="" class="nav-link active">
											<span>Marketing</span>
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
							<?php include "assets/scripts/menu/data-resi.php";?>
							
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
																	<a href="resi-otomatis" class="nav-link">
																		<div class="widget-number small_info">
																			<i class="pe-7s-box2 settings"></i> 
																			<span>Resi Otomatis</span>
																		</div>
																	</a>
																</li>
																<li class="nav-item">
																	<a href="resi-manual" class="nav-link">
																		<div class="widget-number small_info">
																			<i class="pe-7s-box2 settings"></i> 
																			<span>Resi Manual</span>
																		</div>
																	</a>
																</li>
																<li class="nav-item">
																	<a href="tujuan-tarif" class="nav-link">
																		<div class="widget-number small_info">
																			<i class="pe-7s-box2 settings"></i> 
																			<span>Tujuan &amp; Tarif</span>
																		</div>
																	</a>
																</li>
																<li class="nav-item">
																	<a href="marketing" class="nav-link active">
																		<div class="widget-number small_info">
																			<i class="pe-7s-box2 settings"></i> 
																			<span>Marketing</span>
																		</div>
																	</a>
																</li>
															</ul>
														</div>
														<div class="tab-content">
															<div class="tab-pane active" role="tabpanel">
																<div class="card-body" style="padding-top:40px; padding-bottom:25px;">
																	<?php include "assets/scripts/data/tabel-marketing.php";?>
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