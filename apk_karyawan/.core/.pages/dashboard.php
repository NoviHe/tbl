	<style>
		div.dataTables_wrapper div.dataTables_length {
			display:none!important;
		}
		.form-control input-sm {
			display:block!important;
			width:100px!important;
		}
		div.dataTables_wrapper div.dataTables_paginate ul.pagination {
			display:none!important;
		}
		.dataTables_info {
			display:none;
		}
		div.dataTables_wrapper div.dataTables_filter label {
			display:none!important;
		}
	</style>
	<div class="content-wrapper">
		<section class="content-header">
			<h1 style="font-size:20px;">
				Selamat Datang, <?php echo $nama;?>
			</h1>
			<ol class="breadcrumb">
				<li class="active">
					<a href="" style="pointer-events: none; cursor: auto;">
						<i class="fa fa-calendar" style="margin-right:5px;"></i> 
						<script type='text/javascript'>
							var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
							var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum&#39;at', 'Sabtu'];
							var date = new Date();
							var day = date.getDate();
							var month = date.getMonth();
							var thisDay = date.getDay(),
								thisDay = myDays[thisDay];
							var yy = date.getYear();
							var year = (yy < 1000) ? yy + 1900 : yy;
							document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);							
						</script>
						&nbsp; <i class="fa fa-clock-o" style="margin-right:2px;"></i> <div id="clock" style="display:inline-block;"></div> WIB
						<script type="text/javascript">
							function showTime() {
								var a_p = "";
								var today = new Date();
								var curr_hour = today.getHours();
								var curr_minute = today.getMinutes();
								var curr_second = today.getSeconds();
								if (curr_hour < 24) {
									a_p = "";
								} else {
									a_p = "";
								}
								if (curr_hour == 0) {
									curr_hour = 24;
								}
								if (curr_hour > 24) {
									curr_hour = curr_hour - 24;
								}
								curr_hour = checkTime(curr_hour);
								curr_minute = checkTime(curr_minute);
								curr_second = checkTime(curr_second);
							 document.getElementById('clock').innerHTML=curr_hour + " : " + curr_minute + " : " + curr_second + " " + a_p;
								}
					 
							function checkTime(i) {
								if (i < 10) {
									i = "0" + i;
								}
								return i;
							}
							setInterval(showTime, 500);
						</script>
					</a>
				</li>
			</ol>
			<p style="display:inine-block; text-align:center; text-transform:uppercase; font-size:11px; font-weight:600; margin-top:15px; margin-bottom:0px;">
				Halaman akan ter-refresh otomatis dalam : <span id="hitung_mundur">300</span> detik
			</p>
			<script type="text/javascript">
				var waktu = 300;
				setInterval(function() {
				waktu--;
				if(waktu < 0) {
				window.location = 'index';
				}else{
				document.getElementById("hitung_mundur").innerHTML = waktu;
				}
				}, 1000);
			</script>
		</section>			
		<section class="content">	
			<div class="row">	
			
				<!-- Absen Masuk -->
				<div class="col-md-12">
					<div class="box box-warning profil_data">
						<div class="box-header with-border" style="text-align:center;">
							<h3 class="box-title">
								<i class="fa fa-calendar"></i>
								Absen Masuk
							</h3>
						</div>
						<div class="box-body">
							<form class="form-horizontal" method="post" action="act?value=act_tambah_absen" enctype="multipart/form-data">
								<input type="hidden" name="jenis_absen" 	value="absen masuk">
								<input type="hidden" name="username" 		value="<?php echo $username;?>">
								<input type="hidden" name="nama" 			value="<?php echo $nama;?>">
								<input type="hidden" name="username_agen" 	value="<?php echo $username_agen;?>">
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-3 control-label">Lokasi Absen</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="lokasi" placeholder="Lokasi Anda Berada" required>
										</div>
										</div>
									<div class="col-md-12" style="margin-top:10px; text-align:center;">	
										<button type="submit" class="btn btn-warning ">
											Absen Masuk
										</button>
									</div>
								</div>
							</form>
							<div style="border-top:1px dashed #eee; margin:20px 0px 30px 0px"></div>
							<table id="" class="table table-bordered" style="border:1px solid #eee!important;">
								<thead>
									<tr>
										<th class="sorting_disabled">Laporan</th>
									</tr>
								</thead>
								<tbody>					
									<?php
										$data = mysqli_query($koneksi,"select * from db_karyawan where jenis_absen='absen masuk' AND date(tanggal)='$tgl_sekarang' AND username='$username' order by tanggal desc");
										while($d = mysqli_fetch_array($data)){
									?>		
									<tr>		
										<td style="text-align:left; line-height:25px;">	
											<span style="text-transform:uppercase;font-weight:700;">
												<?php echo $d['jenis_absen'];?>	
											</span>
											<br>
											NIP : <?php echo $d['username'];?>
											-
											<?php echo $d['nama'];?> 
											<br>
											Lokasi : <?php echo $d['lokasi'];?> 
											<br>
											<i class="fa fa-calendar"></i> <?php echo tgl_Indonesia(date('D, d F Y',strtotime(($d['tanggal']), strtotime( date("D, d F Y") )))) ;?>
											&nbsp; 
											<i class="fa fa-clock-o" style="margin-right:2px;"></i> <?php echo date('H:i:s', strtotime($d['tanggal']));?>
										</td>						
									</tr>	
									<?php 
									}
									?>		
								</tbody>
							</table> 							
						</div>
					</div>
				</div>
				
				<!-- Absen Pulang -->
				<div class="col-md-12">
					<div class="box box-warning profil_data">
						<div class="box-header with-border" style="text-align:center;">
							<h3 class="box-title">
								<i class="fa fa-calendar"></i>
								Absen Pulang
							</h3>
						</div>
						<div class="box-body">
							<form class="form-horizontal" method="post" action="act?value=act_tambah_absen" enctype="multipart/form-data">
								<input type="hidden" name="jenis_absen" 	value="absen pulang">
								<input type="hidden" name="username" 		value="<?php echo $username;?>">
								<input type="hidden" name="nama" 			value="<?php echo $nama;?>">
								<input type="hidden" name="username_agen" 	value="<?php echo $username_agen;?>">
								<div class="box-body">
									<div class="form-group">
										<label class="col-sm-3 control-label">Lokasi Absen</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="lokasi" placeholder="Lokasi Anda Berada" required>
										</div>
										</div>
									<div class="col-md-12" style="margin-top:10px; text-align:center;">	
										<button type="submit" class="btn btn-warning ">
											Absen Pulang
										</button>
									</div>
								</div>
							</form>
							<div style="border-top:1px dashed #eee; margin:20px 0px 30px 0px"></div>
							<table id="" class="table table-bordered" style="border:1px solid #eee!important;">
								<thead>
									<tr>
										<th class="sorting_disabled">Laporan</th>
									</tr>
								</thead>
								<tbody>					
									<?php
										$data = mysqli_query($koneksi,"select * from db_karyawan where jenis_absen='absen pulang' AND date(tanggal)='$tgl_sekarang' AND username='$username' order by tanggal desc");
										while($d = mysqli_fetch_array($data)){
									?>		
									<tr>		
										<td style="text-align:left; line-height:25px;">	
											<span style="text-transform:uppercase;font-weight:700;">
												<?php echo $d['jenis_absen'];?>	
											</span>
											<br>
											NIP : <?php echo $d['username'];?>
											-
											<?php echo $d['nama'];?> 
											<br>
											Lokasi : <?php echo $d['lokasi'];?> 
											<br>
											<i class="fa fa-calendar"></i> <?php echo tgl_Indonesia(date('D, d F Y',strtotime(($d['tanggal']), strtotime( date("D, d F Y") )))) ;?>
											&nbsp; 
											<i class="fa fa-clock-o" style="margin-right:2px;"></i> <?php echo date('H:i:s', strtotime($d['tanggal']));?>
										</td>						
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
			
			<!-- Modals -->	
			
		</section>
	</div>	