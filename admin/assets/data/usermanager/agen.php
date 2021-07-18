	<style>
		.agen-actives {
			display: block;
			width: 100%;
			padding: .4rem 1.1rem;
			clear: both;
			font-weight: 400;
			color: #fff!important;
			text-align: inherit;
			white-space: nowrap;
			background-color: #da624a!important;
			border: 0;
			text-decoration: none;
			text-transform:uppercase!important;
		}
	</style>
	
	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12" style="margin-bottom:100px;">
			<div class="mb-3 card">
				<div class="tabs-lg-alternate card-header">
					<ul class="nav nav-justified">
						<li class="nav-item">
							<a href="usermanager?p=admin" class="nav-link">
								<div class="widget-number small_info">
									<i class="pe-7s-box2 settings"></i> 
									<span>Admin</span>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="usermanager?p=agen" class="nav-link active">
								<div class="widget-number small_info">
									<i class="pe-7s-box2 settings"></i> 
									<span>Agen</span>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="usermanager?p=finance" class="nav-link">
								<div class="widget-number small_info">
									<i class="pe-7s-box2 settings"></i> 
									<span>Finance</span>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="usermanager?p=kurir" class="nav-link">
								<div class="widget-number small_info">
									<i class="pe-7s-box2 settings"></i> 
									<span>Kurir</span>
								</div>
							</a>
						</li>
						<li class="nav-item">
							<a href="usermanager?p=karyawan" class="nav-link">
								<div class="widget-number small_info">
									<i class="pe-7s-box2 settings"></i> 
									<span>Karyawan</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="tab-content">
					<div class="tab-pane active" role="tabpanel">
						<div class="card-body" style="padding-top:29px; padding-bottom:0px;">
							<!-- Mulai -->
							<?php $agen = "agen";?>
							<div class="row">
								<div class="col-sm-12 col-md-12 col-xl-12">
									<div class="main-card mb-3 card" style="padding-bottom:0px;">
										<div class="form_grup_with_judul" style="background:#fff!important; margin-bottom:-20px;">
											<div class="judul" style="margin-left:-16px; margin-right:-16px;">
												<?php echo $agen;?>
												<a href="" data-toggle="modal" data-target="#modals_tambah_<?php echo $agen;?>" data-backdrop="static" data-keyboard="false" class="tambah_media">
													+
												</a>
											</div>
										</div>
										<!-- Table -->
										<div class="container_table">
											<table id="tabel_usermanager" class="table table-hover table-striped table-bordered">
												<thead>
													<tr>
														<th class="sorting_disabled"></th>
														<th>Userame</th>
														<th>Kota</th>
														<th>Registrasi</th>
													</tr>
												</thead>
												<tbody>
													<?php
														$data = mysqli_query($koneksi,"select * from db_usermanager where tipe_akun='$agen'");
														while($d = mysqli_fetch_array($data)){
													?>
													<tr>
														<td>
															<a href="" class="text-danger" data-toggle="modal" data-target="#modals_hapus_data_<?php echo $d['id'];?>" data-backdrop="static" data-keyboard="false">
																<i class="fa fa-trash"></i>
															</a>
														</td>
														<td>
															<a href="" class="text-danger edit_data_tabel" data-toggle="modal" data-target="#modals_edit_data_<?php echo $d['id'];?>" data-backdrop="static" data-keyboard="false" style="text-transform:none; font-size:13px;">
																<?php echo $d['username'];?>
															</a>
														</td>
														<td style="text-transform:capitalize;">
															<?php echo $d['kota'];?>
														</td>
														<td>
															<?php echo date('d-m-Y', strtotime($d['terdaftar_sejak']));?>
															<?php echo date('H:i:s', strtotime($d['terdaftar_sejak']));?>
														</td>
													</tr>
													<?php 
													}
													?>
												</tbody>
												<tfoot style="display:none;">
													<tr>
														<th></th>
														<th></th>
														<th></th>
														<th></th>
													</tr>
												</tfoot>
											</table>
										</div>
										<!-- End -->
									</div>
								</div>
							</div>
							<!-- Selesai -->
							
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>