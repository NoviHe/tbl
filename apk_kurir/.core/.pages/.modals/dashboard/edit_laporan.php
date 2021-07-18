	<?php
		$data = mysqli_query($koneksi,"select * from db_tracking_resi");
		while($d = mysqli_fetch_array($data)){
	?>
	<div class="modal fade" id="modals_edit_laporan_<?php echo $d['id'];?>" style="display:none;">
		<div class="modal-dialog tambah_akreditasi_sekolah">
			<div class="modal-content" style="padding-bottom:0px;">
				<div class="modal-body">
					<h4 class="mobile_h4">
						<i class="icon fa fa-pencil" style="margin:0px 5px;"></i> 	
						Edit Laporan :  								
						<strong>
							<?php echo $d['no_resi'];?>
						</strong>
					</h4>
					<div class="box-body" style="padding-bottom:0px!important;">
						<div class="row">							
							<div class="col-md-12" style="padding-left:0px; padding-right:0px;">									
								<form class="form-horizontal" method="post" action="act?value=act_edit_laporan" enctype="multipart/form-data">
									<input type="hidden" name="id" 	value="<?php echo $d['id'];?>">
									
									<div class="box-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Status</label>
											<div class="col-sm-9">
												<select class="form-control" name="status" required>	
													<option value="Paket Telah di Pickup Oleh Petugas" <?php if($d['status']=='Paket Telah di Pickup Oleh Petugas'){echo "selected";} ?>>Telah di Pickup</option>	
													<option value="Paket Telah di Kirim Oleh Petugas" <?php if($d['status']=='Paket Telah di Kirim Oleh Petugas'){echo "selected";} ?>>Telah di Kirim</option>
													<option value="Paket Telah Sampai di Cek Point" <?php if($d['status']=='Paket Telah Sampai di Cek Point'){echo "selected";} ?>>Telah Sampai di Cek Point</option>
													<option value="Paket Dalam Proses Pengantaran Oleh Petugas" <?php if($d['status']=='Paket Dalam Proses Pengantaran Oleh Petugas'){echo "selected";} ?>>Dalam Proses Pengantaran</option>
													<option value="Paket Diterima" <?php if($d['status']=='Paket Diterima'){echo "selected";} ?>>Paket Diterima</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Keterangan</label>
											<div class="col-sm-9">
												<textarea class="form-control" name="keterangan" style="resize:none" rows="3" placeholder="Tuliskan Keterangan"><?php echo $d['keterangan'];?></textarea>		
											</div>
										</div>
										<div class="col-md-12" style="margin-top:25px!important; padding-right:0px; margin-bottom:-20px!important;">	
											<button type="submit" class="btn btn-warning pull-right button_proses">
												<i class="fa fa-pencil"></i>
												Edit Laporan
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