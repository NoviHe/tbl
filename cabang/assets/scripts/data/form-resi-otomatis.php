<?php
$query = mysqli_query($koneksi, "SELECT max(no_resi) as kodeTerbesar FROM laporan_resi");
$data = mysqli_fetch_array($query);
$kode_resi = $data['kodeTerbesar'];
$urutan = (int) substr($kode_resi, 6, 6);
$urutan++;
$huruf = "TBL-";
$kode_resi = $huruf . sprintf("%06s", $urutan);
?>
<form class="form_validation" method="post" action=".act?value=tambah_laporan_resi" enctype="multipart/form-data" novalidate>
	<input type="hidden" name="username_agen" value="<?php echo $username; ?>">
	<input type="hidden" name="kota_agen" value="<?php echo $kota['kota']; ?>">
	<input type="hidden" name="no_resi" value="<?php echo $kode_resi; ?>">

	<div class="form_grup_with_judul">
		<div class="judul">
			Layanan
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						Tanggal
					</label>
					<input type="text" class="form-control input disabled" name="tanggal" value="<?php echo tgl_Indonesia(date('D, d F Y', strtotime($tgl_sekarang))); ?>" disabled>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						No. Resi
					</label>
					<input type="text" class="form-control input disabled" name="no_resi" value="[AUTO]" disabled>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						Layanan
					</label>
					<input type="text" class="form-control input disabled" name="layanan" value="REGULER" readonly>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						Asal Pengiriman
					</label>
					<!-- <input type="text" class="form-control input disabled" name="kota_agen" value="<?php echo $kota['kota']; ?> - <?php echo $username; ?>" disabled> -->
					<?php
					$query = "SELECT * FROM `data_resi` WHERE `dari` =   '" . $kota['kota'] . "'";
					$result = mysqli_query($koneksi, $query);
					?>
					<select class="form-control select2_tujuan_pengiriman" id="tujuan" name="kota_agen" required>
						<option value="">-- PILIH SALAH SATU --</option>
						<?php while ($data = mysqli_fetch_assoc($result)) { ?>
							<option value="<?php echo $data['tujuan']; ?>"><?php echo $data['tujuan']; ?></option>
						<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						Tujuan Pengiriman <sup class="wajib">*</sup>
					</label>
					<select name="harga" style="display:none;">
						<option value="harga"></option>
					</select>
					<div class="input-group">
						<?php
						$query = "SELECT * FROM `data_resi` WHERE `dari` =   '" . $kota['kota'] . "'";
						$result = mysqli_query($koneksi, $query);
						?>
						<select class="form-control select2_tujuan_pengiriman" id="tujuan" name="tujuan_pengiriman" required>
							<option value="">-- PILIH SALAH SATU --</option>
							<?php while ($data = mysqli_fetch_assoc($result)) { ?>
								<option value="<?php echo $data['tujuan']; ?>"><?php echo $data['tujuan']; ?></option>
							<?php
							}
							?>
						</select>
						<div class="input-group-append">
							<a data-toggle="modal" data-target="#modals_tambah_data_resi" data-backdrop="static" data-keyboard="false" class="btn btn-secondary form_plus">
								+
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-2">
				<div class="position-relative form-group">
					<label class="data">
						Biaya /Kg <sup class="wajib">*</sup>
					</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="btn btn-secondary form_grup_data">
								Rp.
							</span>
						</div>
						<input type="text" class="form-control input disabled text-right" id="biaya_pengiriman" name="biaya_pengiriman" value="0" readonly style="padding-right:10px;">
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-2">
				<div class="position-relative form-group">
					<label class="data">
						Berat Kiriman <sup class="wajib">*</sup>
					</label>
					<div class="input-group">
						<input type="number" class="form-control input nomor bg_yellow" id="myInput_berat_kiriman" onchange="total()" name="berat_kiriman" value="0" required>
						<div class="input-group-append">
							<span class="btn btn-secondary form_grup_data">
								Kg
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-2">
				<div class="position-relative form-group">
					<label class="data">
						Qty <sup class="wajib">*</sup>
					</label>
					<div class="input-group">
						<input type="number" class="form-control input nomor" name="jumlah_barang" value="1" required>
						<div class="input-group-append">
							<span class="btn btn-secondary form_grup_data">
								KOLI
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						Total Biaya Pengiriman <sup class="wajib">*</sup>
					</label>
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="btn btn-secondary form_grup_data">
								Rp.
							</span>
						</div>
						<input type="text" class="form-control input disabled text-right" id="total_harga" name="total_harga" value="0" readonly>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						Dimensi / Volume [CM] <sup class="wajib">*</sup>
					</label>
					<div class="row">
						<div class="col-sm-4 col-md-4 col-lg-4 tiga_kolom_mobile">
							<input type="number" class="form-control input nomor" name="dimensi_panjang" placeholder="P" required>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 tiga_kolom_mobile">
							<input type="number" class="form-control input nomor" name="dimensi_lebar" placeholder="L" required>
						</div>
						<div class="col-sm-4 col-md-4 col-lg-4 tiga_kolom_mobile">
							<input type="number" class="form-control input nomor" name="dimensi_tinggi" placeholder="T" required>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						Jenis Barang <sup class="wajib">*</sup>
					</label>
					<input type="text" class="form-control input" name="jenis_barang" value="" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						Nama Marketing <sup class="wajib">*</sup>
					</label>
					<?php
					$query = "SELECT * FROM `db_marketing`";
					$result = mysqli_query($koneksi, $query);
					?>
					<select class="form-control select2_nama_marketing" id="nama_marketing" name="nama_marketing" required style="width:100%;">
						<option value="">-- PILIH SALAH SATU --</option>
						<?php while ($data = mysqli_fetch_assoc($result)) { ?>
							<option value="<?php echo $data['nama']; ?>"><?php echo $data['nama']; ?></option>
						<?php
						}
						?>
					</select>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-3">
				<div class="position-relative form-group">
					<label class="data">
						Metode Pembayaran <sup class="wajib">*</sup>
					</label>
					<select class="form_hide_select form-control select2_penting custom-select" id="metode_pembayaran" name="metode_pembayaran" onchange="myFunction()" required style="cursor:pointer;">
						<option value="TUNAI">TUNAI</option>
						<option value="COD">COD</option>
						<option value="INVOICE">INVOICE</option>
					</select>
				</div>
			</div>
		</div>
	</div>

	<!-- Hide Form -->
	<div class="hide_satu" style="display:none;"></div>
	<div class="hide_dua" style="display:none;"></div>
	<div class="block_tiga" style="display:none;">
		<div class="form_grup_with_judul">
			<div class="judul">
				Invoice
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-2">
					<div class="position-relative form-group">
						<label class="data">
							Jangka Waktu <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<input type="number" class="form-control input nomor bg_yellow" id="jangka_waktu" name="jangka_waktu_bulanan" readonly value="14" required>
							<div class="input-group-append">
								<span class="btn btn-secondary form_grup_data">
									Hari
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-10">
					<div class="position-relative form-group">
						<label class="data">
							Jumlah Tagihan <sup class="wajib">*</sup>
						</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="btn btn-secondary form_grup_data">
									Rp.
								</span>
							</div>
							<input type="text" class="form-control input nomor bg_yellow disabled" id="total_harga_bulanan" name="total_harga_bulanan" value="0" readonly onclick="total_tagihan()">
							<div class="input-group-append">
								<span class="btn btn-secondary form_grup_data">
									/Hari
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		const TUNAI = document.querySelector(".hide_satu");
		const COD = document.querySelector(".hide_dua");
		const INVOICE = document.querySelector(".block_tiga");

		document.querySelector(".form_hide_select").addEventListener("change", (event) => {
			if (event.target.value === "TUNAI") {
				TUNAI.style.display = "none";
				COD.style.display = "none";
				INVOICE.style.display = "none";
			} else if (event.target.value === "COD") {
				TUNAI.style.display = "none";
				COD.style.display = "none";
				INVOICE.style.display = "none";
			} else if (event.target.value === "INVOICE") {
				TUNAI.style.display = "none";
				COD.style.display = "none";
				INVOICE.style.display = "block";
			}
		});
	</script>
	<!-- End Hide Form -->

	<div class="form_grup_with_judul double">
		<div class="judul">
			Pengirim
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="position-relative form-group">
					<label class="data">
						Nama Pengirim <sup class="wajib">*</sup>
					</label>
					<input type="text" class="form-control input" name="nama_pengirim" value="" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="position-relative form-group">
					<label class="data">
						No. Telp <sup class="wajib">*</sup>
					</label>
					<input type="number" class="form-control input text-left" name="no_telp_pengirim" placeholder="0" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="position-relative form-group">
					<label class="data">
						Alamat <sup class="wajib">*</sup>
					</label>
					<input type="text" class="form-control input" name="alamat_pengirim" value="" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="position-relative form-group">
					<label class="data">
						Keterangan
					</label>
					<input type="text" class="form-control input no_required" name="keterangan" value="-">
				</div>
			</div>
		</div>
	</div>
	<div class="form_grup_with_judul double f_right">
		<div class="judul">
			Penerima
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="position-relative form-group">
					<label class="data">
						Nama Penerima <sup class="wajib">*</sup>
					</label>
					<input type="text" class="form-control input" name="nama_penerima" value="" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-6">
				<div class="position-relative form-group">
					<label class="data">
						No. Telp <sup class="wajib">*</sup>
					</label>
					<input type="number" class="form-control input text-left" name="no_telp_penerima" placeholder="0" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="position-relative form-group">
					<label class="data">
						Alamat <sup class="wajib">*</sup>
					</label>
					<input type="text" class="form-control input" name="alamat_penerima" value="" required>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<div class="position-relative form-group">
					<label class="data">
						Patokan Tempat Pengiriman
					</label>
					<input type="text" class="form-control input no_required" name="patokan" value="-">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;">
				Buat Resi
			</button>
			<a href="resi-otomatis" class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 10px!important;">
				Reset
			</a>
		</div>
	</div>
</form>

<!-- Select2 -->
<script>
	$(function() {
		/* Function */
		$select2_tujuan_pengiriman = $('.select2_tujuan_pengiriman').select2();
		$select2_tujuan_pengiriman.on("select2:select", function(e) {
			var harga = "" + $("[name='harga']").val();
			var kota_agen = $("[name='kota_agen']").val();
			var tujuan = e.params.data.text;

			$.ajax({
				url: "assets/.act/proses_data_ongkir.php",
				method: "POST",
				data: {
					"harga": harga,
					"kota_agen": kota_agen,
					"tujuan": tujuan
				},
				success: function(response) {
					$("[id='biaya_pengiriman']").val(response);
				}
			})
		});
		/* CSS */
		$(".select2_tujuan_pengiriman").select2({
			dropdownCssClass: "font_size_dropdown_select_2"
		});

		$('.select2_nama_marketing').select2();
		$(".select2_nama_marketing").select2({
			dropdownCssClass: "font_size_dropdown_select_2"
		});

		$('.select2_metode_pembayaran').select2();
		$(".select2_metode_pembayaran").select2({
			dropdownCssClass: "font_size_dropdown_select_2"
		});
	})
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
	function total() {
		var val_perhitungan = document.getElementById('biaya_pengiriman').value * parseInt(document.getElementById('myInput_berat_kiriman').value);
		var jumlah_harga = val_perhitungan;

		document.getElementById('total_harga').value = jumlah_harga;
		document.getElementById('total_harga_2').value = jumlah_harga;
	}
</script>
<script>
	function total_tagihan() {
		var val_perhitungan_tagihan = document.getElementById('total_harga').value / parseInt(document.getElementById('jangka_waktu').value);
		var jumlah_harga_tagihan = val_perhitungan_tagihan;

		document.getElementById('total_harga_bulanan').value = jumlah_harga_tagihan;
	}
</script>

<div class="row" style="display:none;">
	<div class="col-sm-12 col-md-12 col-lg-3">
		<div class="position-relative form-group">
			<label class="data">
				Tambah Kontak <sup class="wajib">*</sup>
			</label>
			<div class="cekbox">
				<div class="custom-radio custom-control custom-control-inline">
					<input type="radio" id="aaaa" name="aaaa" class="custom-control-input">
					<label class="custom-control-label" for="aaaa">
						Ya
					</label>
				</div>
				<div class="custom-radio custom-control custom-control-inline">
					<input type="radio" id="bbb" name="aaaa" class="custom-control-input">
					<label class="custom-control-label" for="bbb">
						Tidak
					</label>
				</div>
			</div>
		</div>
	</div>
	<div class="col-sm-12 col-md-12 col-lg-3">
		<div class="position-relative form-group">
			<label class="data">
				Biaya Pengiriman /Kg
			</label>
			<input type="text" class="form-control input" name="aaa" value="" required>
		</div>
	</div>
	<div class="col-sm-12 col-md-12 col-lg-3">
		<div class="position-relative form-group">
			<label class="data">
				Berat Kiriman [Kg]
			</label>
			<input type="number" class="form-control input" name="aaa" value="50" required>
		</div>
	</div>
	<div class="col-sm-12 col-md-12 col-lg-3">
		<div class="position-relative form-group">
			<label class="data">
				Dimensi / Volume [CM]
			</label>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-4">
					<input type="number" class="form-control input" name="aaa" placeholder="P" required>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<input type="number" class="form-control input" name="aaa" placeholder="L" required>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-4">
					<input type="number" class="form-control input" name="aaa" placeholder="T" required>
				</div>
			</div>
		</div>
	</div>
</div>