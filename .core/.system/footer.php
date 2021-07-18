	<footer class="footer" style="margin-top:2rem;">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-4">
					<div class="row m-0 p-0">
						<div class="col-10 p-0 col-md-8 mx-auto ml-md-0 mr-md-auto">
									
							<?php
								include 'config.php';
								$data = mysqli_query($koneksi,"select * from data_website");
								while($d = mysqli_fetch_array($data)){
							?>
							<div class="footer-logo d-none d-md-block px-3 py-5 bgmain-yellow">
								<img src=".core/.assets/.img/<?php echo $d['logo_footer'];?>" alt="logo" class="w-100">
							</div>
							<?php 
							}
							?>
							
							<?php
								include 'config.php';
								$data = mysqli_query($koneksi,"select * from data_kontak where id='1'");
								while($d = mysqli_fetch_array($data)){
							?>
							<div class="pt-24 font-size12  line-height14 font-light text-md-left">
								<h4 class="font-size12 font-bold footer_judul_mobile pt_mobile_10"><?php echo $d['alamat'];?></h4>
								<div data-toggle="modal" data-target="#mapopen<?php echo $d['id'];?>" style="cursor:pointer; line-height:25px;" class="footer_alamat_mobile">
									<?php echo $d['detail_alamat'];?>
									<i class="fa fa-map" style="margin-left:5px; color:#9b111e;"></i>
								</div>
							</div>
							<?php 
							}
							?>
							
						</div>
					</div>
				</div>
				<div class="col-12 col-md-8">	
					<div class="row">
						<div class="col-10 col-md-4 mx-auto text-md-left font-size12 font-light ">
							<h4 class="font-size12 font-bold footer_judul_mobile desktop_judul_pdt_44">Perusahaan</h4>
							<ul class="ul-menu-footer">			
								<?php
									include 'config.php';
									$data = mysqli_query($koneksi,"select * from data_menu_utama");
									while($d = mysqli_fetch_array($data)){
								?>
								<li class="li-menu-footer">
									<a href="page?url=<?php echo $d['url'];?>" class="active_link_footer<?php echo $d['url'];?>">
										<?php echo $d['menu'];?>
									</a>
								</li>
								<?php 
								}
								?>
							</ul>
						</div>
						<div class="col-10 col-md-4 mx-auto text-md-left font-size12 font-light ">
							<h4 class="font-size12 font-bold footer_judul_mobile desktop_judul_pdt_44">Layanan &amp; Service</h4>
							<ul class="ul-menu-footer">									
								<?php
									include 'config.php';
									$data = mysqli_query($koneksi,"select * from data_menu_tambahan limit 0, 5");
									while($d = mysqli_fetch_array($data)){
								?>
								<li class="li-menu-footer">
									<a href="page?url=<?php echo $d['url'];?>" class="active_link_footer<?php echo $d['url'];?>">
										<?php echo $d['menu'];?>
									</a>
								</li>
								<?php 
								}
								?>
							</ul>
						</div>
						<div class="col-10 col-md-4 mx-auto text-md-left font-size12 font-light ">
							<h4 class="font-size12 font-bold footer_judul_mobile desktop_judul_pdt_44">Produk</h4>
							<ul class="ul-menu-footer">
								<?php
									include 'config.php';
									$data = mysqli_query($koneksi,"select * from data_menu_tambahan limit 5, 2");
									while($d = mysqli_fetch_array($data)){
								?>
								<li class="li-menu-footer">
									<a href="page?url=<?php echo $d['url'];?>" class="active_link_footer<?php echo $d['url'];?>">
										<?php echo $d['menu'];?>
									</a>
								</li>				
								<?php 
								}
								?>
							</ul>
							<h4 class="font-size12 font-bold footer_judul_mobile pt_mobile_20 desktop_judul_pdt_15">Infomasi</h4>
							<ul class="ul-menu-footer">	
								<?php
									include 'config.php';
									$data = mysqli_query($koneksi,"select * from data_menu_tambahan limit 7, 3");
									while($d = mysqli_fetch_array($data)){
								?>
								<li class="li-menu-footer">
									<a href="page?url=<?php echo $d['url'];?>" class="active_link_footer<?php echo $d['url'];?>">
										<?php echo $d['menu'];?>
									</a>
								</li>
								<?php 
								}
								?>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-12 pt-4 text-center text-md-left">
							<h4 class="font-size12 font-bold pb-24 footer_judul_mobile">Tetap berhubungan dengan kami</h4>
							<div class="row">
								<div class="col-6 col-md-12 mx-auto ml-md-0 col-md-4 ">	
									<div class="row">								
									<?php
										include 'config.php';
										$data = mysqli_query($koneksi,"select * from data_medsos");
										while($d = mysqli_fetch_array($data)){
									?>
										<div class="col-4">
											<a href="<?php echo $d['link'];?>" target="new" class="d-md-flex">
												<span class="social_media">
													<img src=".core/.assets/.img/<?php echo $d['logo'];?>">
												</span>
												<div class="d-none d-md-inline my-auto pl-3 font-size12 font-bold textmain-lightgrey"><?php echo $d['nama'];?></div>
											</a>
										</div>
									<?php 
									}
									?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
			include 'config.php';
			$data = mysqli_query($koneksi,"select * from data_website");
			while($d = mysqli_fetch_array($data)){
		?>
		<div class="container-fluid m-0 p-0 mt-5">
			<div class="row m-0 p-0">
				<div class="col-12 bgmain-yellow h-6">
					&nbsp;
				</div>
				<div class="col-12 bgmain-blue py-22">
					<div class="container">
						<div class="row">
							<div class="col-12">
								<h5 class="font-size12 font-normal  textmain-white m-0 footer-copyright" style="padding-top:10px;">
									<?php echo $d['tagline_footer'];?>
    								<span style="float:right;">
    								    <a href="https://www.solusidigitalid.com/" target="new" style="font-size:2px; color:#9b111e; cursor:context-menu;">
    								        SOLUSIDIGITALID.COM - SOLUSI DIGITAL UNTUK BISNIS ANDA
    								    </a>
    								</span>
								</h5>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
		}
		?>
	</footer>

	<?php
		include 'config.php';
		$data = mysqli_query($koneksi,"select * from data_kontak");
		while($d = mysqli_fetch_array($data)){
	?>
	<!-- The Modal -->
	<div class="modal" id="mapopen<?php echo $d['id'];?>" style="z-index:999999999999!important; margin-top:50px;">
		<div class="modal-dialog modal-dialog-centered modal-lg">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
				  <h4 class="modal-title"><?php echo $d['alamat'];?></h4>
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<iframe src="<?php echo $d['detail_maps'];?>" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>

				<!-- Modal footer -->
				<div class="modal-footer">
				  <button type="button" class="btn bgmain-blue textmain-white px-70 mx-auto" data-dismiss="modal" style="text-transform:uppercase; font-weight:600; font-size:12px;">Close</button>
				</div>

			</div>
		</div>
	</div>
	<?php 
	}
	?>
  
	<script src=".core/.assets/.js/jquery.3-3-1.min.js">	</script>
	<script src=".core/.assets/.js/popper.min.js">			</script>
	<script src=".core/.assets/.js/bootstrap.min.js">		</script>
	<script src=".core/.assets/.js/leaflet.js">				</script>
    <script src=".core/.assets/.js/slick.js">				</script>
	<script src=".core/.assets/.js/plyr.js">				</script>
	<script src=".core/.assets/.js/select2.js">				</script>
	<script src=".core/.assets/.js/select1122.js">			</script>
	<script src=".core/.assets/.js/html2canvas.js">			</script>
	<script src=".core/.assets/.js/canvas2image.js">		</script>
	
	<!-- End Footer Section -->
	<script>
		var base_url = 'index.php';
		var fb_app_id = '';
		var csfr_token_name = 'varient_csrf_token';
		var csfr_cookie_name = 'varient_csrf_cookie';
	</script>

	<script src=".core/.assets/.js/plugins.js">				</script>
	<script src=".core/.assets/.js/magnific-popup.js">		</script>
	<script src=".core/.assets/.js/main.js">				</script>
	<script src=".core/.assets/.js/map.js">					</script>
	
	<script src=".core/.assets/.js/lightbox.min.js">		</script>
	<script src=".core/.assets/.js/sweetalert.min.js">		</script>
	<script src=".core/.assets/.js/zamma.js">				</script>
	<script src=".core/.assets/.js/select-kb-agen2ace.js">	</script>
	<script src=".core/.assets/.js/select-kb-perusahaan2ace.js"></script>
	<script src=".core/.assets/.js/selectkota.js">			</script>
</body>
</html>