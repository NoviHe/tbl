	<?php include "assets/scripts/head.php";?>
	<?php $kategori = "usermanager";?>
	<?php $halaman = "Usermanager";?>
	<?php $halaman_dua = "";?>
	<style>
		.<?php echo $kategori;?>-active {
			color: #da624a!important;
			background: #fcf1ef;
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
											<span>
												<?php echo $kategori;?>
											</span>
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
							<?php include "assets/data/$kategori/menu.php";?>
							
							<!-- Konten -->
							<div class="app-inner-layout__content table">
                                <div class="tab-content">
									<!-- Tab -->
									<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
										<div class="container-fluid">
											<?php
												$pages_dir = 'assets/data/usermanager';
												if(!empty($_GET['p'])){
													$pages = scandir($pages_dir, 0);
													unset($pages[0], $pages[1]);
													
													$p = $_GET['p'];
													if(in_array($p.'.php', $pages)){
														include($pages_dir.'/'.$p.'.php');
													} else {
														echo '				';
													}
												} else {
													include($pages_dir.'/admin.php');
												}
											?>
											
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