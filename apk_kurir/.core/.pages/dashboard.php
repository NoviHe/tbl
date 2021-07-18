	<style>
		div.dataTables_wrapper div.dataTables_length {
			display: none !important;
		}

		.form-control input-sm {
			display: block !important;
			width: 100px !important;
		}

		div.dataTables_wrapper div.dataTables_paginate ul.pagination {
			display: none !important;
		}

		.dataTables_info {
			display: none;
		}
	</style>
	<div class="content-wrapper">
		<section class="content-header">
			<h1 style="font-size:20px;">
				Selamat Datang, <?php echo $nama; ?>
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
						&nbsp; <i class="fa fa-clock-o" style="margin-right:2px;"></i>
						<div id="clock" style="display:inline-block;"></div> WIB
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
								document.getElementById('clock').innerHTML = curr_hour + " : " + curr_minute + " : " + curr_second + " " + a_p;
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
					if (waktu < 0) {
						window.location = 'index';
					} else {
						document.getElementById("hitung_mundur").innerHTML = waktu;
					}
				}, 1000);
			</script>
		</section>
		<section class="content">
			<!-- Laporan Resi -->
			<div class="row">
				<div class="col-md-12">
					<div class="box box-warning profil_data">
						<div class="box-header with-border" style="text-align:center;">
							<h3 class="box-title">
								<i class="fa fa-leaf"></i>
								Buat Laporan Resi
							</h3>
						</div>
						<div class="box-body">
							<table id="laporan_resi" class="table table-bordered table-striped" style="border:1px solid #eee!important;">
								<thead>
									<tr>
										<th>No. Resi</th>
										<th class="sorting_disabled">Proses</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$no = 1;
									$data = mysqli_query($koneksi, "select * from laporan_resi order by tanggal desc");
									while ($d = mysqli_fetch_array($data)) {
									?>
										<tr>
											<td class="laporan_noresi">
												<i class="fa fa-codepen" style="margin-right:5px;"></i>
												<?php echo $d['no_resi']; ?>
											</td>
											<td style="width:100px;">
												<center>
													<a href="" class="edit" data-toggle="modal" data-target="#modals_buat_laporan_<?php echo $d['no_resi']; ?>" data-backdrop="static" data-keyboard="false" title="Buat Laporan" style="width:90px; text-transform:uppercase; margin-top:10px;">
														Buat Laporan
													</a>
												</center>
											</td>
										</tr>
									<?php
									}
									?>
								</tbody>
							</table>


							<div style="border-top:1px dashed #eee; margin:30px 0px"></div>
							<table id="" class="table table-bordered" style="border:1px solid #eee!important;">
								<thead>
									<tr>
										<th class="sorting_disablexd">Data Laporan</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = mysqli_query($koneksi, "select * from db_tracking_resi where username='$username' order by tanggal desc limit 5");
									while ($d = mysqli_fetch_array($data)) {
									?>
										<tr>
											<td style="text-align:left; line-height:25px;">
												<span style="font-weight:700;">
													<?php echo $d['no_resi']; ?>
													<br>
													Petugas : <?php echo $d['nama']; ?>
												</span>
												<br>
												<?php echo $d['status']; ?>
												<br>
												<?php echo $d['keterangan']; ?>
												<br>
												<i class="fa fa-calendar"></i> <?php echo tgl_Indonesia(date('D, d F Y', strtotime(($d['tanggal']), strtotime(date("D, d F Y"))))); ?>
												&nbsp;
												<i class="fa fa-clock-o" style="margin-right:2px;"></i> <?php echo date('H:i:s', strtotime($d['tanggal'])); ?>
												<br>
												<center>
													<a href="" class="edit detail" data-toggle="modal" data-target="#modals_edit_laporan_<?php echo $d['id']; ?>" data-backdrop="static" data-keyboard="false" title="Edit Laporan" style=" padding:0px 5px; width:70px; text-transform:uppercase; margin-top:10px;">
														Edit Data
													</a>
												</center>
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
			<?php include ".core/.pages/.modals/dashboard/buat_laporan.php"; ?>
			<?php include ".core/.pages/.modals/dashboard/edit_laporan.php"; ?>

		</section>
	</div>