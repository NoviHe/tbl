<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php
	include '../config.php';
	$data = mysqli_query($koneksi, "select * from data_website");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<title><?php echo $d['tagline']; ?></title>
		<link rel="icon" href="../.core/.assets/.img/<?php echo $d['favicon']; ?>">
	<?php
	}
	?>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/css/login.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/morris.js/morris.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>
	<?php
	$d = array();
	$data = mysqli_query($koneksi, "select * from data_login");
	while ($record = mysqli_fetch_array($data)) {
		array_push($d, $record);
	}
	?>
	<style>
		.alert {
			background: <?php echo $d[0]['bg_alert']; ?> !important;
		}
	</style>
	<div class="login" style="background:url(../.core/.assets/.img/<?php echo $d[0]['bg_login']; ?>);">
		<a href="#">
			<img src="../.core/.assets/.img/<?php echo $d[0]['logo_login']; ?>" style="width:150px;">
		</a>
		<div class="form_login">
			<span class="satu" style="background:<?php echo $d[0]['bg_informasi']; ?>; color:<?php echo $d[0]['color_informasi']; ?>;">
				<h3>
					<?php echo $d[0]['judul_informasi']; ?>
				</h3>
				<p>
					<?php echo $d[0]['informasi_login']; ?>
				</p>
			</span>
			<span class="dua" style="background: #222222;">
				<h3 style="color: #fff;">
					Login Kurir
				</h3>
				<form class="form_login_register" method="post" action="../apk_kurir/login.php" role="form">
					<div class="input-group">
						<span class="input-group-addon username"><i class="fa fa-user-circle" style="margin-left:1px;"></i></span>
						<input type="email" class="form-control username" placeholder="email@email.com" name="username" required>
					</div>
					<div class="input-group">
						<span class="input-group-addon password"><i class="fa fa-lock" style="margin:0px 2.5px;"></i></span>
						<input type="password" class="form-control password" placeholder="*************" name="password" required>
					</div>
					<button type="submit" class="btn btn_login">Login Kurir</button>
				</form>
			</span>
			<span class="tiga" style="background:<?php echo $d[0]['bg_footer']; ?>; color:<?php echo $d[0]['color_footer']; ?>;">
				<p>
					<?php echo $d[0]['tagline_login_footer']; ?>
				</p>
			</span>
		</div>
	</div>

</body>

</html>