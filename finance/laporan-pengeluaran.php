	<?php include "assets/scripts/head.php"; ?>
	<?php $halaman = "laporan"; ?>
	<?php $halaman_dua = "pengeluaran"; ?>
	<style>
		.keuangan-active {
			color: #da624a !important;
			background: #fcf1ef;
		}

		.keuangan-actives {
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
							<?php include "assets/scripts/menu/laporan.php"; ?>

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
																	<a href="laporan-pemasukan" class="nav-link">
																		<div class="widget-number small_info">
																			<i class="fa fa-calculator"></i> <span>Pemasukan</span>
																		</div>
																	</a>
																</li>
																<li class="nav-item">
																	<a href="laporan-pengeluaran" class="nav-link active">
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
																	<?php include "assets/scripts/data/pengeluaran.php"; ?>
																	<?php include "assets/scripts/data/pengeluaran-tabel.php"; ?>
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

				<?php include "assets/scripts/footer_pages.php"; ?>
			</div>
		</div>
	</div>
	<?php include "assets/scripts/footer.php"; ?>

	<!-- Modals Tambah Data Pengeluaran -->
	<div id="modals_tambah_data_pemasukan" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data Laporan Pengeluaran</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					$query = mysqli_query($koneksi, "SELECT max(no_resi) as kodeTerbesar FROM laporan_pengeluaran");
					$data = mysqli_fetch_array($query);
					$kode_resi = $data['kodeTerbesar'];
					$urutan = (int) substr($kode_resi, 6, 6);
					$urutan++;
					$huruf = "KRD-";
					$kode_resi = $huruf . sprintf("%06s", $urutan);
					?>
					<form class="form_validation" method="post" action=".act?value=tambah_data_pengeluaran" enctype="multipart/form-data" novalidate>
						<input type="hidden" name="no_resi" value="<?php echo $kode_resi; ?>">
						<input type="hidden" name="username_agen" value="<?php echo $username_agen; ?>">
						<input type="hidden" name="username" value="<?php echo $username; ?>">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="form_input" style="margin-top:15px;">
									<input type="text" class="form-control readonly_text" id="" name="" value="[AUTO]" disabled>
									<label>Kode Laporan</label>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="form_input" style="margin-top:15px;">
									<input type="text" class="form-control readonly_text" id="" name="" value="<?php echo $username_agen; ?> - <?php echo $username; ?>" disabled>
									<label>Akun</label>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="form_input" style="margin-top:15px;">
									<input type="number" class="form-control" id="jumlah" name="jumlah" value="" required>
									<label>Jumlah Pengeluaran<sup class="wajib">*</sup></label>
									<div class="invalid-feedback">
										Jumlah Pengeluaran <?php echo $feedback; ?>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="form_input" style="margin-top:15px;">
									<select class="form-control" id="kategori" name="kategori" required style="border:none; font-size: 0.75rem;border-bottom: 1px dashed #ced4da; outline: none; border-radius:0px; padding:0px;">
										<option value="">-- Kategori --</option>
										<option value="Droping Kas">Droping Kas</option>
										<option value="Pemberangkatan">Pemberangkatan</option>
										<option value="Perlengkapan">Perlengkapan</option>
										<option value="Listrik">Listrik</option>
										<option value="Pulsa">Pulsa</option>
										<option value="Internet">Internet</option>
										<option value="Telepon">Telepon</option>
										<option value="Pemeliharaan Kendaraan Mesin & Alat">Pemeliharaan Kendaraan Mesin & Alat</option>
										<option value="Administrasi & Umum">Administrasi & Umum</option>
										<option value="Tenaga Kerja">Tenaga Kerja</option>
										<option value="Entertainment">Entertainment</option>
										<option value="Konsumsi">Konsumsi</option>
										<option value="Transportasi">Transportasi</option>
										<option value="Kehadiran">Kehadiran</option>
										<option value="Parkir">Parkir</option>
										<option value="Bensin">Bensin</option>
										<option value="Lemburan">Lemburan</option>
										<option value="Lain-Lain">Lain-Lain</option>
									</select>
									<div class="invalid-feedback">
										Kategori <?php echo $feedback; ?>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-8">
								<div class="form_input" style="margin-top:15px;">
									<input type="text" class="form-control" id="keterangan" name="keterangan" value="" required>
									<label>Keterangan<sup class="wajib">*</sup></label>
									<div class="invalid-feedback">
										Keterangan <?php echo $feedback; ?>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-12 text-right">
								<button class="mt-1 btn btn-primary save_data" style="margin:10px 0px 0px 0px!important;">
									Save
								</button>
							</div>
						</div>
					</form>
				</div>

			</div>
		</div>
	</div>

	<!-- Modals Edit Data Pengeluaran -->
	<?php
	$bulan = date('m');
	$tahun = date('Y');
	$data = mysqli_query($koneksi, "select * from laporan_pengeluaran where month(tanggal)>='$bulan' AND year(tanggal)>='$tahun' AND username_agen='$username_agen'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_data_pengeluaran_<?php echo $d['no_resi']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data Laporan Pengeluaran</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form class="form_validation" method="post" action=".act?value=edit_data_pengeluaran" enctype="multipart/form-data" novalidate>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-4">
									<div class="form_input" style="margin-top:15px;">
										<input type="text" class="form-control readonly_text" id="no_resi" name="no_resi" value="<?php echo $d['no_resi']; ?>" readonly>
										<label>Kode Laporan</label>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-4">
									<div class="form_input" style="margin-top:15px;">
										<input type="text" class="form-control readonly_text" id="" name="" value="<?php echo $username_agen; ?> - <?php echo $username; ?>" disabled>
										<label>Akun</label>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-4">
									<div class="form_input" style="margin-top:15px;">
										<input type="number" class="form-control" id="jumlah" name="jumlah" value="<?php echo $d['jumlah']; ?>" required>
										<label>Jumlah Pemasukan<sup class="wajib">*</sup></label>
										<div class="invalid-feedback">
											Jumlah Pemasukan <?php echo $feedback; ?>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-4">
									<div class="form_input" style="margin-top:15px;">
										<select class="form-control" id="kategori" name="kategori" required style="border:none; font-size: 0.75rem;border-bottom: 1px dashed #ced4da; outline: none; border-radius:0px; padding:0px;">
											<option value="" <?php if ($d['kategori'] == '') {
																	echo "selected";
																} ?>>-- Kategori --</option>
											<option value="Droping Kas" <?php if ($d['kategori'] == 'Droping Kas') {
																			echo "selected";
																		} ?>>Droping Kas</option>
											<option value="Pemberangkatan" <?php if ($d['kategori'] == 'Pemberangkatan') {
																				echo "selected";
																			} ?>>Pemberangkatan</option>
											<option value="Perlengkapan" <?php if ($d['kategori'] == 'Perlengkapan') {
																				echo "selected";
																			} ?>>Perlengkapan</option>
											<option value="Listrik" <?php if ($d['kategori'] == 'Listrik') {
																		echo "selected";
																	} ?>>Listrik</option>
											<option value="Pulsa" <?php if ($d['kategori'] == 'Pulsa') {
																		echo "selected";
																	} ?>>Pulsa</option>
											<option value="Internet" <?php if ($d['kategori'] == 'Internet') {
																			echo "selected";
																		} ?>>Internet</option>
											<option value="Telepon" <?php if ($d['kategori'] == 'Telepon') {
																		echo "selected";
																	} ?>>Telepon</option>
											<option value="Pemeliharaan Kendaraan Mesin & Alat" <?php if ($d['kategori'] == 'Pemeliharaan Kendaraan Mesin & Alat') {
																									echo "selected";
																								} ?>>Pemeliharaan Kendaraan Mesin & Alat</option>
											<option value="Administrasi & Umum" <?php if ($d['kategori'] == 'Administrasi & Umum') {
																					echo "selected";
																				} ?>>Administrasi & Umum</option>
											<option value="Tenaga Kerja" <?php if ($d['kategori'] == 'Tenaga Kerja') {
																				echo "selected";
																			} ?>>Tenaga Kerja</option>
											<option value="Entertainment" <?php if ($d['kategori'] == 'Entertainment') {
																				echo "selected";
																			} ?>>Entertainment</option>
											<option value="Konsumsi" <?php if ($d['kategori'] == 'Konsumsi') {
																			echo "selected";
																		} ?>>Konsumsi</option>
											<option value="Transportasi" <?php if ($d['kategori'] == 'Transportasi') {
																				echo "selected";
																			} ?>>Transportasi</option>
											<option value="Kehadiran" <?php if ($d['kategori'] == 'Kehadiran') {
																			echo "selected";
																		} ?>>Kehadiran</option>
											<option value="Parkir" <?php if ($d['kategori'] == 'Parkir') {
																		echo "selected";
																	} ?>>Parkir</option>
											<option value="Bensin" <?php if ($d['kategori'] == 'Bensin') {
																		echo "selected";
																	} ?>>Bensin</option>
											<option value="Lemburan" <?php if ($d['kategori'] == 'Lemburan') {
																			echo "selected";
																		} ?>>Lemburan</option>
											<option value="Lain-Lain" <?php if ($d['kategori'] == 'Lain-Lain') {
																			echo "selected";
																		} ?>>Lain-Lain</option>
										</select>
										<div class="invalid-feedback">
											Kategori <?php echo $feedback; ?>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-8">
									<div class="form_input" style="margin-top:15px;">
										<input type="text" class="form-control" id="keterangan" name="keterangan" value="<?php echo $d['keterangan']; ?>" required>
										<label>Keterangan<sup class="wajib">*</sup></label>
										<div class="invalid-feedback">
											Keterangan <?php echo $feedback; ?>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:10px 0px 0px 0px!important;">
										Save
									</button>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Modals Hapus Data Pengeluaran -->
	<?php
	$data = mysqli_query($koneksi, "select * from laporan_pengeluaran");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_data_pengeluaran_<?php echo $d['no_resi']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modals_update_data">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">
							Hapus Data
						</h5>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12 col-md-12 col-lg-12 modals_hapus">
								Anda yakin ingin menghapus data
								<strong>
									<?php echo $d['no_resi']; ?>
								</strong>
							</div>
						</div>
					</div>
					<div class="modal-footer show">
						<button type="button" class="btn btn-hover-shine btn btn-primary" data-dismiss="modal">Batal</button>
						<a href=".act?value=hapus_data_pengeluaran&no_resi=<?php echo $d['no_resi']; ?>" class="btn btn-hover-shine btn btn-primary" id="hapus_media">Hapus</a>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Validation -->
	<script>
		(function() {
			'use strict'
			var forms = document.querySelectorAll('.form_validation')

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