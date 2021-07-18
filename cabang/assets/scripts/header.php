	<!-- Mobile Header -->
	<div class="header-mobile-wrapper">
		<div class="app-header__logo">
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $nama_perusahaan['nama_website']; ?>" class="logo-src mgl_setting">
				<img onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/konten/<?php echo $logo['logo_website']; ?>">
			</a>
			<button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
			<div class="app-header__menu">
				<span>
					<button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
						<span class="btn-icon-wrapper">
							<i class="fa fa-ellipsis-v fa-w-6"></i>
						</span>
					</button>
				</span>
			</div>
		</div>
	</div>
	<!-- End -->

	<div class="app-header">
		<div class="page-title-heading">
			<?php echo $halaman; ?>
			<?php echo $halaman_dua; ?>
			<div class="page-title-subheading">
				<?php echo $nama_perusahaan['nama_website']; ?> - <?php echo $tagline['tagline']; ?>
			</div>
		</div>
		<div class="app-header-right">
			<div class="search-wrapper">
				<i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
				<input type="text" placeholder="Search...">
			</div>
			<style>
				.header-btn-lg::before {
					background: transparent;
				}
			</style>
			<div class="header-btn-lg pr-0">
				<div class="widget-content p-0">
					<div class="widget-content-wrapper">
						<div class="widget-content-leftx">
							<div class="btn-group">
								<a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
									<img onerror="src='../assets/images/foto/.placeholder.png'" class="rounded" src="../assets/images/foto/<?php echo $foto['foto']; ?>" alt="user" style="width:42px; height:42px;">
									<i class="fa fa-angle-down ml-2 opacity-8"></i>
								</a>
								<div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
									<div class="dropdown-menu-header">
										<div class="dropdown-menu-header-inner bg-dark">
											<div class="menu-header-content text-left">
												<div class="widget-content p-0">
													<div class="widget-content-wrapper">
														<div class="widget-content-left mr-3">
															<img onerror="src='../assets/images/foto/.placeholder.png'" class="rounded-circle" src="../assets/images/foto/<?php echo $foto['foto']; ?>" alt="user" style="width:42px; height:42px;">
														</div>
														<div class="widget-content-left">
															<div class="widget-heading">
																<?php echo $nama['nama']; ?>
															</div>
															<div class="widget-subheading opacity-8">
																<?php echo $username; ?>
															</div>
														</div>
														<div class="widget-content-right mr-2">
															<a href="sign-out" class="btn-pill btn btn-warning">
																Sign Out
															</a>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="scroll-area-xs" style="height:110px; heightx:140px;">
										<div class="scrollbar-container ps">
											<ul class="nav flex-column">
												<li class="nav-item-header nav-item">Akun Saya</li>
												<li class="nav-item">
													<a href="pengaturan-profil" class="nav-link coloring_hover">
														<span class="lnr lnr-cog" style="margin-right:10px;"></span>
														Pengaturan Profil
													</a>
												</li>
												<li class="nav-item">
													<a href="" class="nav-link coloring_hover">
														<span class="lnr lnr-lock" style="margin-right:7px;"></span> Ganti Password
													</a>
												</li>
												<li class="nav-item">
													<a href="mode-pengembangan" class="nav-link coloring_hover" style="display:none;">
														<span class="lnr lnr-rocket" style="margin-right:10px;"></span> Mode Pengembangan
													</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="app-header-overlay d-none animated fadeIn"></div>
	</div>