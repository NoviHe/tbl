	<?php
		$data = mysqli_query($koneksi,"select * from laporan_resi");
		while($d = mysqli_fetch_array($data)){
	?>
	<div class="modal fade" id="modals_buat_laporan_<?php echo $d['no_resi'];?>" style="display:none;">
		<div class="modal-dialog tambah_akreditasi_sekolah">
			<div class="modal-content" style="padding-bottom:0px;">
				<div class="modal-body">
					<h4 class="mobile_h4">
						<i class="icon fa fa-plus" style="margin:0px 5px;"></i> 	
						Tambah Laporan :  								
						<strong>
							<?php echo $d['no_resi'];?>
						</strong>
					</h4>
					<p style="margin:8px 2px 0px 5px;">
						Anda tidak dapat menghapus laporan ini, jadi sebelum membuat laporan teguhkan hati Anda dulu.
					</p>
					<div class="box-body" style="padding-bottom:0px!important;">
						<div class="row">							
							<div class="col-md-12" style="padding-left:0px; padding-right:0px;">									
								<form class="form-horizontal" method="post" action="act?value=act_buat_laporan" enctype="multipart/form-data">
									<input type="hidden" name="no_resi" 	value="<?php echo $d['no_resi'];?>">
									
									<div class="box-body">
										<div class="form-group">
											<div class="col-sm-9">
												<input type="text" class="form-control" name="username" value="<?php echo $username;?>" style="font-weight:700;" readonly>
												<br>
												<input type="text" class="form-control" name="nama" value="<?php echo $nama;?>" style="font-weight:700;" readonly>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Status</label>
											<div class="col-sm-9">
												<select class="form-control" name="status" required>	
													<option value="">-- Pilih Salah Satu --</option>
													<option value="Paket Telah di Pickup Oleh Petugas">Telah di Pickup</option>
													<option value="Paket Telah di Kirim Oleh Petugas">Telah di Kirim</option>
													<option value="Paket Telah Sampai di Cek Point">Telah Sampai di Cek Point</option>
													<option value="Paket Dalam Proses Pengantaran Oleh Petugas">Dalam Proses Pengantaran</option>
													<option value="Paket Diterima">Paket Diterima</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Keterangan</label>
											<div class="col-sm-9">
												<textarea class="form-control" name="keterangan" style="resize:none" rows="3" placeholder="Tuliskan Keterangan"></textarea>		
											</div>
										</div>
										<div class="col-md-12" style="margin-top:25px!important; padding-right:0px; margin-bottom:-20px!important;">	
											<button type="submit" class="btn btn-warning pull-right button_proses">
												<i class="fa fa-plus"></i>
												Tambah Laporan
											</button>							
											<a href="" data-dismiss="modal" aria-label="close" class="btn btn-warning password" style="float:right; margin-right:10px;">
												<i class="fa fa-times"></i>
												Batal
											</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php 
	}
	?>