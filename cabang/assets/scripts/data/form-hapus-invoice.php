<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    <span class="modals_notif_hapus">
        Hapus Invoice Selesai :
        <strong>
            <?php echo $d['id']; ?>
        </strong>
        ?
    </span>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-right">
            <button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="hapus_invoice">
                Hapus
            </button>
            <button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
                Batal
            </button>
        </div>
    </div>
</form>
<?php
if (isset($_POST['hapus_invoice'])) {
    $id = $_POST['id'];
    mysqli_query($koneksi, "DELETE from laporan_invoice where id='$id'");

    session_start();
    $_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
    header("location: invoice");
    exit();
}
?>