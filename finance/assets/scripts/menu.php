<div class="app-sidebar-wrapper no_print">
	<div class="app-sidebar sidebar-shadow">
		<div class="app-header__logo">
			<a href="#" data-toggle="tooltip" data-placement="bottom" title="<?php echo $nama_perusahaan['nama_website']; ?>" class="logo-src">
				<img onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/konten/<?php echo $logo_login['logo_login']; ?>">
			</a>
			<button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
				<span class="hamburger-box">
					<span class="hamburger-inner"></span>
				</span>
			</button>
		</div>
		<div class="scrollbar-sidebar scrollbar-container">
			<div class="app-sidebar__inner">
				<ul class="vertical-nav-menu">

					<!-- Menu 1 -->
					<li class="app-sidebar__heading">Menu</li>
					<li class="mm-active">
						<a href="#">
							<i class="metismenu-icon pe-7s-rocket"></i>
							Dashboards
							<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
						</a>
						<ul class="menu_dropdown_show">
							<li>
								<a class="monitoring-active block-page-btn-example-1" href="monitoring">
									monitoring
								</a>
							</li>
						</ul>
					</li>

					<!-- Menu 2 -->
					<li class="app-sidebar__heading">Laporan</li>
					<li class="mm-active">
						<a href="#">
							<i class="metismenu-icon pe-7s-wallet"></i>
							Laporan
							<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
						</a>
						<ul class="menu_dropdown_show">
							<li>
								<a class="keuangan-active" href="laporan-pemasukan">
									laporan keuangan
								</a>
							</li>
						</ul>
					</li>

					<!-- Menu 3 -->
					<li class="app-sidebar__heading">Pengaturan</li>
					<li class="mm-active">
						<a href="#">
							<i class="metismenu-icon pe-7s-settings"></i>
							Pengaturan
							<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
						</a>
						<ul class="menu_dropdown_show">
							<li>
								<a class="pengaturan-active" href="pengaturan-profil">
									pengaturan profil
								</a>
							</li>
							<li>
								<a class="ganti-active" href="ganti-password">
									ganti password
								</a>
							</li>
						</ul>
					</li>

					<!-- Menu Terakhir -->
					<li class="app-sidebar__heading">Sign Out</li>
					<li class="mm-active">
						<a href="#">
							<i class="metismenu-icon pe-7s-back"></i>
							Sign Out
							<i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
						</a>
						<ul class="menu_dropdown_show">
							<li>
								<a class="sign-out-active" href="sign-out">
									Sign Out
								</a>
							</li>
						</ul>
					</li>
					<!-- End Menu -->
				</ul>
			</div>
		</div>
	</div>
</div>