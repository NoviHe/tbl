	<div class="row">
		<div class="col-sm-12 col-md-12 col-lg-12 text-center">
			<img src="../.core/.assets/.img/qrcode/<?php echo $d['no_resi'];?>.png" style="width:100px; margin-bottom:10px;">
		</div>
	</div>
	<form class="form_validation" method="post" action=".act?value=edit_laporan_resi" enctype="multipart/form-data" novalidate>
		<input type="hidden" name="no_resi" value="<?php echo $d['no_resi'];?>">
		
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
						<input type="text" class="form-control input disabled modals_padding" name="tanggal" value="<?php echo date('d-m-Y', strtotime($d['tanggal']));?> - <?php echo date('H:i:s', strtotime($d['tanggal']));?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							No. Resi
						</label>
						<input type="text" class="form-control input disabled modals_padding" name="no_resi" value="<?php echo $d['no_resi'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Layanan
						</label>
						<input type="text" class="form-control input disabled modals_padding" name="layanan" value="<?php echo $d['layanan'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Asal Pengiriman
						</label>
						<input type="text" class="form-control input disabled modals_padding" name="kota_agen" value="<?php echo $d['kota_agen'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-2">
					<div class="position-relative form-group">
						<label class="data">
							Tujuan
						</label>
						<input type="text" class="form-control input disabled modals_padding" name="kota_agen" value="<?php echo $d['tujuan_pengiriman'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Biaya /Kg
						</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="btn btn-secondary form_grup_data disabled_form_grup_data">
									Rp.
								</span>
							</div>
							<input type="text" class="form-control input disabled text-right modals_padding" name="biaya_pengiriman" value="<?php echo $d['biaya_pengiriman'];?>" disabled style="padding-right:10px;">
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-2">
					<div class="position-relative form-group">
						<label class="data">
							Berat Kiriman
						</label>
						<div class="input-group">
							<input type="number" class="form-control input nomor modals_padding" name="berat_kiriman" value="<?php echo $d['berat_kiriman'];?>" disabled>
							<div class="input-group-append">
								<span class="btn btn-secondary form_grup_data disabled_form_grup_data">
									Kg
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-2">
					<div class="position-relative form-group">
						<label class="data">
							Qty
						</label>
						<div class="input-group">
							<input type="number" class="form-control input nomor modals_padding validasi_modals" name="jumlah_barang" value="<?php echo $d['jumlah_barang'];?>" disabled>
							<div class="input-group-append">
								<span class="btn btn-secondary form_grup_data disabled_form_grup_data">
									KOLI
								</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Total Biaya Pengiriman
						</label>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="btn btn-secondary form_grup_data disabled_form_grup_data">
									Rp.
								</span>
							</div>
							<input type="text" class="form-control input disabled text-right modals_padding" name="total_harga" value="<?php echo $d['total_harga'];?>" disabled>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Dimensi / Volume [CM] 
						</label>
						<div class="row">
							<div class="col-sm-4 col-md-4 col-lg-4 tiga_kolom_mobile">
								<input type="number" class="form-control input nomor modals_padding validasi_modals" name="dimensi_panjang" value="<?php echo $d['dimensi_panjang'];?>" disabled>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 tiga_kolom_mobile">
								<input type="number" class="form-control input nomor modals_padding validasi_modals" name="dimensi_lebar" value="<?php echo $d['dimensi_lebar'];?>" disabled>
							</div>
							<div class="col-sm-4 col-md-4 col-lg-4 tiga_kolom_mobile">
								<input type="number" class="form-control input nomor modals_padding validasi_modals" name="dimensi_tinggi" value="<?php echo $d['dimensi_tinggi'];?>" disabled>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Jenis Barang
						</label>
						<input type="text" class="form-control input modals_padding validasi_modals" name="jenis_barang" value="<?php echo $d['jenis_barang'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Nama Marketing
						</label>
						<input type="text" class="form-control input disabled modals_padding" name="nama_marketing" value="<?php echo $d['nama_marketing'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-3">
					<div class="position-relative form-group">
						<label class="data">
							Metode Pembayaran
						</label>
						<input type="text" class="form-control input disabled modals_padding" name="metode_pembayaran" value="<?php echo $d['metode_pembayaran'];?>" disabled>
					</div>
				</div>
			</div>
		</div>
		
		<div class="form_grup_with_judul double">
			<div class="judul">
				Pengirim
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							Nama Pengirim
						</label>
						<input type="text" class="form-control input modals_padding validasi_modals" name="nama_pengirim" value="<?php echo $d['nama_pengirim'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							No. Telp
						</label>
						<input type="number" class="form-control input text-left modals_padding validasi_modals" name="no_telp_pengirim" value="<?php echo $d['no_telp_pengirim'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Alamat
						</label>
						<input type="text" class="form-control input modals_padding validasi_modals" name="alamat_pengirim" value="<?php echo $d['alamat_pengirim'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Keterangan
						</label>
						<input type="text" class="form-control input no_disabled modals_padding validasi_modals" name="keterangan" value="<?php echo $d['keterangan'];?>" disabled>
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
							Nama Penerima
						</label>
						<input type="text" class="form-control input modals_padding validasi_modals" name="nama_penerima" value="<?php echo $d['nama_penerima'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							No. Telp
						</label>
						<input type="number" class="form-control input text-left modals_padding validasi_modals" name="no_telp_penerima" value="<?php echo $d['no_telp_penerima'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Alamat
						</label>
						<input type="text" class="form-control input modals_padding validasi_modals" name="alamat_penerima" value="<?php echo $d['alamat_penerima'];?>" disabled>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-12">
					<div class="position-relative form-group">
						<label class="data">
							Patokan Tempat Pengiriman
						</label>
						<input type="text" class="form-control input no_disabled modals_padding validasi_modals" name="patokan" value="<?php echo $d['patokan'];?>" disabled>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12 text-center">
				<a href=".act?value=hapus_laporan_resi&no_resi=<?php echo $d['no_resi'];?>" class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;">
					Hapus
				</a>	
				<button type="button" data-dismiss="modal" aria-label="Close" class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 10px!important;">
					Batal
				</button>
			</div>
		</div>
	</form>