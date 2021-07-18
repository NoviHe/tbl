<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $d['no_resi']; ?>">
    <input type="hidden" name="username_agen" value="<?php echo $d['username_agen']; ?>">
    <input type="hidden" name="tanggal_resi" value="<?php echo $d['tanggal']; ?>">
    <input type="hidden" name="total_harga" value="<?php echo $d['total_harga']; ?>">
    <input type="hidden" name="nama" value="<?php echo $d['nama_penerima']; ?>">
    <input type="hidden" name="alamat" value="<?php echo $d['alamat_penerima']; ?>">
    <input type="hidden" name="nama_barang" value="<?php echo $d['jenis_barang']; ?>">
    <input type="hidden" name="jenis_barang" value="<?php echo $d['jenis_barang']; ?>">
    <input type="hidden" name="qty" value="<?php echo $d['jumlah_barang']; ?>">
    <input type="hidden" name="berat" value="<?php echo $d['berat_kiriman']; ?>">
    <span class="modals_notif_hapus">
        Konfirmasi Payments :
        <strong>
            <?php echo $d['no_resi']; ?>
        </strong>
        ?
    </span>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-right">
            <button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="konfirmasi_payment">
                Konfirmasi
            </button>
            <button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
                Batal
            </button>
        </div>
    </div>
</form>
<?php
if (isset($_POST['konfirmasi_payment'])) {
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