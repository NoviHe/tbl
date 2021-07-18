<?php
    include '../../../config.php';

    $harga   		=   $_POST['harga'];
    $kota_agen      =   $_POST['kota_agen'];
    $tujuan     	=   $_POST['tujuan'];

    $query      	=   "SELECT `" . $harga . "` FROM `data_resi` WHERE `dari` = '" . $kota_agen . "' AND `tujuan` = '" . $tujuan ."'";
    $result     	=	 mysqli_query( $koneksi, $query );
    $data       	= 	 mysqli_fetch_assoc($result);     
	
    echo $data[ $harga ];
?>