<script>
    $(document).ready(function() {
        $('#tabel-invoice').DataTable({
            "ordering": true,
            "lengthChange": false,
            // "processing": true,
            // "ajax": {
            // 	"url": "main?pg=proses-ajax",
            // 	"type": "POST",
            // 	"data": {
            // 		produk: 1
            // 	}
            // }
        });
    });

    function selected(id) {
        $('#modals_tambah_invoice form')[0].reset();
        $.ajax({
            url: ".act?value=proses-ajax",
            method: "POST",
            dataType: "JSON",
            data: {
                id: id
            },
            success: function(data) {
                console.log(data);
                $('#id').val(data.id);
                $('#username_agen').val(data.username_agen);
                $('#tanggal_resi').val(data.tanggal_resi);
                $('#total_harga').val(data.total_harga);
                $('#nama').val(data.nama);
                $('#alamat').val(data.alamat);
                $('#nama_barang').val(data.nama_barang);
                $('#jenis_barang').val(data.jenis_barang);
                $('#qty').val(data.qty);
                $('#berat').val(data.berat);
            }
        })
    }
</script>
<div class="row">
    <div class="col-lg-12">
        <div class="mbg-3 alert alert-info alert-dismissible fade show" role="alert" style="font-size:13px; letter-spacing:0.5px;">
            <span style="margin-right:2px;">
                <i class="fa fa-question-circle"></i>
            </span>
            Pilih Data Invoice untuk menginput data Laporan Invoice
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-4">
        <form method="post" action="" class="form_validation" novalidate enctype="multipart/form-data">
            <input type="hidden" name="username_agen" id="username_agen" value="">
            <input type="hidden" name="nama_barang" id="nama_barang" value="">
            <input type="hidden" name="tanggal_resi" id="tanggal_resi" value="">
            <div class="form_grup_with_judul">
                <div class="judul">
                    INVOICE
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label class="data">
                                        No Resi <sup class="wajib">*</sup>
                                    </label>
                                    <input onkeypress="return false" type="text" class="form-control input" id="id" name="id" value="" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label class="data">
                                        Qty <sup class="wajib">*</sup>
                                    </label>
                                    <input onkeypress="return false" type="text" class="form-control input" id="qty" name="qty" value="" required>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="position-relative form-group">
                                    <label class="data">
                                        Berat <sup class="wajib">*</sup>
                                    </label>
                                    <input onkeypress="return false" type="text" class="form-control input" id="berat" name="berat" value="" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="position-relative form-group">
                            <label class="data">
                                Nama Customer <sup class="wajib">*</sup>
                            </label>
                            <input onkeypress="return false" type="text" class="form-control input" id="nama" name="nama" value="" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="position-relative form-group">
                            <label class="data">
                                Alamat Customer <sup class="wajib">*</sup>
                            </label>
                            <input onkeypress="return false" type="text" class="form-control input" id="alamat" name="alamat" value="" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="position-relative form-group">
                            <label class="data">
                                Jenis Barang <sup class="wajib">*</sup>
                            </label>
                            <input onkeypress="return false" type="text" class="form-control input" id="jenis_barang" name="jenis_barang" value="" required>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="position-relative form-group">
                            <label class="data">
                                Nominal <sup class="wajib">*</sup>
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="btn btn-secondary form_grup_data">
                                        Rp.
                                    </span>
                                </div>
                                <input onkeypress="return false" type="text" class="form-control input text-left" onkeyup="convertToRupiah(this);" name="total_harga" id="total_harga" placeholder="0" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 text-right">
                        <button class="mt-1 btn btn-primary save_data" style="margin:0px 0px 0px 0px!important;" name="tambah_laporan_payment">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-8">
        <div class="form_grup_with_judul">
            <div class="judul">
                Data Invoice
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table id="tabel-invoice" class="table table-hover table-striped table-bordered" style="width:100%;">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>No Resi</th>
                                <th>Nama Customer</th>
                                <th>Jumlah Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $data = mysqli_query($koneksi, "select * from laporan_resi where metode_pembayaran='INVOICE' AND STATUS IS null order by no_resi DESC");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td>
                                        <?php echo $no++; ?>
                                    </td>
                                    <td>
                                        <a class="text-danger" href="javascript:selected('<?php echo $d['no_resi']; ?>')" style="text-decoration:none; font-weight:500;">
                                            <?php echo $d['no_resi']; ?>
                                        </a>
                                    </td>
                                    <td>
                                        <?php echo $d['nama_penerima']; ?>
                                    </td>
                                    <td style="text-align:right;">
                                        Rp.
                                        <?php
                                        echo number_format($d['total_harga'], 0, ',', '.');
                                        ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if (isset($_POST['tambah_laporan_payment'])) {
    $id = $_POST['id'];
    $username_agen = $_POST['username_agen'];
    $tanggal_resi = $_POST['tanggal_resi'];
    $tanggal_diterima = date("Y-m-d H:i:s");
    $tanggal_tempo = date("Y-m-d H:i:s", strtotime('+14 days', strtotime($tanggal_diterima)));
    $total_harga = $_POST['total_harga'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];
    $qty = $_POST['qty'];
    $berat = $_POST['berat'];
    $status = "BELUM SELESAI";

    $query = mysqli_query($koneksi, "INSERT INTO laporan_invoice
			(
				id,
				username_agen,
                tanggal_resi,
				tanggal_diterima,
                tanggal_tempo,
                total_harga,
				nama,
                alamat,
                nama_barang,
                jenis_barang,
                asuransi,
                qty,
				berat,
                status
			) 
			VALUES (
				'$id',
				'$username_agen',
                '$tanggal_resi',
				'$tanggal_diterima',
				'$tanggal_tempo',
				'$total_harga',
				'$nama',
				'$alamat',
				'$nama_barang',
				'$jenis_barang',
                'TIDAK',
				'$qty',
				'$berat',
				'$status'
				)
			");
    if ($query) {

        mysqli_query($koneksi, "UPDATE laporan_resi SET 
			
        status		= '1'
        
        where no_resi='$id'");

        session_start();
        $_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
        header("location: invoice");
        exit();
    }
}
?>