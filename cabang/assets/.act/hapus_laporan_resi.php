	<?php 
        include '../config.php';
        $no_resi = $_GET['no_resi'];
		
		$query = mysqli_query($koneksi,"delete from laporan_resi where no_resi='$no_resi'");
        $query .= mysqli_query($koneksi,"delete from laporan_pemasukan where no_resi='$no_resi'");			
		$query .= mysqli_query($koneksi,"delete from db_invoice where no_resi='$no_resi'");			
		$query .= mysqli_query($koneksi,"delete from db_tracking_resi where no_resi='$no_resi'");	
        header('location:pengiriman');
    ?>