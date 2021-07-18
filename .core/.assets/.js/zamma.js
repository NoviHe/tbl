
var area = "";
$(function () {
    function test(start_time, end_time) {
        var dt = new Date();

        //convert both time into timestamp
        var stt = new Date((dt.getMonth() + 1) + "/" + dt.getDate() + "/" + dt.getFullYear() + " " + start_time);
        stt = stt.getTime();
        
        var endt = new Date((dt.getMonth() + 1) + "/" + dt.getDate() + "/" + dt.getFullYear() + " " + end_time);
            endt = endt.getTime();
        
        var start_time2 = "09:00:00";
        var end_time2 = "18:00:00";
        
        var stt2 = new Date((dt.getMonth() + 1) + "/" + dt.getDate() + "/" + dt.getFullYear() + " " + start_time2);
        stt2 = stt2.getTime();
        
        var endt2 = new Date((dt.getMonth() + 1) + "/" + dt.getDate() + "/" + dt.getFullYear() + " " + end_time2);
        endt2 = endt2.getTime();

        var time = dt.getTime();
        var day = dt.getDay();
        if (time > stt && time < endt && day >= 1 && day <=5 ) {
            return true;
        } 
        else if (time > stt2 && time < endt2 && day == 6 ) {
                return true;
        }
        else {
            // $("#a").append("<br> Expire BOx " );
            return false;
        }
    }

    // setCookie('chats','',-1);
    $('.open-chat').attr('disabled',true);
    $('.open-zammad-chat').hide();
    var data = {};
    var zc, area;
    var nama, email, ttk;
    var hash, cooks;
    var ip_address ='';
    nama = $('#nama').val();
    email = $("#email").val();
    ttk = $("#ttk").val().toUpperCase();
    $('#nama, #email, #ttk').on('keydown keyup change', function () {
        nama = $('#nama').val();
        email = $("#email").val();
        ttk = $("#ttk").val().toUpperCase();
        if ($('#ttk').val().length == 8) {
            //Cek Keluhan Hari ini
            /*$.ajax({
                url: "https://mobile.wahana.com/apps/wahana/cgi-bin/api.cgi?b=view/vnm.getStatusKeluhanNow&lo=json&t=json&asis=1&TTK=" + ttk,
                dataType: 'json',
                success: function (result) {
                    if (result.length == 1){
                        nokeluhan = result[0].ATRBTNO;
                    }
                    else
                    {
                        nokeluhan = null;
                    }
                    console.log(result.length);
                    $('.open-chat').attr('disabled',false);
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });*/

            //Cek Area            
            $.ajax({
                url: "https://mobile.wahana.com/apps/wahana/cgi-bin/api.cgi?b=view/vnm.getTujuanAkhirTawkTo&lo=json&t=json&asis=1&TTK=" + ttk,
                dataType: 'json',
                success: function (result) {
                    area = result[0].ATRCAREANML;
                    // console.log(area);
                    $('.open-chat').attr('disabled',false);
                }
            });
        }
        else
        {
            $('.open-chat').attr('disabled',true);
        }
        if (nama != '' && ttk != '') {
            hash = MD5(nama + ttk);
            // console.log(hash);
            setTimeout(() => {
                eraseCookie(hash);
            }, 500);
        }
    });
    $('.open-chat').on('click', function () {
        if(test("09:00:00", "20:00:00") == false){
            Swal.fire({
              type: 'info',
              html: 'Terima kasih telah  menghubungi customer service<br> <b>Wahana Express</b><br>Jam layanan customer service kami <br>hari <b>Senin</b> hingga <b>Jumat</b><br> pukul 09.00 sampai 20.00 <br>dan <br>hari <b>Sabtu</b><br> pukul  09.00 sampai 18.00.<br><br> Kami tidak membuka layanan customer service pada hari Minggu dan hari libur nasional.<br><br>Silahkan hubungi kami kembali, sesuai jam layanan Wahana Express. Terima kasih.'
            })
            .then((value) => {
                $.getJSON('https://ipapi.co/json/', function (data) {
                    ip_address = data.ip;
                    // console.log(ip_address);
                    $.ajax({
                        url: 'https://zcs.wahana.com/v1/chat_not_connected',
                        type: 'Post',
                        data: {'nama':nama,'email':email,'ttk':ttk,'ip':ip_address},
                        success : function(result) {
                            // console.log(JSON.stringify(result));
                            $('#nama').val('');
                            $('#email').val('');
                            $('#ttk').val('');
                            $('.open-chat').attr('disabled', true);
                            window.location.reload();
                        }
                    });
                });
            });
        }
        else{
            setTimeout(() => {
                if (nama == '' || email == '' || ttk == '') 
                {
                    swal('PERHATIAN','mohon isi form terlebih dahulu','warning');
                }
                else 
                {
                    if(ttk.length > 8 || ttk.length < 8 || !area)
                    {
                        swal('PERHATIAN','NO.RESI ANDA TIDAK VALID!','error');
                    }
                    /*else if(nokeluhan !== null)
                    {
                        swal('PERHATIAN','Anda sudah membuat keluhan hari ini','error');
                    }*/
                    else
                    {
                        data = { nama, email, ttk, area };
                        setCookie(hash, data, 1);
                        cooks = JSON.parse(getCookie(hash));
                        if (!cooks) {
                            var ch = JSON.parse(getCookie(hash));
                            zc = new ZammadChat({
                                title: '<strong>Live Chat!</strong> Wahana Express',
                                background: '#234393',
                                fontSize: '14px',
                                flat: true,
                                chatId: 7,
                                debug: true,
                                show: false,
                                name: ch.ttk + " | " + ch.area,
                                dataChat: ch,
                                greeting: 'Selamat datang di Layanan Chat Wahana Express.<br>Wilayah :<br>' + area
                            });
                            $('.open-zammad-chat').click();
                                $("#nama").val('');
                                $("#email").val('');
                                $("#ttk").val('');
                        }
                        else {
                            $('.loader').removeClass('d-none');
                            zc = new ZammadChat({
                                title: '<strong>Live Chat!</strong> Wahana Express',
                                background: '#234393',
                                fontSize: '14px',
                                flat: true,
                                chatId: 7,
                                debug: false,
                                show: true,
                                name: cooks.ttk + " | " + cooks.area,
                                dataChat: cooks,
                                greeting: 'Selamat datang di Layanan Chat Wahana Express.<br>Wilayah :<br>' + area
                            });
                            if(zc)
                            {
                                var checkexist = setInterval(() => {
                                    if($('.zammad-chat').length)
                                    {
                                        $('.zammad-chat').addClass('text-left');
                                        $('.loader').addClass('d-none');
                                        $('.js-chat-open').click();
                                        $("#nama").val('');
                                        $("#email").val('');
                                        $("#ttk").val('');
                                        $(this).attr('disabled',true);
                                        clearInterval(checkexist);
                                    }
                                }, 500);
                                setTimeout(() => {
                                    if (!$('.zammad-chat').length)
                                    {
                                        /*swal('', 'Mohon maaf semua petugas CS kami sedang melayani pelanggan lain. Mohon menunggu beberapa saat atau silakan refresh halaman ini', 'warning');*/
                                        swal('', 'Mohon maaf semua petugas CS kami sedang melayani pelanggan lain. Mohon menunggu beberapa saat atau silakan refresh halaman ini', 'warning')
                                        .then((value) => {
                                            $.getJSON('https://ipapi.co/json/', function (data) {
                                                ip_address = data.ip;
                                                // console.log(ip_address);
                                                $.ajax({
                                                    url: 'https://zcs.wahana.com/v1/chat_busy',
                                                    type: 'Post',
                                                    data: {'nama':nama,'email':email,'ttk':ttk,'ip':ip_address},
                                                    success : function(result) {
                                                        // console.log(JSON.stringify(result));
                                                        $('#nama').val('');
                                                        $('#email').val('');
                                                        $('#ttk').val('');
                                                    }
                                                });
                                            });
                                        });
                                        $('.loader').addClass('d-none');
                                        $(this).attr('disabled',false);
                                    }
                                }, 30000);
                            }
                        }
                    }
                }
            }, 2250);
        }
    });
    window.onbeforeunload = function (event) {
        // return confirm("Confirm refresh");
        if (zc) {
            zc.close();
        }
    };
    function setCookie(name, value, days) {
        var expires = "";
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + JSON.stringify(value) + expires + "; path=/";
    }
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
    }
    function eraseCookie(name) {
        document.cookie = name + '=""; Max-Age=-99999999;';
    }
});
