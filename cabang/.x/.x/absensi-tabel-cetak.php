	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header">
					<div class="card-header-title font-size-lg text-capitalize font-weight-normal">
						<a href="laporan-pemasukan-cetak-data">
							<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin" style="margin-top:5px;"> </i>
						</a>
						Laporan Absensi : &nbsp;
						<strong>
							<?php 
								$bulan=date('m');
								$tahun=date('Y');
							?>
							<?php echo tgl_Indonesia(date('F Y'));?> 
						</strong>
					</div>
					<div class="btn-actions-pane-right actions-icon-btn mobile_hide" style="margin-right:5px;">
						<div class="btn-group dropdown">
							<button type="button" data-toggle="dropdownx" aria-haspopup="true" aria-expanded="false" class="btn-icon btn-icon-only btn btn-link">
								<i class="pe-7s-more btn-icon-wrapper"></i>
							</button>
						</div>
					</div>
				</div>	
				
				
				<div id="printarea" class="row" style="padding:15px">
					<div class="col-sm-12 col-md-12 col-xl-12">
						<div class="main-card mb-3 card" style="border:none;">
							<form class="no_print input_form_out" method="post" action="laporan-absensi" enctype="multipart/form-data" novalidate>
								<div class="row">
									<div class="col-sm-12 col-md-12 col-lg-3">
										<div class="form_input" style="margin-top:15px;">
										
											<?php
											  $query = "select * from db_usermanager where tipe_akun='staf_karyawan'";
											  $result = mysqli_query($koneksi, $query);
											?>
											<select class="form-control" id="nama" name="nama" style="border:none; font-size: 0.75rem;border-bottom: 1px dashed #ced4da; outline: none; border-radius:0px; padding:0px;" required>
												<option value="">-- Nama Karyawan --</option>
												<?php while($data = mysqli_fetch_assoc($result) ){?>
												<option value="<?php echo $data['nama'];?>"><?php echo $data['nama'];?></option>
											<?php 
											}
											?>	
											</select>
											<div class="invalid-feedback">
												Nama Karyawan <?php echo $feedback;?>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-3">
										<div class="form_input" style="margin-top:15px;">
											<select class="form-control" id="bulan" name="bulan" required style="border:none; font-size: 0.75rem;border-bottom: 1px dashed #ced4da; outline: none; border-radius:0px; padding:0px;">	
												<option value="">-- Data Bulan --</option>
												<option value="1">Januari</option>
												<option value="2">Februari</option>
												<option value="3">Maret</option>
												<option value="4">April</option>
												<option value="5">Mei</option>
												<option value="6">Juni</option>
												<option value="7">Juli</option>
												<option value="8">Agustus</option>
												<option value="9">September</option>
												<option value="10">Oktober</option>
												<option value="11">November</option>
												<option value="12">Desember</option>
											</select>
											<div class="invalid-feedback">
												Data Bulan <?php echo $feedback;?>
											</div>
										</div>	
									</div>
									<div class="col-sm-12 col-md-12 col-lg-3">
										<div class="form_input" style="margin-top:15px;">
											<input type="number" class="form-control" id="tahun" name="tahun" placeholder="Data Tahun" required>
											<div class="invalid-feedback">
												Data Tahun <?php echo $feedback;?>
											</div>
										</div>	
									</div>
									<div class="col-sm-12 col-md-12 col-lg-2">
										<button class="mt-1 btn btn-primary save_data" name="pencarian_data" style="margin:25px 0px 0px 0px!important;">
											<i class="fa fa-search" style="margin-right:5px;"></i>
											Cari Data
										</button>
									</div>
									<div class="col-sm-12 col-md-12 col-lg-1">
										<a href="" onclick="window.print();">
											<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin" style="margin-top:27px; font-size:25px;"> </i>
										</a>
									</div>
								</div>
							</form>
							<script>
								(function () {
								  'use strict'
								  var forms = document.querySelectorAll('.input_form_out')

								  Array.prototype.slice.call(forms)
									.forEach(function (form) {
									  form.addEventListener('submit', function (event) {
										if (!form.checkValidity()) {
										  event.preventDefault()
										  event.stopPropagation()
										}

										form.classList.add('was-validated')
									  }, false)
									})
								})()																
							</script>
							<div style="width:944px; overflow-x:auto;white-space:nowrap; padding:15px; padding-bottom:0px; display:none;">
								<table id="laporan_absensi" class="table table-hover table-bordered">
									<thead>
										<tr>
											<th>
												No.
											</th>
											<th>
												Nama
											</th>
											<th>
												Absen
											</th>
											<?php 
												$hari_ini = date("d-m-Y");
												$tgl_pertama = date('1', strtotime($hari_ini));
												$tgl_terakhir = date('t', strtotime($hari_ini));
												for ($i=$tgl_pertama; $i <= $tgl_terakhir; $i++) { 
													echo "<th>$i</th>";
												}
											?>
										</tr>
									</thead>
									<tbody>	
										<tr>
											<td rowspan="2">
												<?php echo $no++;?>
											</td>
											<td rowspan="2" style="text-align:left;">
												<?php echo $d['nama'];?>
											</td>
											<td style="font-weight:500;">Masuk</td>
											<?php 
												$hari_ini = date("d-m-Y");
												$tgl_pertama = date('1', strtotime($hari_ini));
												$tgl_terakhir = date('t', strtotime($hari_ini));
												for ($i=$tgl_pertama; $i <= $tgl_terakhir; $i++) { 
													$stmt = mysqli_query($koneksi , "select tanggal from db_karyawan where year(tanggal) = '".$tahun."' and month(tanggal) = '".$bulan."' and day(tanggal) = '".$i."' and jenis_absen = 'absen masuk' and nama =  '".$d['nama']."'");
													if(mysqli_num_rows($stmt) > 0) 
													{
														$stmtRes = $stmt->fetch_assoc();
														echo "<td>".date('H:i:s', strtotime($stmtRes['tanggal']))."</td>";
													} else {
														echo "<td>-</td>";
													}
													
												}
												
											?>
										</tr>
										<tr>
											<td style="font-weight:500;">Pulang</td>
											<?php 
												$hari_ini = date("d-m-Y");
												$tgl_pertama = date('1', strtotime($hari_ini));
												$tgl_terakhir = date('t', strtotime($hari_ini));
												for ($i=$tgl_pertama; $i <= $tgl_terakhir; $i++) { 
													$stmt = mysqli_query($koneksi , "select tanggal from db_karyawan where year(tanggal) = '".$tahun."' and month(tanggal) = '".$bulan."' and day(tanggal) = '".$i."' and jenis_absen = 'absen pulang' and nama =  '".$d['nama']."'");
													if(mysqli_num_rows($stmt) > 0) 
													{
														$stmtRes = $stmt->fetch_assoc();
														echo "<td>".date('H:i:s', strtotime($stmtRes['tanggal']))."</td>";
													} else {
														echo "<td>-</td>";
													}
													
												}
											?>
										</tr>	
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
	
	
			</div>
		</div>
	</div>