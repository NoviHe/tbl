	<div id="printarea" class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="border:none;">
				<form class="no_print input_form_out" method="post" action="laporan-pemasukan-cetak-data" enctype="multipart/form-data" novalidate>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-2"></div>
						<div class="col-sm-12 col-md-12 col-lg-3">
							<div class="form_input" style="margin-top:15px;">
								<input type="date" class="form-control date" id="tanggal_awal" name="tanggal_awal" required style="z-index:100;">
								<label style="top:-20px;">Tanggal Awal<sup class="wajib">*</sup></label>
								<div class="invalid-feedback">
									Tanggal Awal <?php echo $feedback;?>
								</div>
							</div>	
						</div>
						<div class="col-sm-12 col-md-12 col-lg-3">
							<div class="form_input" style="margin-top:15px;">
								<input type="date" class="form-control date" id="tanggal_akhir" name="tanggal_akhir" required style="z-index:100;">
								<label style="top:-20px;">Tanggal Akhir<sup class="wajib">*</sup></label>
								<div class="invalid-feedback">
									Tanggal Akhir <?php echo $feedback;?>
								</div>
							</div>	
						</div>
						<div class="col-sm-12 col-md-12 col-lg-2">
							<button class="mt-1 btn btn-primary save_data" name="pencarian_data" style="margin:25px 0px 0px 0px!important;">
								<i class="fa fa-search" style="margin-right:5px;"></i>
								Cari Data
							</button>
						</div>
						<div class="col-sm-12 col-md-12 col-lg-2">
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
				<?php	
					if(isset($_POST['pencarian_data'])){
						$tanggal_awal  = $_POST['tanggal_awal'];
						$tanggal_akhir = $_POST['tanggal_akhir'];
					}else{
						$tanggal_awal  = date('Y-m-d');
						$tanggal_akhir = date('Y-m-d');
					}
				?>
				<span class="print_notif">
					<strong class="informasi">
						Informasi :
					</strong>
					Laporan Pemasukan Periode Tanggal :
					<?php if($tanggal_akhir!==date('Y-m-d') or $tanggal_awal!==date('Y-m-d')){ ?> 
						<strong>
							<?php echo date('d-m-Y', strtotime($tanggal_awal));?>
						</strong>
						s/d
						<strong>
							<?php echo date('d-m-Y', strtotime($tanggal_akhir));?>
						</strong>
					<?php 
					}else{
						echo "
						<strong>
							 ".tgl_Indonesia(date('D, d F Y'))."
						</strong>
						";
					}
					?>
				</span>
				<?php
					$no = 1;
					$query = mysqli_query($koneksi,"select * from laporan_pemasukan where tanggal >= '$tanggal_awal 00:00:00' and tanggal <= '$tanggal_akhir 23:59:59' AND username_agen='$username_agen'");
				?>					
				<div class="table-container desktop_overflow_none">
					<table id="cetak_data" class="table table-hover table-striped table-bordered">
						<thead>
							<tr>
								<th>No.</th>
								<th>Tanggal</th>
								<th>Kode<span class="no_print"> Pemasukan</span></th>
								<th>Agen</th>
								<th>Marketing / Akun</th>
								<th>Jumlah</th>
							</tr>
						</thead>
						<tbody>					
							<?php
								while($d=mysqli_fetch_array($query)){
							?>	
							<tr>		
								<td style="text-align:center; width:5px;">
									<?php echo $no++;?>
								</td>	
								<td style="text-align:center; width:150px;">
									<?php echo date('d-m-Y', strtotime($d['tanggal']));?>
									-
									<?php echo date('H:i:s', strtotime($d['tanggal']));?>
								</td>
								<td style="text-align:center; width:100px;">
									<?php echo $d['no_resi'];?>
								</td>
								<td style="text-align:center; width:100px;">
									<?php echo $d['username_agen'];?>
								</td>
								<td style="width:150px;">
									<?php echo $d['username'];?>
								</td>
								<td style="width:99px;">
									Rp. 
									<?php 
										echo number_format($d['jumlah'],0,',','.');
									?>
								</td>				
							</tr>	
							<?php 
							}
							?>	
							<tr>		
								<td colspan="5" class="total_cetak">
									Total Pemasukan Periode :&nbsp;
									<?php if($tanggal_akhir!==date('Y-m-d') or $tanggal_awal!==date('Y-m-d')){ ?> 
										<?php echo date('d-m-Y', strtotime($tanggal_awal));?>
										s/d
										<?php echo date('d-m-Y', strtotime($tanggal_akhir));?>
									<?php 
									}else{
										echo "
										<strong>
											 ".tgl_Indonesia(date('D, d F Y'))."
										</strong>
										";
									}
									?>
								</td>
								<td class="nominal_cetak">
									<?php
										$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pemasukan_cetak_data from laporan_pemasukan where tanggal >= '$tanggal_awal 00:00:00' and tanggal <= '$tanggal_akhir 23:59:59' AND username_agen='$username_agen'");
										$d = mysqli_fetch_assoc($data);
										$jumlah_pemasukan_cetak_data = $d['jumlah_pemasukan_cetak_data'];
									?>
									Rp. 
									<?php 
										echo number_format($jumlah_pemasukan_cetak_data,0,',','.');
									?>
								</td>				
							</tr>	
						</tbody>
						<tfoot style="display:none;">
						<tr>
							<th colspan="5">Total</th>
							<th style="padding:0px; margin:0px; text-align:left; padding-left:10px;">
								<?php
									$data = mysqli_query($koneksi,"select sum(jumlah) as jumlah_pemasukan_cetak_data from laporan_pemasukan where tanggal >= '$tanggal_awal 00:00:00' and tanggal <= '$tanggal_akhir 23:59:59' AND username_agen='$username_agen'");
									$d = mysqli_fetch_assoc($data);
									$jumlah_pemasukan_cetak_data = $d['jumlah_pemasukan_cetak_data'];
								?>
								Rp. 
								<?php 
									echo number_format($jumlah_pemasukan_cetak_data,0,',','.');
								?>
							</th>
						</tr>
						</tfoot>
					</table> 
					<?php
						if(mysqli_num_rows($query)==0){
							echo "<span class='cetak_data_tidak_ditemukan'>Data tidak ditemukan!</span>";
						}
					?> 
				</div>
			</div>
		</div>
	</div>