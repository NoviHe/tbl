<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

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

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>

	<?php
	include '../config.php';
	$data = mysqli_query($koneksi, "select * from data_login");
	while ($d = mysqli_fetch_array($data)) {
	?>
		<style>
			.alert {
				background: <?php echo $d['bg_alert']; ?> !important;
			}
		</style>
		<div class="login" style="background:url(../.core/.assets/.img/<?php echo $d['bg_login']; ?>);">
			<a href="#">
				<img src="../.core/.assets/.img/<?php echo $d['logo_login']; ?>" style="width:150px;">
			</a>
			<div class="form_login">
				<span class="satu" style="background:<?php echo $d['bg_informasi']; ?>; color:<?php echo $d['color_informasi']; ?>;">
					<h3>
						<?php echo $d['judul_informasi']; ?>
					</h3>
					<p>
						<?php echo $d['informasi_login']; ?>
					</p>
				</span>
				<span class="dua" style="background: #222222;">
					<h3 style="color: #fff;">
						Login Staff Karyawan
					</h3>
					<form class="form_login_register" method="post" action="../apk_karyawan/login.php" role="form">
						<div class="input-group">
							<span class="input-group-addon username"><i class="fa fa-user-circle" style="margin-left:1px;"></i></span>
							<input type="text" class="form-control username" placeholder="Masukan NIP" name="username" required>
						</div>
						<div class="input-group">
							<span class="input-group-addon password"><i class="fa fa-lock" style="margin:0px 2.5px;"></i></span>
							<input type="password" class="form-control password" placeholder="*************" name="password" required>
						</div>
						<button type="submit" class="btn btn_login">Login Staf Karyawan</button>
					</form>
				</span>
				<span class="tiga" style="background:<?php echo $d['bg_footer']; ?>; color:<?php echo $d['color_footer']; ?>;">
					<p>
						<?php echo $d['tagline_login_footer']; ?>
					</p>
				</span>
			</div>
		</div>
	<?php
	}
	?>

	<script>
		window.setTimeout(function() {
			$(".alert").fadeTo(500, 0).slideUp(500, function() {
				$(this).remove();
			});
		}, 3000);
	</script>

	<script src="../.core/.assets/.dashboard/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/jquery-ui/jquery-ui.min.js"></script>
	<script>
		$.widget.bridge('uibutton', $.ui.button);
	</script>
	<script src="../.core/.assets/.dashboard/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/raphael/raphael.min.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/morris.js/morris.min.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
	<script src="../.core/.assets/.dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="../.core/.assets/.dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/moment/min/moment.min.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
	<script src="../.core/.assets/.dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../.core/.assets/.dashboard/bower_components/fastclick/lib/fastclick.js"></script>
	<script src="../.core/.assets/.dashboard/dist/js/adminlte.min.js"></script>
	<script src="../.core/.assets/.dashboard/dist/js/pages/dashboard.js"></script>
	<script src="../.core/.assets/.dashboard/dist/js/demo.js"></script>

</body>

</html>