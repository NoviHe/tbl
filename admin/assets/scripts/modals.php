	<!-- admin -->
	<?php $admin = "admin"; ?>
	<!-- Modals Tambah Data -->
	<div id="modals_tambah_<?php echo $admin; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<form method="post" action="" class="form_validation" novalidate>
						<div class="form_grup_with_judul">
							<div class="judul">
								<?php echo $admin; ?>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Akun <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input disabled" name="tipe_akun" value="<?php echo $admin; ?>" readonly style="text-transform:uppercase;">
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Username <sup class="wajib">*</sup>
										</label>
										<input type="email" class="form-control input" name="username" value="<?php echo $d['username']; ?>" placeholder="email@email.com" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Password <sup class="wajib">*</sup>
										</label>
										<input type="password" class="form-control input" name="password" value="<?php echo $d['password']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Nama <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="nama" value="<?php echo $d['nama']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											No. Telp <sup class="wajib">*</sup>
										</label>
										<input type="number" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Kota <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="position-relative form-group">
										<label class="data">
											Alamat <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah-admin">
										Simpan
									</button>
								</div>
							</div>
						</div>
					</form>
					<?php
					if (isset($_POST['tambah-admin'])) {
						$tipe_akun 			= $_POST['tipe_akun'];
						$username		 	= $_POST['username'];
						$password			= $_POST['password'];
						$password			= md5($password . $salt);
						$nama 				= $_POST['nama'];
						$no_telp 			= $_POST['no_telp'];
						$kota 				= $_POST['kota'];
						$alamat 			= $_POST['alamat'];
						$terdaftar_sejak	= date("Y-m-d H:i:s");

						$query = mysqli_query($koneksi, "INSERT INTO db_usermanager (
				
									tipe_akun,
									username,
									password,
									nama,
									no_telp,
									kota,
									alamat,				
									terdaftar_sejak
							) 
							VALUES (
									'$tipe_akun',
									'$username',
									'$password',
									'$nama',
									'$no_telp',
									'$kota',
									'$alamat',
									'$terdaftar_sejak'
								)
							");

						session_start();
						$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
						header("location: usermanager?p=$admin");
						exit();
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Edit Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$admin'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<form method="post" action="" class="form_validation" novalidate>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<div class="form_grup_with_judul">
								<div class="judul">
									<?php echo $admin; ?>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Akun <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input disabled" name="tipe_akun" value="<?php echo $admin; ?>" readonly style="text-transform:uppercase;">
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Username <sup class="wajib">*</sup>
											</label>
											<input type="email" class="form-control input disabled" name="username" value="<?php echo $d['username']; ?>" placeholder="email@email.com" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Password <sup class="wajib">*</sup>
											</label>
											<input type="password" class="form-control input" name="password" value="" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Nama <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="nama" value="<?php echo $d['nama']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												No. Telp <sup class="wajib">*</sup>
											</label>
											<input type="number" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Kota <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="position-relative form-group">
											<label class="data">
												Alamat <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 text-right">
										<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit-admin">
											Simpan
										</button>
									</div>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['edit-admin'])) {
							$id					= $_POST['id'];
							$username		 	= $_POST['username'];
							$password			= $_POST['password'];
							$password			= md5($password . $salt);
							$nama 				= $_POST['nama'];
							$no_telp 			= $_POST['no_telp'];
							$kota 				= $_POST['kota'];
							$alamat 			= $_POST['alamat'];


							mysqli_query($koneksi, "UPDATE db_usermanager SET 
			
							username			= '$username',
							password			= '$password',
							nama				= '$nama',
							no_telp				= '$no_telp',
							kota				= '$kota',
							alamat				= '$alamat'
							
							where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
							header("location: usermanager?p=$admin");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Modals Hapus Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$admin'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="">
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<span class="modals_notif_hapus">
								Anda yakin ingin menghapus data :
								<strong>
									<?php echo $d['username']; ?> -
									<?php echo $d['nama']; ?>
								</strong>
								?
							</span>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus-admin">
										Hapus
									</button>
									<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
										Batal
									</button>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['hapus-admin'])) {
							$id = $_POST['id'];
							$query = mysqli_query($koneksi, "delete from db_usermanager where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
							header("location: usermanager?p=$admin");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- agen -->
	<?php $agen = "agen"; ?>
	<!-- Modals Tambah Data -->
	<div id="modals_tambah_<?php echo $agen; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<form method="post" action="" class="form_validation" novalidate>
						<div class="form_grup_with_judul">
							<div class="judul">
								<?php echo $agen; ?>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="position-relative form-group">
										<label class="data">
											Akun <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input disabled" name="tipe_akun" value="<?php echo $agen; ?>" readonly style="text-transform:uppercase;">
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Username <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="username" value="<?php echo $d['username']; ?>" placeholder="BDG-001" required style="text-transform:uppercase;">
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Password <sup class="wajib">*</sup>
										</label>
										<input type="password" class="form-control input" name="password" value="<?php echo $d['password']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											No. Telp <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Kota <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="position-relative form-group">
										<label class="data">
											Alamat <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah-agen">
										Simpan
									</button>
								</div>
							</div>
						</div>
					</form>
					<?php
					if (isset($_POST['tambah-agen'])) {
						$tipe_akun 			= $_POST['tipe_akun'];
						$username		 	= $_POST['username'];
						$password			= $_POST['password'];
						$password			= md5($password . $salt);
						$no_telp 			= $_POST['no_telp'];
						$kota 				= $_POST['kota'];
						$alamat 			= $_POST['alamat'];
						$terdaftar_sejak	= date("Y-m-d H:i:s");


						$query = mysqli_query($koneksi, "INSERT INTO db_usermanager (
				
									tipe_akun,
									username,
									password,
									no_telp,
									kota,
									alamat,				
									terdaftar_sejak
							) 
							VALUES (
									'$tipe_akun',
									'$username',
									'$password',
									'$no_telp',
									'$kota',
									'$alamat',
									'$terdaftar_sejak'
								)
							");

						session_start();
						$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
						header("location: usermanager?p=$agen");
						exit();
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Edit Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$agen'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<form method="post" action="" class="form_validation" novalidate>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<div class="form_grup_with_judul">
								<div class="judul">
									<?php echo $agen; ?>
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="position-relative form-group">
											<label class="data">
												Akun <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input disabled" name="tipe_akun" value="<?php echo $agen; ?>" readonly style="text-transform:uppercase;">
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Username <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="username" value="<?php echo $d['username']; ?>" placeholder="BDG-001" required style="text-transform:uppercase;">
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Password <sup class="wajib">*</sup>
											</label>
											<input type="password" class="form-control input" name="password" value="" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												No. Telp <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Kota <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="position-relative form-group">
											<label class="data">
												Alamat <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 text-right">
										<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit-agen">
											Simpan
										</button>
									</div>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['edit-agen'])) {
							$id					= $_POST['id'];
							$username		 	= $_POST['username'];
							$password			= $_POST['password'];
							$password			= md5($password . $salt);
							$no_telp 			= $_POST['no_telp'];
							$kota 				= $_POST['kota'];
							$alamat 			= $_POST['alamat'];


							mysqli_query($koneksi, "UPDATE db_usermanager SET 
			
							username			= '$username',
							password			= '$password',
							no_telp				= '$no_telp',
							kota				= '$kota',
							alamat				= '$alamat'
							
							where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
							header("location: usermanager?p=agen");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Modals Hapus Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$agen'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="">
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<span class="modals_notif_hapus">
								Anda yakin ingin menghapus data :
								<strong>
									<?php echo $d['username']; ?> -
									<?php echo $d['kota']; ?>
								</strong>
								?
							</span>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus-agen">
										Hapus
									</button>
									<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
										Batal
									</button>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['hapus-agen'])) {
							$id = $_POST['id'];
							$query = mysqli_query($koneksi, "delete from db_usermanager where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
							header("location: usermanager?p=agen");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- staf_karyawan -->
	<?php $staf_karyawan = "staf_karyawan"; ?>
	<!-- Modals Tambah Data -->
	<div id="modals_tambah_<?php echo $staf_karyawan; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<form method="post" action="" class="form_validation" novalidate>
						<input type="hidden" name="tipe_akun" value="staf_karyawan">
						<div class="form_grup_with_judul">
							<div class="judul">
								Staf Karyawan
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Agen <sup class="wajib">*</sup>
										</label>
										<select class="form_hide_select form-control custom-select" name="username_agen" required style="cursor:pointer;">
											<option value="">-- Pilih Salah Satu --</option>
											<?php
											$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='agen'");
											while ($d = mysqli_fetch_array($data)) {
											?>
												<option value="<?php echo $d['username']; ?>"><?php echo $d['username']; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											NIP <sup class="wajib">*</sup>
										</label>
										<input type="number" class="form-control input text-left" name="username" value="<?php echo $d['username']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Password <sup class="wajib">*</sup>
										</label>
										<input type="password" class="form-control input" name="password" value="<?php echo $d['password']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Nama <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="nama" value="<?php echo $d['nama']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											No. Telp <sup class="wajib">*</sup>
										</label>
										<input type="number" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Kota <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="position-relative form-group">
										<label class="data">
											Alamat <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah-staf_karyawan">
										Simpan
									</button>
								</div>
							</div>
						</div>
					</form>
					<?php
					if (isset($_POST['tambah-staf_karyawan'])) {
						$tipe_akun 			= $_POST['tipe_akun'];
						$username_agen		= $_POST['username_agen'];
						$username		 	= $_POST['username'];
						$password			= $_POST['password'];
						$password			= md5($password . $salt);
						$nama 				= $_POST['nama'];
						$no_telp 			= $_POST['no_telp'];
						$kota 				= $_POST['kota'];
						$alamat 			= $_POST['alamat'];
						$terdaftar_sejak	= date("Y-m-d H:i:s");


						$query = mysqli_query($koneksi, "INSERT INTO db_usermanager (
				
									tipe_akun,
									username_agen,
									username,
									password,
									nama,
									no_telp,
									kota,
									alamat,				
									terdaftar_sejak
							) 
							VALUES (
									'$tipe_akun',
									'$username_agen',
									'$username',
									'$password',
									'$nama',
									'$no_telp',
									'$kota',
									'$alamat',
									'$terdaftar_sejak'
								)
							");

						session_start();
						$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
						header("location: usermanager?p=karyawan");
						exit();
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Edit Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$staf_karyawan'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<form method="post" action="" class="form_validation" novalidate>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<div class="form_grup_with_judul">
								<div class="judul">
									Staf Karyawan
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Agen <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input disabled" name="username_agen" value="<?php echo $d['username_agen']; ?>" readonly style="text-transform:uppercase;">
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												NIP <sup class="wajib">*</sup>
											</label>
											<input type="email" class="form-control input disabled" name="username" value="<?php echo $d['username']; ?>" placeholder="email@email.com" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Password <sup class="wajib">*</sup>
											</label>
											<input type="password" class="form-control input" name="password" value="" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Nama <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="nama" value="<?php echo $d['nama']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												No. Telp <sup class="wajib">*</sup>
											</label>
											<input type="number" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Kota <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="position-relative form-group">
											<label class="data">
												Alamat <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 text-right">
										<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit-staf_karyawan">
											Simpan
										</button>
									</div>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['edit-staf_karyawan'])) {
							$id					= $_POST['id'];
							$username_agen		= $_POST['username_agen'];
							$username		 	= $_POST['username'];
							$password			= $_POST['password'];
							$password			= md5($password . $salt);
							$nama 				= $_POST['nama'];
							$no_telp 			= $_POST['no_telp'];
							$kota 				= $_POST['kota'];
							$alamat 			= $_POST['alamat'];


							mysqli_query($koneksi, "UPDATE db_usermanager SET 
			
							username_agen		= '$username_agen',
							username			= '$username',
							password			= '$password',
							nama				= '$nama',
							no_telp				= '$no_telp',
							kota				= '$kota',
							alamat				= '$alamat'
							
							where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
							header("location: usermanager?p=karyawan");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Modals Hapus Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$staf_karyawan'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="">
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<span class="modals_notif_hapus">
								Anda yakin ingin menghapus data :
								<strong>
									<?php echo $d['username']; ?> -
									<?php echo $d['nama']; ?>
								</strong>
								?
							</span>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus-staf_karyawan">
										Hapus
									</button>
									<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
										Batal
									</button>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['hapus-staf_karyawan'])) {
							$id = $_POST['id'];
							$query = mysqli_query($koneksi, "delete from db_usermanager where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
							header("location: usermanager?p=karyawan");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>



	<!-- Kurir -->
	<?php $kurir = "kurir"; ?>
	<!-- Modals Tambah Data -->
	<div id="modals_tambah_<?php echo $kurir; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<form method="post" action="" class="form_validation" novalidate>
						<input type="hidden" name="tipe_akun" value="kurir">
						<div class="form_grup_with_judul">
							<div class="judul">
								Kurir
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Agen <sup class="wajib">*</sup>
										</label>
										<select class="form_hide_select form-control custom-select" name="username_agen" required style="cursor:pointer;">
											<option value="">-- Pilih Salah Satu --</option>
											<?php
											$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='agen'");
											while ($d = mysqli_fetch_array($data)) {
											?>
												<option value="<?php echo $d['username']; ?>"><?php echo $d['username']; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Username <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input text-left" name="username" value="<?php echo $d['username']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Password <sup class="wajib">*</sup>
										</label>
										<input type="password" class="form-control input" name="password" value="<?php echo $d['password']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Nama <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="nama" value="<?php echo $d['nama']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											No. Telp <sup class="wajib">*</sup>
										</label>
										<input type="number" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Kota <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="position-relative form-group">
										<label class="data">
											Alamat <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah-kurir">
										Simpan
									</button>
								</div>
							</div>
						</div>
					</form>
					<?php
					if (isset($_POST['tambah-kurir'])) {
						$tipe_akun 			= $_POST['tipe_akun'];
						$username_agen		= $_POST['username_agen'];
						$username		 	= $_POST['username'];
						$password			= $_POST['password'];
						$password			= md5($password . $salt);
						$nama 				= $_POST['nama'];
						$no_telp 			= $_POST['no_telp'];
						$kota 				= $_POST['kota'];
						$alamat 			= $_POST['alamat'];
						$terdaftar_sejak	= date("Y-m-d H:i:s");


						$query = mysqli_query($koneksi, "INSERT INTO db_usermanager (
				
									tipe_akun,
									username_agen,
									username,
									password,
									nama,
									no_telp,
									kota,
									alamat,				
									terdaftar_sejak
							) 
							VALUES (
									'$tipe_akun',
									'$username_agen',
									'$username',
									'$password',
									'$nama',
									'$no_telp',
									'$kota',
									'$alamat',
									'$terdaftar_sejak'
								)
							");

						session_start();
						$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
						header("location: usermanager?p=kurir");
						exit();
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Edit Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$kurir'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<form method="post" action="" class="form_validation" novalidate>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<div class="form_grup_with_judul">
								<div class="judul">
									Kurir
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Agen <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input disabled" name="username_agen" value="<?php echo $d['username_agen']; ?>" readonly style="text-transform:uppercase;">
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												NIP <sup class="wajib">*</sup>
											</label>
											<input type="email" class="form-control input disabled" name="username" value="<?php echo $d['username']; ?>" placeholder="email@email.com" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Password <sup class="wajib">*</sup>
											</label>
											<input type="password" class="form-control input" name="password" value="" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Nama <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="nama" value="<?php echo $d['nama']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												No. Telp <sup class="wajib">*</sup>
											</label>
											<input type="number" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Kota <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="position-relative form-group">
											<label class="data">
												Alamat <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 text-right">
										<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit-kurir">
											Simpan
										</button>
									</div>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['edit-kurir'])) {
							$id					= $_POST['id'];
							$username_agen		= $_POST['username_agen'];
							$username		 	= $_POST['username'];
							$password			= $_POST['password'];
							$password			= md5($password . $salt);
							$nama 				= $_POST['nama'];
							$no_telp 			= $_POST['no_telp'];
							$kota 				= $_POST['kota'];
							$alamat 			= $_POST['alamat'];


							mysqli_query($koneksi, "UPDATE db_usermanager SET 
			
							username_agen		= '$username_agen',
							username			= '$username',
							password			= '$password',
							nama				= '$nama',
							no_telp				= '$no_telp',
							kota				= '$kota',
							alamat				= '$alamat'
							
							where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
							header("location: usermanager?p=kurir");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Modals Hapus Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$kurir'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="">
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<span class="modals_notif_hapus">
								Anda yakin ingin menghapus data :
								<strong>
									<?php echo $d['username']; ?> -
									<?php echo $d['nama']; ?>
								</strong>
								?
							</span>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus-kurir">
										Hapus
									</button>
									<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
										Batal
									</button>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['hapus-kurir'])) {
							$id = $_POST['id'];
							$query = mysqli_query($koneksi, "delete from db_usermanager where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
							header("location: usermanager?p=kurir");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>




	<!-- Finance -->
	<?php $finance = "finance"; ?>
	<!-- Modals Tambah Data -->
	<div id="modals_tambah_<?php echo $finance; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lgx">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Data</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body" style="margin-bottom:-30px;">
					<form method="post" action="" class="form_validation" novalidate>
						<input type="hidden" name="tipe_akun" value="finance">
						<div class="form_grup_with_judul">
							<div class="judul">
								Finance
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Agen <sup class="wajib">*</sup>
										</label>
										<select class="form_hide_select form-control custom-select" name="username_agen" required style="cursor:pointer;">
											<option value="">-- Pilih Salah Satu --</option>
											<?php
											$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='agen'");
											while ($d = mysqli_fetch_array($data)) {
											?>
												<option value="<?php echo $d['username']; ?>"><?php echo $d['username']; ?></option>
											<?php
											}
											?>
										</select>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Username <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input text-left" name="username" value="<?php echo $d['username']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Password <sup class="wajib">*</sup>
										</label>
										<input type="password" class="form-control input" name="password" value="<?php echo $d['password']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Nama <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="nama" value="<?php echo $d['nama']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											No. Telp <sup class="wajib">*</sup>
										</label>
										<input type="number" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-6">
									<div class="position-relative form-group">
										<label class="data">
											Kota <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12">
									<div class="position-relative form-group">
										<label class="data">
											Alamat <sup class="wajib">*</sup>
										</label>
										<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
									</div>
								</div>
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah-finance">
										Simpan
									</button>
								</div>
							</div>
						</div>
					</form>
					<?php
					if (isset($_POST['tambah-finance'])) {
						$tipe_akun 			= $_POST['tipe_akun'];
						$username_agen		= $_POST['username_agen'];
						$username		 	= $_POST['username'];
						$password			= $_POST['password'];
						$password			= md5($password . $salt);
						$nama 				= $_POST['nama'];
						$no_telp 			= $_POST['no_telp'];
						$kota 				= $_POST['kota'];
						$alamat 			= $_POST['alamat'];
						$terdaftar_sejak	= date("Y-m-d H:i:s");


						$query = mysqli_query($koneksi, "INSERT INTO db_usermanager (
				
									tipe_akun,
									username_agen,
									username,
									password,
									nama,
									no_telp,
									kota,
									alamat,				
									terdaftar_sejak
							) 
							VALUES (
									'$tipe_akun',
									'$username_agen',
									'$username',
									'$password',
									'$nama',
									'$no_telp',
									'$kota',
									'$alamat',
									'$terdaftar_sejak'
								)
							");

						session_start();
						$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
						header("location: usermanager?p=finance");
						exit();
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals Edit Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$finance'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_edit_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Edit Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body" style="margin-bottom:-30px;">
						<form method="post" action="" class="form_validation" novalidate>
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<div class="form_grup_with_judul">
								<div class="judul">
									Finance
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Agen <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input disabled" name="username_agen" value="<?php echo $d['username_agen']; ?>" readonly style="text-transform:uppercase;">
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												NIP <sup class="wajib">*</sup>
											</label>
											<input type="email" class="form-control input disabled" name="username" value="<?php echo $d['username']; ?>" placeholder="email@email.com" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Password <sup class="wajib">*</sup>
											</label>
											<input type="password" class="form-control input" name="password" value="" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Nama <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="nama" value="<?php echo $d['nama']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												No. Telp <sup class="wajib">*</sup>
											</label>
											<input type="number" class="form-control input text-left" name="no_telp" value="<?php echo $d['no_telp']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-6">
										<div class="position-relative form-group">
											<label class="data">
												Kota <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="kota" value="<?php echo $d['kota']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12">
										<div class="position-relative form-group">
											<label class="data">
												Alamat <sup class="wajib">*</sup>
											</label>
											<input type="text" class="form-control input" name="alamat" value="<?php echo $d['alamat']; ?>" required>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-12 text-right">
										<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="edit-finance">
											Simpan
										</button>
									</div>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['edit-finance'])) {
							$id					= $_POST['id'];
							$username_agen		= $_POST['username_agen'];
							$username		 	= $_POST['username'];
							$password			= $_POST['password'];
							$password			= md5($password . $salt);
							$nama 				= $_POST['nama'];
							$no_telp 			= $_POST['no_telp'];
							$kota 				= $_POST['kota'];
							$alamat 			= $_POST['alamat'];


							mysqli_query($koneksi, "UPDATE db_usermanager SET 
			
							username_agen		= '$username_agen',
							username			= '$username',
							password			= '$password',
							nama				= '$nama',
							no_telp				= '$no_telp',
							kota				= '$kota',
							alamat				= '$alamat'
							
							where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Disimpan!";
							header("location: usermanager?p=finance");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>

	<!-- Modals Hapus Data -->
	<?php
	$data = mysqli_query($koneksi, "select * from db_usermanager where tipe_akun='$finance'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div id="modals_hapus_data_<?php echo $d['id']; ?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lgx">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<form method="post" action="">
							<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
							<span class="modals_notif_hapus">
								Anda yakin ingin menghapus data :
								<strong>
									<?php echo $d['username']; ?> -
									<?php echo $d['nama']; ?>
								</strong>
								?
							</span>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-lg-12 text-right">
									<button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus-finance">
										Hapus
									</button>
									<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
										Batal
									</button>
								</div>
							</div>
						</form>
						<?php
						if (isset($_POST['hapus-finance'])) {
							$id = $_POST['id'];
							$query = mysqli_query($koneksi, "delete from db_usermanager where id='$id'");

							session_start();
							$_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
							header("location: usermanager?p=finance");
							exit();
						}
						?>
					</div>
				</div>
			</div>
		</div>
	<?php
	}
	?>


































	<!-- Validation -->
	<script src="../assets/js/validate.js"></script>
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
	<style>
		.was-validated .form-control:valid,
		.form-control.is-valid,
		.was-validated .form-control:invalid,
		.form-control.is-invalid {
			background-image: none;
			padding: 0px;
			padding-top: 1px;
			padding-left: .75rem;
			border-color: #ced4da;
		}

		.was-validated .form-control:valid,
		.form-control.is-valid {
			background: #fff;
		}

		.was-validated .form-control:invalid,
		.form-control.is-invalid {
			background: #fcf678;
		}

		.was-validated .form-control.input.nomor:valid,
		.form-control.input.nomor.is-valid,
		.was-validated .form-control.input.nomor:invalid,
		.form-control.input.nomor.is-invalid {
			padding-left: 0rem;
		}

		.was-validated .form-control.input.validasi_modals:valid,
		.form-control.input.validasi_modals.is-valid,
		.was-validated .form-control.input.validasi_modals:invalid,
		.form-control.input.validasi_modals.is-invalid {
			padding-top: 2px !important;
		}

		.modal-title {
			font-size: 12px;
		}

		.close {
			font-size: 18px;
		}

		.form-control.input {
			padding-top: 7px;
		}
	</style>

	<!-- Rupiah -->
	<script>
		function convertToRupiah(objek) {
			separator = ".";
			a = objek.value;
			b = a.replace(/[^\d]/g, "");
			c = "";
			panjang = b.length;
			j = 0;
			for (i = panjang; i > 0; i--) {
				j = j + 1;
				if (((j % 3) == 1) && (j != 1)) {
					c = b.substr(i - 1, 1) + separator + c;
				} else {
					c = b.substr(i - 1, 1) + c;
				}
			}
			objek.value = c;

		}

		function convertToAngka() {
			var nominal = document.getElementById("nominal").value;
			var angka = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
			document.getElementById("angka").innerHTML = angka;
		}

		function convertToAngka() {
			var nominal1 = document.getElementById("nominal1").value;
			var angka1 = parseInt(nominal.replace(/,.*|[^0-9]/g, ''), 10);
			document.getElementById("angka1").innerHTML = angka;
		}
	</script>