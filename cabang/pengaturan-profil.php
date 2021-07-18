	<?php include "assets/scripts/head.php"; ?>
	<?php $halaman = "pengaturan"; ?>
	<?php $halaman_dua = "profil"; ?>
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
										<a href="pengaturan-profil" class="nav-link active">
											<span>Pengaturan Profil</span>
										</a>
									</li>
									<li class="nav-item">
										<a href="ganti-password" class="nav-link">
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
																<i class="header-icon pe-7s-info icon-gradient bg-ripe-malin" style="margin-left:-9px;"> </i>
																Pengaturan Profil
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
															<div class="col-sm-12 col-md-12 col-lg-6">
																<?php
																$data = mysqli_query($koneksi, "select * from db_usermanager where username='$username' AND tipe_akun='agen'");
																while ($d = mysqli_fetch_array($data)) {
																?>
																	<form class="input_form" method="post" action=".act?value=edit_data_profil" enctype="multipart/form-data" novalidate style="border:1px solid transparent;">
																		<input type="hidden" name="username" value="<?php echo $d['username']; ?>">
																		<div class="form_input">
																			<input type="text" class="form-control readonly_text" id="terdaftar_sejak" name="terdaftar_sejak" value="<?php echo $d['terdaftar_sejak']; ?>" disabled>
																			<label>Terdaftar Sejak</label>
																		</div>
																		<div class="form_input">
																			<input type="text" class="form-control readonly_text" id="username" name="username" value="<?php echo $d['username']; ?>" readonly>
																			<label>Username</label>
																		</div>
																		<div class="form_input">
																			<input type="number" class="form-control" id="no_telp" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
																			<label>No. Telp<sup class="wajib">*</sup></label>
																			<div class="invalid-feedback">
																				No. Telp <?php echo $feedback; ?>
																			</div>
																		</div>
																		<div class="form_input">
																			<input type="text" class="form-control" id="kota" name="kota" value="<?php echo $d['kota']; ?>" required>
																			<label>Kota<sup class="wajib">*</sup></label>
																			<div class="invalid-feedback">
																				Kota <?php echo $feedback; ?>
																			</div>
																		</div>
																		<div class="form_input">
																			<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $d['alamat']; ?>" required>
																			<label>Alamat<sup class="wajib">*</sup></label>
																			<div class="invalid-feedback">
																				Alamat <?php echo $feedback; ?>
																			</div>
																		</div>
																		<div class="text-right" style="margin-top:-25px;">
																			<button class="mt-1 btn btn-primary save_data">
																				Save
																			</button>
																		</div>
																	</form>
																<?php
																}
																?>
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
															</div>
															<div class="col-sm-12 col-md-12 col-lg-6 profile_foto">
																<div class="btn-hover-shine">
																	<img onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/foto/<?php echo $foto['foto']; ?>" alt="user">
																</div>
																<form class="form_data" method="post" action="" enctype="multipart/form-data">
																	<input type="file" name="foto" id="foto" class="inputfile" accept="image/x-png, image/jpeg" required>
																	<label for="foto"><span>Select Picture</span></label>
																	<small class="rekomended_file">520 X 520 Pixel</small>
																	<button class="mt-1 btn btn-primary save_data" name="update_foto">
																		Save
																	</button>
																</form>
																<?php
																if (isset($_POST['update_foto'])) {
																	$temp = $_FILES['foto']['tmp_name'];
																	$name = rand(0, 9999) . '_' . $_FILES['foto']['name'];
																	$size = $_FILES['foto']['size'];
																	$type = $_FILES['foto']['type'];
																	$folder = "../assets/images/foto/";
																	if ($size < 5048000 and ($type == 'image/jpeg' or $type == 'image/jpg' or $type == 'image/png')) {
																		move_uploaded_file($temp, $folder . $name);
																		mysqli_query($koneksi, "update db_usermanager set 
																			
																				foto = '$name'
																				
																				where username='$username' AND tipe_akun='agen'
																			");
																		header('location:pengaturan-profil');
																	} else {
																		echo "<b>Gagal Upload File</b>";
																	}
																}
																?>
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