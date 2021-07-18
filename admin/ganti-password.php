	<?php include "assets/scripts/head.php"; ?>
	<?php $halaman = "ganti"; ?>
	<?php $halaman_dua = "password"; ?>
	<style>
		.<?php echo $halaman; ?>-active {
			color: #da624a !important;
			background: #fcf1ef;
		}

		.<?php echo $halaman; ?>-actives {
			display: block;
			width: 100%;
			clear: both;
			font-weight: 400;
			color: #fff !important;
			text-align: inherit;
			white-space: nowrap;
			background-color: #da624a !important;
			border: 0;
			text-decoration: none;
			text-transform: capitalize !important;
		}
	</style>

	<div class="app-container app-theme-gray">
		<div class="app-main">
			<?php include "assets/scripts/menu.php"; ?>
			<div class="app-sidebar-overlay d-none animated fadeIn"></div>
			<div class="app-main__outer">
				<div class="app-main__inner">
					<?php include "assets/scripts/header.php"; ?>
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
										<a href="pengaturan-profil" class="nav-link">
											<span>Pengaturan Profil</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ganti-password" class="nav-link active">
											<span>Ganti Password</span>
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
							<?php include "assets/scripts/menu/pengaturan.php"; ?>

							<!-- Konten -->
							<div class="app-inner-layout__content">
								<div class="tab-content">

									<!-- Tab -->
									<div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
										<div class="container-fluid">
											<div class="row">
												<div class="col-sm-12 col-md-12 col-lg-12">
													<div class="main-card mb-3 card">
														<div class="card-header-tab card-header">
															<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
																<i class="header-icon pe-7s-door-lock icon-gradient bg-ripe-malin"> </i>
																Ganti Password
															</div>
															<div class="btn-actions-pane-right actions-icon-btn mobile_hide">
																<div class="btn-group dropdown">
																	<button type="button" data-toggle="dropdownx" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
																		<i class="pe-7s-more btn-icon-wrapper"></i>
																	</button>
																</div>
															</div>
														</div>
														<div class="row">
															<div class="col-sm-12 col-md-12 col-lg-12">
																<form class="input_form" method="post" action=".act?value=edit_data_password" enctype="multipart/form-data" novalidate>
																	<input type="hidden" name="username" value="<?php echo $username; ?>">
																	<div class="row">
																		<div class="col-sm-12 col-md-12 col-lg-6">
																			<div class="form_input">
																				<input type="password" class="form-control password_2" id="password" name="password" required>
																				<label>Password Baru<sup class="wajib">*</sup></label>
																				<span id="pass_button" onclick="change()">
																					<i class="fa fa-eye-slash"></i>
																				</span>
																				<div class="invalid-feedback">
																					Password Baru <?php echo $feedback; ?>
																				</div>
																			</div>
																		</div>
																		<div class="col-sm-12 col-md-12 col-lg-12 text-right">
																			<button class="mt-1 btn btn-primary save_data">
																				Save
																			</button>
																		</div>
																	</div>
																</form>
																<script>
																	(function() {
																		'use strict'
																		var forms = document.querySelectorAll('.input_form')

																		Array.prototype.slice.call(forms)
																			.forEach(function(form) {
																				form.addEventListener('submit', function(event) {
																					if (!form.checkValidity()) {
																						event.preventDefault()
																						event.stopPropagation()
																					}

																					form.classList.add('was-validated')
																				}, false)
																			})
																	})()
																</script>
																<script>
																	function change() {
																		var x = document.getElementById('password').type;

																		if (x == 'password') {
																			document.getElementById('password').type = 'text';
																			document.getElementById('pass_button').innerHTML = '<i class="fa fa-eye"></i>';
																		} else {
																			document.getElementById('password').type = 'password';
																			document.getElementById('pass_button').innerHTML = '<i class="fa fa-eye-slash"></i>';
																		}
																	};

																	function change_2() {
																		var y = document.getElementById('confirm_password').type;

																		if (y == 'password') {
																			document.getElementById('confirm_password').type = 'text';
																			document.getElementById('pass_button_2').innerHTML = '<i class="fa fa-eye"></i>';
																		} else {
																			document.getElementById('confirm_password').type = 'password';
																			document.getElementById('pass_button_2').innerHTML = '<i class="fa fa-eye-slash"></i>';
																		}
																	};
																</script>
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

				<?php include "assets/scripts/footer_pages.php"; ?>
			</div>
		</div>
	</div>
	<?php include "assets/scripts/footer.php"; ?>