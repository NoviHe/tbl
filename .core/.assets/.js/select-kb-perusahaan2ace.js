$(function () {

	var tariftujuan = $('#tariftujuan');

	function formatState(state) {
		var isi = state.text;
		var result = isi;
		if (isi.indexOf("<") > -1) {
			result = $("<span class='font-bold'>" + isi + "</span>");
		}
		return result;
	};

	function refreshSelects() {
		var selects = tariftujuan.find('select');

		// Improve the selects with the Chose plugin
		selects.select2({
			templateResult: formatState
		});

		// Listen for changes
		selects.unbind('change')
			.bind('change', function () {
				//alert('a');
				// The selected option
				var selected = $(this)
					.find('option')
					.eq(this.selectedIndex);
				// Look up the data-connection attribute
				var connection = selected.data('connection');
				var info = selected.data('info');
				var value = selected.value;
				back = selected.data('back');
				back2 = selected.data('back2');


				// Removing the li containers that follow (if any)
				selected.closest('#tariftujuan li')
					.nextAll()
					.remove();

				if (connection) {
					fetchSelect(connection, info, connection, back, back2);

				}

			});
	}


	var working = false;

	function fetchSelect(val, info, value, back, back2) {
		console.log("zzz"+val+" : "+info+" : "+back);
		console.log("masuk1");
		if (working) {
			return false;
		}

		//console.log("data:"+back);
		working = true;
		var dataVal = value.split("#"); //console.log(value+" -- a:"+dataVal[0]+":b"+dataVal[1]);
		var dataBack = back.split("#");
		var dataBack2 = back2.split("#");
		linkurl = "api/getProvinsiTujuan";
		var idtj = $('#idtj').val();
		if (info == "provinsi") {
			if (dataVal[0] == "2222") {
				linkurl = base_url + "api/getJabodetabekTujuan";
			} else {
				linkurl = base_url + "api/getKabupatenTujuan/" + dataVal[0];
			}
		}

		var newidtj = "";
		if (idtj != "") {
			var newidtj = idtj + "#" + dataVal[0];
		} else {
			var newidtj = dataVal[0];
		}
		$('#idtj').val(newidtj);

		$.getJSON(linkurl, function (r) {
			//console.log("masuk"+ param.length);
			console.log(back2);
			var connection, options, optionsfirst, backV, backV2 = '';
			var param;
			var firstVal;
			var dataVal = value.split("#");

			if (info == "" || info == "main") {
				//console.log("nn"+info);
				param = r.data.ProvinsiDetail;
				placeholder = "Pilih Provinsi";
				optionsfirst = '<option value="0" >' + placeholder + '</option>';
			}
			if (info == "provinsi") {
				//console.log("zz"+info);
				if (dataVal[0] == "2222") {
					param = r.data.KotaDetail;
				} else {
					param = r.data.KabupatenDetail;
				}
				firstVal = dataVal[0];
				firstText = dataVal[1];
				firstdataInfo = 'data-info="main"';
				backV = "";
				backV2 = "";
				firstconnection = 'data-connection="' + dataVal[0] + '#' + dataVal[1] + '" data-back="' + backV + '#' + dataVal[0] + '"  data-back2="' + backV2 + '#' + dataVal[1] + '"';
				placeholder = "Pilih Kota";
				optionsfirst = '<option value="0" >' + placeholder + '</option>';
			}
			if (info == "kota") { //console.log(dataVal); console.log(dataBack2);
				//console.log("yy"+info);
				param = r.data.KecamatanDetail;
				firstVal = dataVal[0];
				firstText = dataVal[1];
				firstdataInfo = 'data-info="provinsi"';
				backV = dataBack[0] + "#" + dataBack[1];
				backV2 = dataBack2[0] + "#" + dataBack2[1];
				firstconnection = 'data-connection="' + dataBack[1] + '#' + dataBack2[1] + '" data-back="' + backV + '#' + dataVal[0] + '" data-back2="' + backV2 + '#' + dataVal[1] + '"';
				placeholder = dataVal[1];
				optionsfirst = '<option value="' + dataVal[0] + '" >' + dataBack2[1] + ", " +placeholder + '</option>';

			}





			/* Param Loop :: start */
			$.each(param, function (k, v) {

				//console.log(k + " : " + v.id + " : " + v.text);
				connection = '';
				if (info == "" || info == "main") {
					dataInfo = 'data-info="provinsi"';
					defaultText = "Provinsi";
				}
				if (info == "provinsi") {
					dataInfo = 'data-info="kota"';
					defaultText = "Kota";
				}



				if (v) {
					connection = 'data-tes="2" data-connection="' + v.id + '#' + v.text + '" data-back="' + backV + '#' + dataVal[0] + '"  data-back2="' + backV2 + '#' + dataVal[1] + '"';
				}


					options += '<option value="' + v.id + '" ' + connection + ' ' + dataInfo + '>' + v.text + '</option>';

			});
			/* Param Loop :: end */

			if (info != "" && info != "main") {
				options = optionsfirst + '<option class="font-bold" value="' + firstVal + '" ' + firstconnection + ' ' + firstdataInfo + '>< ' + firstText + '</option>' + options;
			} else {
				options = optionsfirst + '<option></option>' + options;
			}

			// Building the markup for the select section


			if (dataVal[0] == "9471049272") {
				dataInfo = 'data-info="last"';
				defaultText = "kota";
				firstText = dataVal[1];
				firstdataInfo = 'data-info="main"';
				backV = "";
				backV2 = "";
				firstconnection = 'data-connection="' + dataVal[0] + '#" data-back="' + backV + '#' + dataVal[0] + '"  data-back2="' + backV2 + '#' + dataVal[1] + '"';
				optionsfirst = '<option value="' + dataVal[0] + '" ' + firstconnection + ' ' + firstdataInfo + '>' + dataVal[1] + '</option>';
				options = optionsfirst + '<option class="font-bold" value="31" data-connection="31#DKI Jakarta" data-back="#31" data-back2="#DKI Jakarta" data-info="main">< ' + firstText + '</option>';
			} 

			var content = '<select name="cektariftujuan"  id="cektariftujuan" class="form-control font-size14 font-light w-100" data-placeholder="' + placeholder + '" data-info="' + defaultText + '">\
					' + options + '\
				</select>\
				<span class="divider"></span>';
			$('#tariftujuan')
				.html(content);


			if (defaultText != "Last") {
				refreshSelects();
			}
			if (defaultText == "Kota"  || info == "main") {
				if (info != "kota") {
					setTimeout(function () {
						$('#cektariftujuan').select2('open');
					}, 0)
					$('#key').val("0");
					$('#cektarifsubmit').addClass("disabled");
				} else {
					$('#key').val("1");
					$('#cektarifsubmit').removeClass("disabled");
				}
			}
			working = false;
		});


	}


	$('#preloader')
		.ajaxStart(function () {
			$(this)
				.show();
		})
		.ajaxStop(function () {
			$(this)
				.hide();
		});

	// Initially load the product select
	var info;
	var value;
	var back;
	var back2;
	if ($(this)
		.attr('data-info') == undefined) {
		info = "";
	} else {
		info = $(this)
			.attr('data-info');
	}
	if ($(this)
		.children("option:selected")
		.val() == undefined) {
		value = "#";
		back = "";
		back2 = "";
	} else {
		value = $(this)
			.children("option:selected")
			.val();
	}
	fetchSelect('data', info, value, back, back2);


});

$(document).ready(function () {

	function displayMsgError(id, msg) {
		$('#msg-' + id).show();
		$('#' + id).addClass("border-error");
		if (msg != "") {
			$('#msg-' + id).html(msg);
		}
	}

	function displayMsgErrorCekTarif(id, id2, msg) {
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

	function removeMsgErrorCekTarif(id, id2) {
		$('#msg-' + id).hide();
		$('#' + id).removeClass("border-error");
	}


	var cektariftujuan = "select2-cektariftujuan-container";
	var cektariftujuan2 = "cektariftujuan";
	var vtb = "tb";
	var vtp = "tp";
	var vtl = "tl";
	var vtt = "tt";

	$('#' + cektariftujuan).focus(function () {
		removeMsgErrorCekTarif(cektariftujuan, cektariftujuan2);
	});
	$('#' + vtb).focus(function () {
		removeMsgError(vtb);
	});
	$('#' + vtp).focus(function () {
		removeMsgError(vtp);
	});
	$('#' + vtl).focus(function () {
		removeMsgError(vtl);
	});
	$('#' + vtt).focus(function () {
		removeMsgError(vtt);
	});

	$('#cektarifsubmit').click(function () {
		var tujuan = $('#cektariftujuan').val();
		var tb = $('#tb').val();
		var tp = $('#tp').val();
		var tl = $('#tl').val();
		var tt = $('#tt').val();
		var last = $('#cektariftujuan').attr('data-info');
		var $ok = 1;
		var $mess = "";
		//console.log($("#key").val()+" : "+last);


		if ($("#key").val() == "0" || last != "kota") {
			$ok = 0;
			$mess = "Pilih " + last + " tujuan<br> ";
			displayMsgErrorCekTarif(cektariftujuan, cektariftujuan2, $mess);
		}
		if (tb == "" || tb == "0") {
			$ok = 0;
			displayMsgError(vtb);
		}
		if (tp == "" || tp == "0") {
			$ok = 0;
			displayMsgError(vtp);
		}
		if (tl == "" || tl == "0") {
			$ok = 0;
			displayMsgError(vtl);
		}
		if (tt == "" || tt == "0") {
			$ok = 0;
			displayMsgError(vtt);
		}

		if ($ok == 1) {
			$('form#cektarif').submit();
		}
	});


});
