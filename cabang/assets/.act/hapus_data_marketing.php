	<?php 
        include '../config.php';
        $id = $_GET['id'];
		
        mysqli_query($koneksi,"delete from db_marketing where id='$id'");	
        header('location:marketing');
    ?>