$(".header-slider").slick({
	autoplay: true,
	autoplaySpeed: 8000,
	speed: 600,
	slidesToShow: 1,
	slidesToScroll: 1,
	pauseOnHover: false,
	dots: true,
	pauseOnDotsHover: true,
	cssEase: 'linear',
	draggable: false,
	prevArrow: '<button class="PrevArrow"></button>',
	nextArrow: '<button class="NextArrow"></button>',
});
$(".artikel-slider").slick({
	autoplay: true,
	autoplaySpeed: 8000,
	speed: 600,
	slidesToShow: 1,
	slidesToScroll: 1,
	pauseOnHover: false,
	dots: true,
	pauseOnDotsHover: true,
	cssEase: 'linear',
	draggable: false,
	arrows: false
});
$(".tentangkami-slider").slick({
	autoplay: true,
	autoplaySpeed: 8000,
	speed: 600,
	slidesToShow: 1,
	slidesToScroll: 1,
	pauseOnHover: false,
	dots: true,
	pauseOnDotsHover: true,
	cssEase: 'linear',
	draggable: false,
	arrows: false
});


$(document).ready(function () {

	/* brosur popup */
	$('.brosur-popup').magnificPopup({
	  type: 'image'
	}); 

	$(document).click(function (event) {
         var clickover = $(event.target);
         var _opened = $(".navbar-collapse").hasClass("show");
         if (_opened === true && !clickover.hasClass("navbar-toggler")) {
             $(".navbar-toggler").click();
         }
     });

	var hash = window.location.hash;
	//hash && $('ul.nav a[href="' + hash + '"]').tab('show');


	setTimeout(function () {
		$('.select2').addClass("w-100");
	}, 0);


	/* submit bulan blog */
	$('.selectbulan').change(function () {
		var optionVal = $(".selectbulan option:selected").val();
		url = base_url + "arsip/" + optionVal;
		window.location.href = url;
		//console.log(optionVal);
	});
	$('.selectkategori').change(function () {
		var optionVal = $(".selectkategori option:selected").val();
		url = base_url + "category/" + optionVal;
		window.location.href = url;
		//console.log(optionVal);
	});

	var idtab = 1;
	var idtab2 = 1;
	var widthH = $(window).height();
	$(window).on('load resize', function () {


		var widthW = $(window).width();
		var newwidthH = $(window).height();
		if (widthW >= 768) {
			$('.tabrow').addClass('row');
			$('#lacaktab').removeClass('container py-3 tab-pane active fade');
			$('#cektariftab').removeClass('container py-3 tab-pane active fade');
			$('#lacaktab').addClass('col-md-6');
			$('#cektariftab').addClass('col-md-6');
			idtab = 1;
		} else {
			if (idtab == 1) {
				$('.tabrow').removeClass('row');
				$('#lacaktab').addClass('container py-3 tab-pane active');
				$('#cektariftab').addClass('container py-3 tab-pane fade');
				$('#lacaktab').removeClass('col-md-6');
				$('#cektariftab').removeClass('col-md-6');
				idtab = 0;
			}
			if (hash=='#cektarif') {
				hash && $('ul.nav a[href="#cektariftab"]').tab('show');
				$('ul.nav a[href="#lacaktab"]').tab('hide');
				//console.log('ul.nav a[href="' + hash + 'tab"]');
			}
		}
		var marsecH = $(".col-peluang").height();
		if (marsecH <= 100) {
			$(".peluang-img").css("height", "auto");
			$(".peluang-img").css("width", "130%");
			idtab2 = 1;
		} else {
			if (idtab2 == 1) {
				$(".peluang-img").height(marsecH);
				$(".peluang-img").css("width", "auto");
				idtab2 = 0;
			}
		}

		$('.chosen-container-single').addClass('form-control font-size14 font-light');
		$('.chosen-single').addClass('form-control font-size14 font-light');

	});

	// menu accordion faq sk //
	$('.faqnavm').on("click", function () {
		// open all accordion
		//console.log("masuk");
		$('#accordion-tab-nav .collapse').collapse('hide');

	});







	function saveAs(uri, filename) {

		var link = document.createElement('a');

		if (typeof link.download === 'string') {

			link.href = uri;
			link.download = filename;

			//Firefox requires the link to be in the body
			document.body.appendChild(link);

			//simulate click
			link.click();

			//remove the link when done
			document.body.removeChild(link);

		} else {

			window.open(uri);

		}
	}

	function displayMsgError(id, msg) {
		$('#msg-' + id).show();
		$('#' + id).addClass("border-error");
		if (msg != "") {
			$('#msg-' + id).html(msg);
		}
	}

	function removeMsgError(id) {
		$('#msg-' + id).hide();
		$('#' + id).removeClass("border-error");
	}

	/* FORM Peluang */
	$('#tipe').on('change', function () {
		var kontakplaceholder;
		if ($('#tipe').val() == "Whatsapp") {
			kontakplaceholder = "Masukkan nomer whatsapp";
		}
		if ($('#tipe').val() == "Telegram") {
			kontakplaceholder = "Masukkan nomer telegram";
		}

		if ($('#tipe').val() == "Telpon") {
			kontakplaceholder = "Masukkan nomer telpon/HP";
		}
		if ($('#tipe').val() == "Email") {
			kontakplaceholder = "Masukkan nama email";
		}
		$('#kontak').attr("placeholder", kontakplaceholder);
	});

	var a;
	$("#agenwahanasubmit").click(function (e) {
		e.preventDefault();

		var b = $("#formagenwahana");
		var c = b.find("input, select, button, textarea");

		var vnama = "nama";
		var vlokasi = "provinsi";
		var vkabupaten = "kabupaten";
		var vkecamatan = "kecamatan";
		var vkelurahan = "kelurahan";
		var valamat = "alamat";
		var vtipe = "tipe";
		var vkontak = "kontak";
		var vpesan = "pesan";

		$('#' + vnama).focus(function () {
			removeMsgError(vnama);
		});
		$('#' + vlokasi).focus(function () {
			removeMsgError(vlokasi);
		});
		$('#' + vkabupaten).focus(function () {
			removeMsgError(vkabupaten);
		});
		$('#' + vkecamatan).focus(function () {
			removeMsgError(vkecamatan);
		});
		$('#' + vkelurahan).focus(function () {
			removeMsgError(vkelurahan);
		});
		$('#' + valamat).focus(function () {
			removeMsgError(valamat);
		});
		$('#' + vtipe).focus(function () {
			removeMsgError(vtipe);
		});
		$('#' + vkontak).focus(function () {
			removeMsgError(vkontak);
		});
		$('#' + vpesan).focus(function () {
			removeMsgError(vpesan);
		});


		var $mess = "";
		var $ok = 1;
		var pp = 'kerjasama korporasi';
		if ($("#nama").val() == "") {
			$ok = 0;
			displayMsgError(vnama);
		}
		if ($("#provinsi").val() == "0") {
			$ok = 0;
			displayMsgError(vlokasi);
		}
		if ($("#kabupaten").val() == "0") {
			$ok = 0;
			displayMsgError(vkabupaten);
		}
		if ($("#kecamatan").val() == "0") {
			$ok = 0;
			displayMsgError(vkecamatan);
		}
		if ($("#kelurahan").val() == "0") {
			$ok = 0;
			displayMsgError(vkelurahan);
		}
		if ($("#alamat").val() == "") {
			$ok = 0;
			displayMsgError(valamat);
		}
		if ($("#tipe").val() == "") {
			$ok = 0;
			displayMsgError(vtipe);
		}
		if ($("#kontak").val() == "") {
			$ok = 0;
			displayMsgError(vkontak);
		}
		if ($("#pesan").val() == "") {
			$ok = 0;
			displayMsgError(vpesan);
		}

		if ($ok == 1) {
			var g = b.serializeArray();
			g.push({
				name: csfr_token_name,
				value: $.cookie(csfr_cookie_name)
			});

			//c.prop("disabled", true);
			a = $.ajax({
				url: base_url + "agenwahana-submit",
				type: "post",
				data: g,
			});
			a.done(function (h) {
				if (h.trim() == "sukses") {
					var p = $('#page').val();
					if (p == 1) {
						pp = "agen Wahana";
					}
					var contentsukses = '<div class="mx-auto text-center textmain-blue font-black font-size22 mb-10">Terima Kasih</div><div class="mx-auto text-center textmain-blue font-normal font-size14">Form ' + pp + '  Anda sudah kami terima.<br>Staf Wahana express akan menghubungi Anda</div>';
					$('#contentsuksesmodal').html(contentsukses);
					$('#suksesmodal').modal('show');
				} else {
					$('#pesanerrorcsumum').html(h);
					$('#myModal').modal('show');
				}

			});
			a.error(function (xhr, status, error) {
				//console.log("error : " + xhr.responseText);
			});
		}

	});
	$('#btnBookmark').on("click", function () {
		var contentsukses = '<div class="mx-auto text-center textmain-blue font-black font-size22 mb-10">Bookmark Tarif</div><div class="mx-auto text-center textmain-blue font-normal font-size14">Tekan CTRL + D di keyboard Anda untuk<br>menyimpan halaman ini</div>';
		$('#contentsuksesmodal').html(contentsukses);
		$('#suksesmodal').modal('show');
	});
})

window.onscroll = function () {
	scrollFunction()
};

function scrollFunction() {
	//if ((document.body.scrollTop > 80 && document.body.scrollTop < 2100) || document.documentElement.scrollTop > 80) {
	//if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) { console.log("a "+document.body.scrollTop);
	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 && document.documentElement.scrollTop < 3360) {
		$("#faq-tabs").addClass("faqmenushrink");
		$("#accordion-tab-nav").addClass("faqleftmenu-shrink");
		var widthleft = $('#faqleftmenu').width();
		$("#faq-tabs").width(widthleft);
		$(".faqleftmenu-shrink").width(widthleft);
	} else {
		$("#faq-tabs").removeClass("faqmenushrink");
		$("#accordion-tab-nav").removeClass("faqleftmenu-shrink");
	}

	if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80 && document.documentElement.scrollTop < 5000) {
		$("#snk-tabs").addClass("faqmenushrink");
		$("#accordion-tab-nav").addClass("faqleftmenu-shrink");
		var widthleft = $('#faqleftmenu').width();
		$("#snk-tabs").width(widthleft);
		$(".faqleftmenu-shrink").width(widthleft);
	} else {
		$("#snk-tabs").removeClass("faqmenushrink");
		$("#accordion-tab-nav").removeClass("faqleftmenu-shrink");
	}
}

$(document).ready(function () {

	function displayMsgError(id, msg) {
		$('#msg-' + id).show();
		$('#' + id).addClass("border-error");
		if (msg != "") {
			$('#msg-' + id).html(msg);
		}
	}

	function removeMsgError(id) {
		$('#msg-' + id).hide();
		$('#' + id).removeClass("border-error");
	}

	var vnoresi = "noresi";
	$('#' + vnoresi).focus(function () {
		removeMsgError(vnoresi);
	});


	// Lacak Kiriman Submit //
	$('#lacaksubmit').click(function () {

		var noresi = $('#' + vnoresi).val();
		var $ok = 1;
		var $mess = "";
		if (noresi == "") {
			$ok = 0;
			displayMsgError(vnoresi);
		}
		if ($ok == 1) {
			$('form#lacakresi').submit();
		}
	});

	// Add smooth scrolling to all links
	$(".faqnav").on('click', function (event) {
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;
			$(".faqnav").removeClass("active");
			$(hash + "nav").addClass("active");
			var w = $(window).width();
			var o;
			if (w > 768) {
				$('html, body').animate({
					scrollTop: $(hash).offset().top - 90
				}, 500, function () {

				});
			} else {
				$('html, body').animate({
					scrollTop: $(hash).offset().top - 160
				}, 500, function () {

				});
			}

		} // End if
	});


	// cari agen //
	/*$(".toleft").click(function() { console.log("dddd");
	 var id=this.getAttribute("data-mapid");
	$(".containerblock").addClass("open-sidebar");
    $(".containerblock").removeClass("close-sidebar");
	$(".toright").hide();
	$(".toright[data-mapid='" + id +"']").show();

  });
  $(".toright").click(function() {
    $(".containerblock").addClass("close-sidebar");
    $(".containerblock").removeClass("open-sidebar");
  });*/
});


const player = new Plyr('#player');
