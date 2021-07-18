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
		<div class="login" style="background:url(../.core/.assets/.img/<?php echo $d['bg_login']; ?>);">
			<img src="../.core/.assets/.img/<?php echo $d['logo_login']; ?>" style="width:150px;">
		<?php } ?>
		<div class="form_login">
			<span class="tiga" style="background:#222222;">
				<?php
				include '../config.php';
				if (isset($_GET['no_resi'])) {
					$no_resi = $_GET['no_resi'];
					echo "
							<h3 style='color:#f1f1f1; font-weight:600; margin-bottom:20px; font-size:20px; text-transform:uppercase; text-align:center;'>
								Hasil Tracking Resi : " . $no_resi . "
							</h3>
						";
				}
				?>
				<?php
				include '../config.php';
				if (isset($_GET['no_resi'])) {
					$no_resi = $_GET['no_resi'];
					$data = mysqli_query($koneksi, "select * from db_tracking_resi where no_resi like '%" . $no_resi . "%'");
				} else {
					$data = mysqli_query($koneksi, "select * from db_tracking_resi");
				}
				$d = mysqli_fetch_array($data);
				$rowcount = mysqli_num_rows($data);
				?>
				<div class="card-body" style="color: #f1f1f1;">
					<?php if ($rowcount > 0) : ?>
						<h5 class="card-title"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo $d['nama']; ?></h5>
						<h5 class="card-title"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?php echo date('d-m-Y', strtotime($d['tanggal'])); ?> | <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('H:i:s', strtotime($d['tanggal'])); ?> WIB</h5>
						<div class="vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
							<div class="vertical-timeline-item vertical-timeline-element">
								<div>
									<span class="vertical-timeline-element-icon bounce-in">
										<i class="badge badge-dot badge-dot-xl badge-success"></i>
									</span>
									<div class="vertical-timeline-element-content bounce-in">
										<h4 class="timeline-title">Status</h4>
										<p><?php echo $d['status']; ?>
										</p>
										<h4 class="vertical-timeline-element-date">Keterangan</h4>
										<p><?php echo $d['keterangan']; ?>
										</p>
									</div>
								</div>
							</div>
							<hr>
						</div>
					<?php else : ?>
						<div class="row text-center">
							<div class="col-lg-12 col-md-12 col-sm-12">
								<figure>
									<img class="img-fluid" src="../.core/.assets/.img/empty-tracking.png">
									<figcaption>
										Belum ada status terbaru, silahkan check secara berkala untuk pembaruan
									</figcaption>
								</figure>
							</div>
						</div>
					<?php endif ?>
					<a href="../tracking" class="btn btn btn_login password" style="text-transform:uppercase; font-weight:600; font-size:10px; margin:20px 0px 0px 0px; width:140px;">
						<i class="fa fa-backward" style="margin-right:5px;"></i> Cek Resi
					</a>
				</div>

			</span>
		</div>
		</div>

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