<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
    <span class="modals_notif_hapus">
        Konfirmasi Invoice :
        <strong>
            <?php echo $d['id']; ?>
        </strong>
        ?
    </span>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-right">
            <button class="mt-1 btn btn-primary save_data" style="margin:20px 0px 0px 0px!important;" name="konfirmasi_invoice">
                Konfirmasi
            </button>
            <button class="mt-1 btn btn-primary save_data" data-dismiss="modal" aria-label="Close" style="margin:20px 0px 0px 10px!important;">
                Batal
            </button>
        </div>
    </div>
</form>
<?php
if (isset($_POST['konfirmasi_invoice'])) {
    $id = $_POST['id'];
    mysqli_query($koneksi, "UPDATE laporan_invoice SET 
			
        status		= 'SELESAI'
        
        where id='$id'");

    session_start();
    $_SESSION['notifikasi_sukses'] = "<img src='../assets/images/ceklis.png'> Data Berhasil Dihapus!";
    header("location: invoice");
    exit();
}
?>