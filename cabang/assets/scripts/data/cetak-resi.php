	<?php
	$no_resi = $_GET['no_resi'];
	$data = mysqli_query($koneksi, "select * from laporan_resi where no_resi='$no_resi'");
	$d = mysqli_fetch_array($data)
	?>
	<div class="row">
		<div class="col-sm-12 col-md-12 col-xl-12">
			<div class="main-card mb-3 card" style="padding-bottom:0px;">
				<div class="card-header-tab card-header no_print">
					<div class="card-header-title font-weight-normal font_small_tabel">
						<a href="#" onclick="document.title='Print <?php echo $d['no_resi']; ?>';window.print();">
							<i class="header-icon pe-7s-print icon-gradient bg-ripe-malin small_print"></i>
						</a>
						Cetak Resi : &nbsp;
						<strong>
							<?php echo $d['no_resi']; ?>
						</strong>
					</div>
					<div class="btn-actions-pane-right">
						<a class="btn btn-sm btn-primary" href="cetak-resi?no_resi=<?php echo $d['no_resi']; ?>&copy=1">
							Print 1 Copy
						</a>
						<a class="btn btn-sm btn-primary" href="cetak-resi?no_resi=<?php echo $d['no_resi']; ?>&copy=3">
							Print 3 Copy
						</a>
					</div>
				</div>
				<div class="media_print" style="padding:20px 15px;">
					<?php
					(isset($_GET['copy'])) ? $copy = $_GET['copy'] : $copy = 3;
					?>
					<?php if ($copy == 1) : ?>
						<!-- Data 1 -->
						<div class="first_page_print">
							<?php include "assets/scripts/data/detail_cetak_resi_1.php"; ?>
						</div>
						<!-- <div class="garis_dashed"></div> -->
					<?php else : ?>
						<!-- Data 1 -->
						<div class="first_page_print">
							<?php include "assets/scripts/data/detail_cetak_resi.php"; ?>
						</div>
						<div class="garis_dashed"></div>
						<!-- Data 2 -->
						<?php include "assets/scripts/data/detail_cetak_resi.php"; ?>
						<div class="garis_dashed"></div>
						<!-- Data 3 -->
						<div class="last_page_print">
							<?php include "assets/scripts/data/detail_cetak_resi.php"; ?>
						</div>
					<?php endif ?>
				</div>

			</div>
		</div>
	</div>