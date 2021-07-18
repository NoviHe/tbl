	<?php 
        include '../config.php';
        $id = $_GET['id'];
		
        mysqli_query($koneksi,"delete from data_resi where id='$id'");	
        header('location:tujuan-tarif');
    ?>