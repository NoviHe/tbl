$(document).ready(function() {
$("#provinsi").append('<option value="0">Pilih</option>');
$("#kabupaten").html('');
$("#kecamatan").html('');
$("#kelurahan").html('');
$("#kabupaten").append('<option value="0">Pilih</option>');
$("#kecamatan").append('<option value="0">Pilih</option>');
$("#kelurahan").append('<option value="0">Pilih</option>'); 
url = base_url +'api/getselectprovinsi';
$.ajax({ url: url,
type: 'GET',
dataType: 'json',
success: function(result) {
for (var i = 0; i < result.length; i++)
$("#provinsi").append('<option value="' + result[i].id + '">' + result[i].name + '</option>');
}
});
});
$("#provinsi").change(function(){
var id_prov = $("#provinsi").val();
var url = base_url +'api/getselectkota/' + id_prov;
$("#kabupaten").html(''); $("#kecamatan").html('');
$("#kelurahan").html(''); $("#kabupaten").append('<option value="">Pilih</option>');
$("#kecamatan").append('<option value="">Pilih</option>');
$("#kelurahan").append('<option value="">Pilih</option>');
$.ajax({ url : url,
type: 'GET',
dataType : 'json',
success : function(result){
for(var i = 0; i < result.length; i++)
$("#kabupaten").append('<option value="'+ result[i].id +'">' + result[i].name + '</option>');
}
});
});
$("#kabupaten").change(function(){
var id_kab = $("#kabupaten").val();
var url = base_url +'api/getselectkecamatan/' + id_kab;
$("#kecamatan").html(''); $("#kelurahan").html('');
$("#kecamatan").append('<option value="">Pilih</option>');
$("#kelurahan").append('<option value="">Pilih</option>');
$.ajax({ url : url,
type: 'GET',
dataType : 'json',
success : function(result){
for(var i = 0; i < result.length; i++)
$("#kecamatan").append('<option value="'+ result[i].id +'">' + result[i].name + '</option>');
}
});
});
$("#kecamatan").change(function(){
var id_kec = $("#kecamatan").val();
var url = base_url +'api/getselectkelurahan/' + id_kec;
$("#kelurahan").html('');
$("#kelurahan").append('<option value="">Pilih</option>');
$.ajax({ url : url,
type: 'GET',
dataType : 'json',
success : function(result){
for(var i = 0; i < result.length; i++)
$("#kelurahan").append('<option value="'+ result[i].id +'">' + result[i].name + '</option>');
}
});
});
