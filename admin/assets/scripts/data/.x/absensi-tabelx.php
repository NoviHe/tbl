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
				<div class="row">
					<div class="col-sm-12 col-md-12 col-xl-12">
						<table id="laporan_absensi" class="table table-hoverz table-stripedz table-bordered">
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
								<?php
									$no = 1;
									$data = mysqli_query($koneksi,"select * from db_usermanager where tipe_akun='staf_karyawan'");
									while($d = mysqli_fetch_array($data)){
								?>	
								<tr>
									<td rowspan="2">
										<?php echo $no++;?>
									</td>
									<td rowspan="2">
										<?php echo $d['nama'];?>
									</td>
									<td>Masuk</td>
									<?php 
										$hari_ini = date("d-m-Y");
										$tgl_pertama = date('1', strtotime($hari_ini));
										$tgl_terakhir = date('t', strtotime($hari_ini));
										for ($i=$tgl_pertama; $i <= $tgl_terakhir; $i++) { 
											$stmt = mysqli_query($koneksi , "select tanggal from db_karyawan where year(tanggal) = '".$tahun."' and month(tanggal) = '".$bulan."' and day(tanggal) = '".$i."' and jenis_absen = 'absen masuk' and username_agen =  '".$d['username_agen']."'");
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
									<td>Pulang</td>
									<?php 
										$hari_ini = date("d-m-Y");
										$tgl_pertama = date('1', strtotime($hari_ini));
										$tgl_terakhir = date('t', strtotime($hari_ini));
										for ($i=$tgl_pertama; $i <= $tgl_terakhir; $i++) { 
											$stmt = mysqli_query($koneksi , "select tanggal from db_karyawan where year(tanggal) = '".$tahun."' and month(tanggal) = '".$bulan."' and day(tanggal) = '".$i."' and jenis_absen = 'absen pulang' and username_agen =  '".$d['username_agen']."'");
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
								<?php 
								}
								?>	
							</tbody>
						</table>
					</div>
				</div>
				
				
				
					
				
			</div>
		</div>
	</div>