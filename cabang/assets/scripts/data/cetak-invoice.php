	<?php
	$no_resi = $_GET['no_resi'];
	$data = mysqli_query($koneksi, "select * from laporan_invoice where id='$no_resi'");
	$d = mysqli_fetch_array($data)
	?>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header no_print">
					<div class="card-header-title font-weight-normal font_small_tabel">
						<a href="#" onclick="document.title='Print Invoice <?php echo $d['id']; ?>';window.print();">
							<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin small_print"></i>
						</a>
						Cetak Invoice : &nbsp;
						<strong>
							<?php echo $d['id']; ?>
						</strong>
					</div>
					<div class="btn-actions-pane-right" style="display:none;">
						<a href="" data-toggle="modal" data-target="#modals_tambah_data_resi" data-backdrop="static" data-keyboard="false" class="btn-icon btn-wide btn-outline-2x btn btn-outline-focus btn-sm d-flex button_versi_satu">
							Tambah Data
						</a>
					</div>
				</div>
				<div class="media_print" style="padding:20px 15px;">
					<!-- Data 1 -->
					<div class="first_page_print">
						<?php include "assets/scripts/data/detail_cetak_invoice.php"; ?>
					</div>
				</div>

			</div>
		</div>
	</div>