	<!-- Modals Media Library -->
	<style>	
		@media (max-width: 1024px) {
			.mobile_img {
				display: block!important;
				margin:0px auto!important;
				margin-bottom:20px!important;
				border:none!important;
			}	
			input.form-control.mobile_width {
				display: block!important;
				width:100%!important;
				margin-bottom:20px!important;
			}
			.btn.copy_data {
				display: block!important;
				width:100%!important;
				margin-left:0px!important;
			}
		}
	</style>
	<div class="modal fade" id="modals_pilih_file" style="display:none;">
		<div class="modal-dialog tambah_akreditasi_sekolah">
			<div class="modal-content">
				<div class="modal-body">
					<a href="" class="close_button" data-dismiss="modal" aria-label="close" style="float:right;">
						<i class="fa fa-times"></i> Close
					</a>
					<a href="page?id=data_media" class="close_button" style="float:right;">
						<i class="fa fa-plus"></i> Tambah Media
					</a>
					<h4 style="text-align:center;">
						<i class="fa fa-file-image-o" style="margin-right:5px;"></i>
						Media
					</h4>
					<div class="box-body" style="padding-bottom:0px;">
					<div class="row">							
						<div class="col-md-12" style="padding:10px;">
							<?php
								include '../config.php';
								$data = mysqli_query($koneksi,"select * from data_media order by id DESC");
								while($d = mysqli_fetch_array($data)){
							?>
							<div style="border:1px solid #eee; border-radius:5px; margin:10px auto; padding:20px 20px 20px 20px; font-size:14px; font-weight:600;">
								<img class="mobile_img" src="../.core/.assets/.img/<?php echo $d['gambar'];?>" style="width:25%; margin-right:10px;">
								
								<!-- Nama Media -->
									<input id="foo<?php echo $d['id'];?>" type="text" value="<?php echo $d['gambar'];?>" class="form-control mobile_width" style="width:50%; display:inline-block;">
									<button class="btn copy_data" data-clipboard-action="copy" data-clipboard-target="#foo<?php echo $d['id'];?>" style="width:20%; display:inline-block; margin-left:10px; margin-top:-3px;">Copy Data</button>

									<script src=".core/clipboard.min.js"></script>
									<script>
										var clipboard = new ClipboardJS('.btn');

										clipboard.on('success', function(e) {
											console.log(e);
										});

										clipboard.on('error', function(e) {
											console.log(e);
										});
									</script>							
								<!-- End Nama Media -->
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
	
	<?php
		include '../config.php';
		$data = mysqli_query($koneksi,"select * from data_website");
		while($d = mysqli_fetch_array($data)){
	?>
	<footer class="main-footer">
		<center>
			<?php echo $d['tagline_footer'];?>
		</center>
	</footer>
	<?php 
	}
	?>
	</div>
    <!-- ./wrapper -->

    <script src="../.core/.assets/.dashboard/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../.core/.assets/.dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../.core/.assets/.dashboard/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../.core/.assets/.dashboard/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../.core/.assets/.dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="../.core/.assets/.dashboard/bower_components/fastclick/lib/fastclick.js"></script>
    <script src="../.core/.assets/.dashboard/dist/js/adminlte.min.js"></script>
    <script src="../.core/.assets/.dashboard/dist/js/demo.js"></script>
	<script>
		$(function () {		
			$('#usermanager_admin').DataTable()
			$('#usermanager_agen').DataTable()
			$('#usermanager_finance').DataTable()
			$('#usermanager_kurir').DataTable()
			$('#usermanager_staf_karyawan').DataTable()
			$('#usermanager_marketing').DataTable()
			$('#media').DataTable()
			$('#laporan_pemasukan_dbt').DataTable()
			$('#laporan_pemasukan_bts').DataTable()
			$('#laporan_pengeluaran').DataTable()
			$('#data_resi_admin').DataTable()
			$('#data_resi_agen').DataTable()
			$('#data_resi_kurir').DataTable()
			$('#laporan_resi').DataTable()
			$('#tracking_resi').DataTable()
			
			$('#example2').DataTable({
			'paging'      : true,
			'lengthChange': false,
			'searching'   : false,
			'ordering'    : true,
			'info'        : true,
			'autoWidth'   : false
			})
		})
	</script>
	
	<!-- CK Editor -->
	<script src="../.core/.assets/.dashboard/bower_components/ckeditor/ckeditor.js"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="../.core/.assets/.dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script>
	  $(function () {
		// Replace the <textarea id="editor1"> with a CKEditor
		// instance, using default configuration.
		CKEDITOR.replace('editor1')
		//bootstrap WYSIHTML5 - text editor
		$('.textarea').wysihtml5()
	  })
	</script>
	
</body>
</html>