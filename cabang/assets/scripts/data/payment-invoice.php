	<?php
	$no_resi = $_GET['no_resi'];
	$data = mysqli_query($koneksi, "select * from db_invoice where no_resi='$no_resi'");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-xl-12">
				<div class="main-card mb-3 card" style="padding-bottom:0px;">
					<div class="card-header-tab card-header no_print">
						<div class="card-header-title font-weight-normal font_small_tabel">
							<a href="">
								<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin small_print"></i>
							</a>
							Invoice : &nbsp;
							<strong>
								<?php echo $d['no_resi']; ?>
							</strong>
						</div>
					</div>

					<?php
					$no_resi = $_GET['no_resi'];
					$data = mysqli_query($koneksi, "select * from db_invoice where no_resi='$no_resi'");
					while ($d = mysqli_fetch_array($data)) {
					?>
						<div style="padding:15px 15px 0px 15px; margin-bottom:-10px;">
							<div class="form_grup_with_judul">
								<div class="judul">
									Data Invoice
								</div>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-2">
										<div class="position-relative form-group">
											<label class="data">
												Tanggal Invoice
											</label>
											<input type="text" class="form-control input readonly" value="<?php echo date('d-m-Y', strtotime($d['tanggal_dibuat_invoice'])); ?>" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-2">
										<div class="position-relative form-group">
											<label class="data">
												No. Resi
											</label>
											<input type="text" class="form-control input readonly" value="<?php echo $d['no_resi']; ?>" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-3">
										<div class="position-relative form-group">
											<label class="data">
												Total Harga
											</label>
											<input type="text" class="form-control input readonly" value="Rp. <?php echo number_format($d['jumlah_harga'], 0, ',', '.'); ?>" style="text-transform:none;" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-2">
										<div class="position-relative form-group">
											<label class="data">
												Jangka Waktu
											</label>
											<input type="text" class="form-control input readonly" value="<?php echo $d['jangka_waktu_bulanan']; ?> Hari" readonly>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-3">
										<div class="position-relative form-group">
											<label class="data">
												Tagihan Harian
											</label>
											<input type="text" class="form-control input readonly" value="Rp. <?php echo number_format($d['total_harga_bulanan'], 0, ',', '.'); ?>" style="text-transform:none;" readonly>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php
					}
					?>

































					<div class="media_print hide" style="padding:20px 15px;">
						<div class="satu">
							<img src="../.core/.assets/.img/logo.png" class="img_logo">
							<div class="judul_cetak">
								<h2>
									Tahta Buana Logistic (TBL Cargo)
								</h2>
								<?php
								$data = mysqli_query($koneksi, "select * from db_usermanager where username='$username' AND tipe_akun='agen'");
								while ($d = mysqli_fetch_array($data)) {
								?>
									<p>
										<?php echo $d['alamat']; ?>
									</p>
								<?php
								}
								?>
							</div>
							<div class="judul_cetak" style="float:right;">
								<?php
								$data = mysqli_query($koneksi, "select * from laporan_resi where no_resi='$no_resi' AND username_agen='$username'");
								while ($d = mysqli_fetch_array($data)) {
								?>
									<img src="../.core/.assets/.img/qrcode/<?php echo $d['no_resi']; ?>.png" class="img_qrcode">
								<?php
								}
								?>
							</div>
							<div class="judul_cetak" style="float:right; text-align:right;">
								<?php
								$data = mysqli_query($koneksi, "select * from laporan_resi where no_resi='$no_resi' AND username_agen='$username'");
								while ($d = mysqli_fetch_array($data)) {
								?>
									<h2>
										<?php echo $d['no_resi']; ?>
									</h2>
								<?php
								}
								?>
								<?php
								$data = mysqli_query($koneksi, "select * from db_usermanager where username='$username' AND tipe_akun='agen'");
								while ($d = mysqli_fetch_array($data)) {
								?>
									<p class="cetak_p" style="font-size:14px; font-weight:700; margin-top:15px;">
										<?php echo $d['no_telp']; ?>
										<br>
										www.tahtabuanalogistic.com
										<br>
										INVOICE
									</p>
								<?php
								}
								?>
							</div>
							<div style="border:1px solid red; display:block; text-align:right; margin-top:50px;">
								<div class="invoice_satu">
									Kepada Yth
								</div>
								<div class="invoice_dua">
									:
								</div>
								<div class="invoice_tiga">
									Budi Anduk
								</div>
								<br>
								<div class="invoice_satu">
									Kepada Yth
								</div>
								<div class="invoice_dua">
									:
								</div>
								<div class="invoice_tiga">
									Budi Anduk
								</div>
							</div>
						</div>
						<div class="first_page_print hide" style="margin-top:50px;">
							<?php include "assets/scripts/data/detail_cetak_resi.php"; ?>
						</div>
					</div>

				</div>
			</div>
		</div>
	<?php
	}
	?>