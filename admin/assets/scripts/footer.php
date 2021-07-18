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
	<script>
		window.setTimeout(function() {
			$(".notifikasi_sukses").fadeTo(6000, 0).slideUp(6000, function(){
			$(this).remove(); 
			});
		}, 6000);
	</script>
	
	<!-- Loader -->
	<script src="../assets/js/loader.js"></script>
	<script>
		let loader = new LoaderJS();
		loader.loadJSON('todos1', 'https://jsonplaceholder.typicode.com/todos');
			loader.whileLoading = function() {
			}
		loader.whenReady = function() {
		  document.getElementById('loadingMsg').classList.add('hide')
		}
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
		$('#tabel_laporan_pemasukan').dataTable({
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
		$('#tabel_laporan_pengeluaran').dataTable({
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
	<script>
		$('#tabel_usermanager').dataTable({
			"scrollY"			: "180px",
			"scrollCollapse"	: true,
			"paging"			: false,
			"order"				: [[ 2, "asc" ]],
			
			"language": {
				"search": "Cari Data :",
				"info": "<span style='text-transform:uppercase; font-size:12px; letter-spacing:0.3px; margin-top:-10px; display:block; margin-bottom:5px;'>TOTAL : <strong>_TOTAL_</strong> data</span>",
				
			"infoFiltered"		: "<span style='text-transform:uppercase; font-size:12px; letter-spacing:0.3px; margin-top:-10px; display:block; margin-top:5px;'>Disaring Dari : <strong>_MAX_</strong> TOTAL DATA</span>"
			}
		});
	</script>
	
</body>
</html>
<?php include "assets/scripts/modals.php";?>