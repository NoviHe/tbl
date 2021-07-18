<?php
	ob_start();
	session_start();
	if(!isset($_SESSION['sign-in'])){
		header('location:sign-in');
	}
	include "../config.php";
	include "../assets/scripts/script.php";
	include "assets/scripts/script-agen.php";
?>
<!DOCTYPE html>
<html lang="id" translate="no">
<head>
	<meta name="google" content="notranslate">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="in">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="msapplication-tap-highlight" content="no">
	
    <!-- Head -->
	<title><?php echo $nama_perusahaan['nama_website'];?> - <?php echo $tagline['tagline'];?></title>
	<link rel="icon" href="../assets/images/konten/<?php echo $favicon['favicon'];?>">	
	<meta name="description" content="This system is made by Solusi Digital ID (solusidigitalid.com)">
	<link href="../main.css" rel="stylesheet">
	
	<!-- Data Tables -->
	<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/datatables/datatables.min.css"/>
	
	<!-- Sweetalert -->
	<link rel="stylesheet" type="text/css" href="../assets/alert/sweetalert/sweetalert2.css">
	<script type="text/javascript" charset="utf8" src="../assets/alert/sweetalert/sweetalert2.js"></script>
	
	<!-- Select2 -->
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
	
	<link href="../assets/css/style.css" rel="stylesheet">
	<link href="../assets/css/footer.css" rel="stylesheet">
	<link href="../assets/css/cetak_laporan.css" rel="stylesheet">
	<link href="../assets/css/cetak_resi.css" rel="stylesheet">
	<link href="../assets/css/invoice.css" rel="stylesheet">
	<script src='../assets/js/jquery.min.js'></script>
		
	<!-- Select Images File -->		
	<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
		
    <!-- End -->
</head>
<body>
	<div id="loadingMsg">
		<div class="line-scale mobile">
			<div></div>
			<div></div>
			<div></div>
			<div></div>
			<div></div>
		</div>
	</div>