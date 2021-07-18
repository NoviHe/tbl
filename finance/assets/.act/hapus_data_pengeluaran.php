	<?php 
        include '../config.php';
        $no_resi = $_GET['no_resi'];
		
        $query  = mysqli_query($koneksi,"delete from laporan_pengeluaran where no_resi='$no_resi'");	
		
		header("location:laporan-pengeluaran");
    ?>