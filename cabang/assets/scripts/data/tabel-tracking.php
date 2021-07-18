	<?php
		$query = mysqli_query($koneksi, "SELECT max(no_resi) as kodeTerbesar FROM laporan_resi");
		$data = mysqli_fetch_array($query);
		$kode_resi = $data['kodeTerbesar'];
		$urutan = (int) substr($kode_resi, 6, 6);
		$urutan++;
		$huruf = "TBL-";
		$kode_resi = $huruf . sprintf("%06s", $urutan);
	?>
	<form class="form_validation" method="post" action="" enctype="multipart/form-data" novalidate>
		
		<div class="form_grup_with_judul double">
			<div class="judul">
				Trace &amp; Tracking
			</div>
			<div class="row">	
				<div class="col-sm-12 col-md-12 col-lg-6">
					<div class="position-relative form-group">
						<label class="data">
							No. Resi <sup class="wajib">*</sup>
						</label>
						<input type="text" class="form-control input" name="aaaa" placeholder="TBL-XXXXXX" required>
					</div>
				</div>
				<div class="col-sm-12 col-md-12 col-lg-6">
					<button class="mt-1 btn btn-primary save_data" style="margin:27px 0px 0px 0px!important;">
						Tracking
					</button>
				</div>
			</div>
		</div>
		<div class="form_grup_with_judul double f_right">
			<div class="judul">
				Tracking Detail
			</div>
		</div>
	</form>
	