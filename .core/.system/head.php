<?php
	include 'config.php';
	$data = mysqli_query($koneksi,"select * from data_website");
	while($d = mysqli_fetch_array($data)){
?>
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" >
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $d['tagline'];?></title>
	<link rel="icon" href=".core/.assets/.img/<?php echo $d['favicon'];?>">	
    <meta name="description" content="<?php echo $d['tagline'];?>">
    <meta name="keywords" content="<?php echo $d['tagline'];?>">
    <meta name="author" content="<?php echo $d['tagline'];?>">
    <meta property="og:locale" content="en_US">
    <meta property="og:site_name" content="<?php echo $d['tagline'];?>">
    <meta property="og:type" content="<?php echo $d['tagline'];?>">
    <meta property="og:title" content="<?php echo $d['tagline'];?>">
    <meta property="og:description" content="<?php echo $d['tagline'];?>">
    <meta property="fb:app_id" content="<?php echo $d['tagline'];?>">
    <meta name="twitter:card" content="<?php echo $d['tagline'];?>">
    <meta name="twitter:site" content="<?php echo $d['tagline'];?>">
    <meta name="twitter:title" content="<?php echo $d['tagline'];?>">
    <meta name="twitter:description" content="<?php echo $d['tagline'];?>">
    <meta name="google-signin-client_id" content="<?php echo $d['tagline'];?>">
    
	<!-- Font-icons CSS -->
    <link href=".core/.assets/.vendor/font-icons/css/varient.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic-ext,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;subset=cyrillic-ext,greek-ext,latin-ext,vietnamese" rel="stylesheet">   
	
    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href=".core/.assets/.css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,%20400,800,900,%20300i,%20400i,%20900i" rel="stylesheet">
	<script src="https://use.fontawesome.com/3ce0b859a9.js"></script>	
	
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href=".core/.assets/.css/magnific-popup.css">
	
	<!-- Style -->
	<link rel="stylesheet" href=".core/.assets/.css/slick.css">
	<link rel="stylesheet" href=".core/.assets/.css/select2.min.css">
	<link rel="stylesheet" href=".core/.assets/.css/leaflet.css">
	<link rel='stylesheet' href=".core/.assets/.css/plyr.css">
	<link rel="stylesheet" href=".core/.assets/.css/style-mp.css">
	<link rel="stylesheet" href=".core/.assets/.css/styles.css">
	
    <!-- jQuery -->
    <script src=".core/.assets/.js/jquery-1.12.4.min.js"></script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<?php 
}
?>