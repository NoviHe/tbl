/// MAP //



var latpos;
var longpos;
var map;
navigator.geolocation.getCurrentPosition(success);
//success(1);
function success(position) {
    /* dipakai jika ada position */
	latpos = position.coords.latitude;
    longpos = position.coords.longitude;
	//console.log (latpos+" : "+longpos);
	//latpos = -6.301890;
	//longpos = 106.789317;
	//$('#mapright').html('<img src="'+base_url + 'assets/img/w-load-384.gif" width="32" style="margin:10% 40%">');
    map = L.map('map')
        .setView([latpos, longpos], 15);


    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        })
        .addTo(map);

	//$.post( "https://weblib.wahana.com/index.php/Ajaxx/getLokasiAgenNew",
	urlMap=base_url+"api/getMap/"+latpos+"/"+longpos;
	var g = $('.mapcover').serializeArray();
			g.push({
				name: csfr_token_name,
				value: $.cookie(csfr_cookie_name)
			});
	a = $.ajax({
				url: urlMap,
				type: "post",
				data: g,
			});
			a.done(function(data) {
				//console.log(data);
				setMarkerS(JSON.parse(data), latpos, longpos);
				writeAgen(JSON.parse(data));
			});



}

function toleft(id, name, latpos, longpos, staT) {
	console.log("dddd");
	$(".containerblock").addClass("open-sidebar");
    $(".containerblock").removeClass("close-sidebar");
	$(".dataright").hide();
	$(".dataright[data-mapid='" + id +"']").show();
	popupMap(name, latpos, longpos, staT);

  };
function toright() {
    $(".containerblock").addClass("close-sidebar");
    $(".containerblock").removeClass("open-sidebar");
	map.closePopup();
  };

function writeAgen (location) {
	datamap=location.data.locationDetail;
	var resultLeft='';
	var nama='';
	for (var i = 0; i < datamap.length; i++) {
		n=i+1;
		nama=(datamap[i].name).toLowerCase();
		nama=nama.replace("wpl", "WPL");
		resultLeft+='<ul class="agen-ul dataright" data-mapid="'+n+'" >';
		resultLeft+='<li class="agen-result py-2">';
		resultLeft+='<div class="arrowright toright"  onclick="toright();"><i class="fa fa-angle-left" aria-hidden="true"></i></div>';
		resultLeft+='<div class="font-size12  textmain-blue my-10 text-capitalize">'+nama+'</div>';
		resultLeft+='<div class="font-size14 font-normal mb-10">'+datamap[i].address+'</div>';
		resultLeft+='<div class="font-size14 font-normal"><img src="'+base_url+'assets/img/icons/icon/Phone-small.png" width="16"> '+datamap[i].telephone+'</div>';
		resultLeft+='</li>';
		resultLeft+='</ul>';
	}
	$('#mapleft').html(resultLeft);
	var resultRight='<ul class="agen-ul">';
    for (var i = 0; i < datamap.length; i++) {
		n=i+1;
		nama=(datamap[i].name).toLowerCase();
		nama=nama.replace("wpl", "WPL");
		var gh = new Date()
        var hour = gh.getHours();
        var staT;
        if (!gh.getDay() == 0) {

            if (hour >= 9 && hour < 18) {
                staT = "<span class=\\'buka\\'>Buka</span>"
            } else {
                staT = "<span class=\\'tutup\\'>Tutup</span>"
            }
        } else {
            staT = "<span class=\\'tutup\\'>Tutup Di Hari Minggu</span>"
        }
		resultRight+='<li class="agen-li py-2 toleft" data-mapid="'+n+'"  onclick="toleft('+n+',\''+datamap[i].name+'\','+datamap[i].latitude+','+datamap[i].longitude+',\''+staT+'\');">';
		resultRight+='<div class="d-inline-block w-75 font-size14  textmain-blue text-capitalize">'+nama+'</div>';
		resultRight+='<div class="d-inline font-size12 font-normal">'+datamap[i].distanceInKm+' Km</div>';
		resultRight+='</li>';
	}
	resultRight+='</ul>';
	$('#mapright').html(resultRight);

}
function setMarkerS(location, lat, lng) {

    var LeafIcon = L.Icon.extend({
        options: {
            shadowUrl: ''
            , iconSize: [35, 35]
            , shadowSize: [50, 64]
            , iconAnchor: [22, 94]
            , shadowAnchor: [4, 62]
            , popupAnchor: [-3, -76]
        }
    });

    //  var greenIcon = new LeafIcon({iconUrl: 'https://weblib.wahana.com/assets/images/wahana/pusat2.png'})
    var pngpusat = new LeafIcon({
        iconUrl: 'https://weblib.wahana.com/assets/images/wahana/marker.png'
    })
    var greenIcon = new LeafIcon({
        //iconUrl: 'https://wahana.com/wahana/images/icagwhn15.png'
        iconUrl: 'https://wahana.com/assets/img/pin.png'
    })
    // var pngpusat = new LeafIcon({iconUrl: 'wahana/images/icagwhn15.png'})
	datamap=location.data.locationDetail;

    for (var i = 0; i < datamap.length; i++) {
        var gh = new Date()
        var hour = gh.getHours();
        var staT;
        if (!gh.getDay() == 0) {

            if (hour >= 9 && hour < 18) {
                staT = "<span class='buka'>Buka</span>"
            } else {
                staT = "<span class='tutup'>Tutup</span>"
            }
        } else {
            staT = "<span class='tutup'>Tutup Di Hari Minggu</span>"
        }
				if (staT=="<span class='buka'>Buka</span>") {
					var jambuka= staT + ' &nbsp;09:00 - 18:00';
				} else {
					var jambuka= staT;
				}

        L.marker([datamap[i].latitude, datamap[i].longitude], {
                icon: greenIcon
            })
            .bindPopup(datamap[i].name + '[ <a href="http://maps.google.com/maps?q='+datamap[i].latitude+','+datamap[i].longitude+'" target="_blank">Lihat Detail</a>] <br> <center>' + jambuka)
            .addTo(map);

    }
    L.marker([lat, lng], {
            icon: pngpusat
        })
        .bindPopup('Lokasi anda')
        .addTo(map);

}

function popupMap(name, latpos, longpos, staT) {


var LeafIcon = L.Icon.extend({
        options: {
            shadowUrl: ''
            , iconSize: [35, 35]
            , shadowSize: [50, 64]
            , iconAnchor: [22, 94]
            , shadowAnchor: [4, 62]
            , popupAnchor: [-3, -76]
        }
    });

    //  var greenIcon = new LeafIcon({iconUrl: 'https://weblib.wahana.com/assets/images/wahana/pusat2.png'})
    var greenIcon = new LeafIcon({
        //iconUrl: 'https://wahana.com/wahana/images/icagwhn15.png'
        iconUrl: 'https://wahana.com/assets/img/pin.png'
    })
var marker2 = L.marker([latpos, longpos], {
                icon: greenIcon
            });
if (staT=="<span class='buka'>Buka</span>") {
	var jambuka= staT + ' &nbsp;09:00 - 18:00';
} else {
	var jambuka= staT;
}


marker2.bindPopup(name + '<br><center>[ <a href="http://maps.google.com/maps?q='+latpos+','+longpos+'" target="_blank">Lihat Lokasi Detail</a>]<br> <center>'+jambuka);
marker2.addTo(map);
marker2.openPopup();
 }
