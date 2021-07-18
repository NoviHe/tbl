	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header">
					<div class="card-header-title font-weight-normal font_small_tabel">
						<a href="">
							<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin small_print"></i>
						</a>
						TUJUAN & TARIF : &nbsp;
						<strong>
							DARI <?php echo $kota['kota'];?>
						</strong>
					</div>
					<div class="btn-actions-pane-right">
						<a href="" data-toggle="modal" data-target="#modals_tambah_data_resi" data-backdrop="static" data-keyboard="false" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex button_versi_satu">
							Tambah Data
						</a>
					</div>
				</div>	
				<div class="table-container desktop_overflow_none" style="padding:15px;">
					<table id="tabel_data_resi" class="table table-hover table-striped table-bordered">
						<thead>
						<tr>
							<th class="sorting_disabled"></th>
							<th>No.</th>
							<th style="text-align:left; padding-left:10px;">Tujuan Pengiriman</th>
							<th style="text-align:left; padding-left:10px;">Biaya /Kg</th>
						</tr>
						</thead>
						<tbody>			
						<?php
							$no = 1;
							$data = mysqli_query($koneksi,"select * from data_resi where dari = '". $kota['kota'] . "' order by id desc");
							while($d = mysqli_fetch_array($data)){
						?>	
						<tr>
							<td style="text-align:center; width:5px;">
								<a class="text-danger" href="" data-toggle="modal" data-target="#modals_hapus_data_resi_<?php echo $d['id'];?>" data-backdrop="static" data-keyboard="false">
									<i class="fa fa-trash"></i>
								</a>
							</td>
							<td style="text-align:center; width:5px;">
								<?php echo $no++;?>
							</td>
							<td style="text-align:left; width:160px; padding-left:10px;">
								<a class="text-danger" href="" data-toggle="modal" data-target="#modals_edit_data_resi_<?php echo $d['id'];?>" data-backdrop="static" data-keyboard="false" style="text-decoration:none; font-weight:500; text-transform:uppercase;">
									<?php echo $d['tujuan'];?>
								</a>
							</td>
							<td style="text-align:left;padding-left:10px;">
								Rp. 
								<?php 
									echo number_format($d['harga'],0,',','.');
								?>
							</td>
						</tr>
						<?php 
						}
						?>
						</tbody>
						<tfoot style="display:none;"></tfoot>
					</table>
				</div>
				
			</div>
		</div>
	</div>