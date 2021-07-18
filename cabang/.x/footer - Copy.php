	<!-- Profing -->	
	<script>
		$(document).ready( function() {
			$("input[type='text'], textarea").attr('spellcheck',false);
		});
	</script>
	
	<!-- Time Out -->
	<script>
		window.setTimeout(function() {
			$(".notifikasi").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
			});
		}, 3000);
	</script>
	
	<!-- Loading -->
	<script defer="" type="module">
		import PageLoad from "../assets/js/pageload.min.js";
		PageLoad.start({ fakeMode: false,fadeIn: false,color: "#ad1e40",spinBarColor: "#ad1e40",enableProgress: true });
		document.querySelector(".goto").onclick = () => PageLoad.go(1000);
		document.querySelector(".end").onclick = () => PageLoad.done();
	</script>
	
	<!-- Bootsrap Validation -->
	<script src="../assets/js/validate.js"></script>
	<!-- Validation -->	
	<script>
		(function () {
		  'use strict'
		  var forms = document.querySelectorAll('.form_validation')

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
	
	<!-- Back to Top -->
	<script>
		mybutton = document.getElementById("to_top");
		window.onscroll = function() {scrollFunction()};

		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
	</script>
	
	<!-- Select Images File -->
	<script src="../assets/js/custom-file-input.js"></script>
	
	<!-- Select Custom -->
	<script>
		var x, i, j, l, ll, selElmnt, a, b, c;
		x = document.getElementsByClassName("custom-selects");
		l = x.length;
		for (i = 0; i < l; i++) {
		selElmnt = x[i].getElementsByTagName("select")[0];
		ll = selElmnt.length;
		a = document.createElement("DIV");
		a.setAttribute("class", "select-selected");
		a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
		x[i].appendChild(a);
		b = document.createElement("DIV");
		b.setAttribute("class", "select-items select-hide");
		for (j = 1; j < ll; j++) {
		c = document.createElement("DIV");
		c.innerHTML = selElmnt.options[j].innerHTML;
		c.addEventListener("click", function(e) {
		var y, i, k, s, h, sl, yl;
		s = this.parentNode.parentNode.getElementsByTagName("select")[0];
		sl = s.length;
		h = this.parentNode.previousSibling;
		for (i = 0; i < sl; i++) {
		if (s.options[i].innerHTML == this.innerHTML) {
		s.selectedIndex = i;
		h.innerHTML = this.innerHTML;
		y = this.parentNode.getElementsByClassName("same-as-selected");
		yl = y.length;
		for (k = 0; k < yl; k++) {
		y[k].removeAttribute("class");
		}
		this.setAttribute("class", "same-as-selected");
		break;
		}
		}
		h.click();
		});
		b.appendChild(c);
		}
		x[i].appendChild(b);
		a.addEventListener("click", function(e) {
		e.stopPropagation();
		closeAllSelect(this);
		this.nextSibling.classList.toggle("select-hide");
		this.classList.toggle("select-arrow-active");
		});
		}
		function closeAllSelect(elmnt) {
		var x, y, i, xl, yl, arrNo = [];
		x = document.getElementsByClassName("select-items");
		y = document.getElementsByClassName("select-selected");
		xl = x.length;
		yl = y.length;
		for (i = 0; i < yl; i++) {
		if (elmnt == y[i]) {
		arrNo.push(i)
		} else {
		y[i].classList.remove("select-arrow-active");
		}
		}
		for (i = 0; i < xl; i++) {
		if (arrNo.indexOf(i)) {
		x[i].classList.add("select-hide");
		}
		}
		}
		document.addEventListener("click", closeAllSelect);
	</script>
	
	<!-- Others -->
	<div class="app-drawer-overlay d-none animated fadeIn"></div>
	<script type="text/javascript" src="../assets/scripts/main.js"></script>  
	
	<!-- Data Tables -->
    <script type="text/javascript" src="../assets/datatables/datatables.min.js"></script>
	<script>
		$('#tabel_satu').dataTable({
			"order"				: [[ 2, "desc" ]],
			<?php include "../assets/datatables/setting.php";?>
		});
	</script>
	<script>
		$('#tabel_data_resi').dataTable({
			"scrollY"			: "180px",
			"scrollCollapse"	: true,
			"paging"			: false,
			"order"				: [[ 1, "asc" ]],
			
			"language": {
				"search": "<span style='font-size:12px; letter-spacing:0.2px'>CARI DATA :</span>",
				"info": "<span style='text-transform:uppercase; font-size:12px; letter-spacing:0.3px; margin-top:-10px; display:block; margin-bottom:5px;'>Jumlah Data : <strong>_TOTAL_</strong> data</span>",
				
			"infoFiltered"		: "<span style='text-transform:uppercase; font-size:12px; letter-spacing:0.3px; margin-top:-10px; display:block; margin-top:5px;'>Disaring Dari <strong>_MAX_</strong> Jumlah Data</span>"
			}
		});
	</script>
	<script>
		$('#tabel_laporan_pemasukanx').dataTable({
			"scrollY"			: "180px",
			"scrollCollapse"	: true,
			"paging"			: false,
			"order"				: [[ 1, "asc" ]],
			
			"language": {
				"search": "Cari Data :",
				"info": "<span style='text-transform:uppercase; font-size:12px; letter-spacing:0.3px; margin-top:-10px; display:block; margin-bottom:5px;'>Jumlah laporan pemasukan <?php echo tgl_Indonesia(date('F Y'));?> : <strong>_TOTAL_</strong> data</span>",
				
			"infoFiltered"		: "<span style='text-transform:uppercase; font-size:12px; letter-spacing:0.3px; margin-top:-10px; display:block; margin-top:5px;'>Disaring Dari <strong>_MAX_</strong> Jumlah Laporan Pemasukan <?php echo tgl_Indonesia(date('F Y'));?></span>"
			}
		});
	</script>
	<script>
		$('#tabel_laporan_pengeluaranx').dataTable({
			"scrollY"			: "180px",
			"scrollCollapse"	: true,
			"paging"			: false,
			"order"				: [[ 1, "asc" ]],
			
			"language": {
				"search": "Cari Data :",
				"info": "<span style='text-transform:uppercase; font-size:12px; letter-spacing:0.3px; margin-top:-10px; display:block; margin-bottom:5px;'>Jumlah laporan Pengeluaran <?php echo tgl_Indonesia(date('F Y'));?> : <strong>_TOTAL_</strong> data</span>",
				
			"infoFiltered"		: "<span style='text-transform:uppercase; font-size:12px; letter-spacing:0.3px; margin-top:-10px; display:block; margin-top:5px;'>Disaring Dari <strong>_MAX_</strong> Jumlah Laporan Pengeluaran <?php echo tgl_Indonesia(date('F Y'));?></span>"
			}
		});
	</script>
</body>
</html>
	
	<!-- Modals Tambah Data Resi -->	
	<div id="modals_tambah_data_resi" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Tambah Tujuan &amp; Tarif Pengiriman</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form_grup_with_judul" style="margin-bottom:0px;">
						<div class="judul">
							Data Resi
						</div>
						<form class="form_validation" method="post" action=".act?value=tambah_data_resix" enctype="multipart/form-data" novalidate>
							<input type="hidden" name="dari" value="<?php echo $kota['kota'];?>">
						<div class="row">	
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="position-relative form-group">
									<label class="data">
										Asal Pengiriman
									</label>
									<input type="text" class="form-control input disabled" name="dari" value="<?php echo $kota['kota'];?> - <?php echo $username;?>" disabled style="padding-top:7px;">
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="position-relative form-group">
									<label class="data">
										Tujuan Pengiriman <sup class="wajib">*</sup>
									</label>
									<input type="text" class="form-control input validasi_modals" name="tujuan" value="" required style="padding-top:7px;">
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="position-relative form-group">
									<label class="data">
										Biaya /Kg <sup class="wajib">*</sup>
									</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="btn btn-secondary form_grup_data">
												Rp.
											</span>
										</div>
										<input type="number" class="form-control input validasi_modals text-right" name="harga" placeholder="0" required style="padding-right:10px; padding-top:7px;">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 text-right">
							<button class="mt-1 btn btn-primary save_data" style="margin:15px 0px 0px 0px!important;">
								Tambah
							</button>
							<button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:15px 0px 0px 10px!important;">
								Batal
							</button>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>
	<!-- Validation -->	
	<script>
		(function () {
		  'use strict'
		  var forms = document.querySelectorAll('.form_validation')

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
	<style>
		.was-validated .form-control:valid, .form-control.is-valid,
		.was-validated .form-control:invalid, .form-control.is-invalid {
		  background-image: none;
		  padding:0px;
		  padding-left:.75rem;
		  border-color:#ced4da;
		}
		.was-validated .form-control:valid, .form-control.is-valid {
		  background:#fff;
		}
		.was-validated .form-control:invalid, .form-control.is-invalid {
		  background:#fcf678;
		}
		.was-validated .form-control.input.nomor:valid, .form-control.input.nomor.is-valid,
		.was-validated .form-control.input.nomor:invalid, .form-control.input.nomor.is-invalid {
		  padding-left:0rem;
		}
		.was-validated .form-control.input.validasi_modals:valid, .form-control.input.validasi_modals.is-valid,
		.was-validated .form-control.input.validasi_modals:invalid, .form-control.input.validasi_modals.is-invalid {
		  padding-top:0px!important;
		}
		.modal-title {
			font-size: 12px;
		}
		.close {
			font-size: 18px;
		}
	</style>
	
	<!-- Modals Edit Data Resi -->	
	<?php
		$data = mysqli_query($koneksi,"select * from data_resi");
		while($d = mysqli_fetch_array($data)){
	?>	
	<div id="modals_edit_data_resi_<?php echo $d['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Edit Tujuan &amp; Tarif Pengiriman</h5>
					<a href="tujuan-tarif" class="close">
						<span aria-hidden="true">&times;</span>
					</a>
				</div>
				<div class="modal-body">
					<div class="form_grup_with_judul" style="margin-bottom:0px;">
						<div class="judul">
							Data Resi
						</div>
						<form class="form_validation" method="post" action=".act?value=edit_data_resi" enctype="multipart/form-data" novalidate>
							<input type="hidden" name="id" value="<?php echo $d['id'];?>">
						<div class="row">	
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="position-relative form-group">
									<label class="data">
										Asal Pengiriman
									</label>
									<input type="text" class="form-control input disabled" name="dari" value="<?php echo $kota['kota'];?> - <?php echo $username;?>" disabled style="padding-top:7px;">
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="position-relative form-group">
									<label class="data">
										Tujuan Pengiriman <sup class="wajib">*</sup>
									</label>
									<input type="text" class="form-control input validasi_modals" name="tujuan" value="<?php echo $d['tujuan'];?>" required style="padding-top:7px;">
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="position-relative form-group">
									<label class="data">
										Biaya /Kg <sup class="wajib">*</sup>
									</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="btn btn-secondary form_grup_data">
												Rp.
											</span>
										</div>
										<input type="number" class="form-control input validasi_modals text-right" name="harga" value="<?php echo $d['harga'];?>" required style="padding-right:10px; padding-top:7px;">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 text-right">
							<button class="mt-1 btn btn-primary save_data" style="margin:15px 0px 0px 0px!important;">
								Edit
							</button>
							<a href="tujuan-tarif" class="mt-1 btn btn-primary save_data" style="margin:15px 0px 0px 10px!important;">
								Batal
							</a>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>
	<?php 
	}
	?>
	
	<!-- Modals Edit Data Resi -->	
	<?php
		$data = mysqli_query($koneksi,"select * from data_resi");
		while($d = mysqli_fetch_array($data)){
	?>	
	<div id="modals_hapus_data_resi_<?php echo $d['id'];?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Hapus Tujuan &amp; Tarif Pengiriman</h5>
					<a href="tujuan-tarif" class="close">
						<span aria-hidden="true">&times;</span>
					</a>
				</div>
				<div class="modal-body">
					<div class="form_grup_with_judul" style="margin-bottom:0px;">
						<div class="judul">
							Data Resi
						</div>
						<form class="form_validation" method="post" action=".act?value=edit_hapus_resi" enctype="multipart/form-data" novalidate>
							<input type="hidden" name="id" value="<?php echo $d['id'];?>">
						<div class="row">	
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="position-relative form-group">
									<label class="data">
										Asal Pengiriman
									</label>
									<input type="text" class="form-control input disabled" name="dari" value="<?php echo $kota['kota'];?> - <?php echo $username;?>" disabled style="padding-top:7px;">
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="position-relative form-group">
									<label class="data">
										Tujuan Pengiriman
									</label>
									<input type="text" class="form-control input disabled" name="tujuan" value="<?php echo $d['tujuan'];?>" disabled style="padding-top:7px;">
								</div>
							</div>
							<div class="col-sm-12 col-md-12 col-lg-4">
								<div class="position-relative form-group">
									<label class="data">
										Biaya /Kg
									</label>
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="btn btn-secondary form_grup_data" style="background-color:#e9ecef!important;">
												Rp.
											</span>
										</div>
										<input type="number" class="form-control input disabled text-right" name="harga" value="<?php echo $d['harga'];?>" disabled style="padding-right:10px; padding-top:7px;">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 col-md-12 col-lg-12 text-right">
							<button class="mt-1 btn btn-primary save_data" style="margin:15px 0px 0px 0px!important;">
								Hapus
							</button>
							<a href="tujuan-tarif" class="mt-1 btn btn-primary save_data" style="margin:15px 0px 0px 10px!important;">
								Batal
							</a>
						</div>
					</div>
				</div>
					
			</div>
		</div>
	</div>
	<?php 
	}
	?>