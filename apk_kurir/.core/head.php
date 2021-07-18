<?php
	ob_start();
	session_start();
	if(!isset($_SESSION['login'])){
		header('location:../login/kurir');
	}
	include "../config.php";
	include ".core/query.php";
?>

<?php
	$data = mysqli_query($koneksi,"select * from data_website");
	while($d = mysqli_fetch_array($data)){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $d['tagline'];?></title>
	<link rel="icon" href="../.core/.assets/.img/<?php echo $d['favicon'];?>">	
	
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/css/dashboard.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/css/cetak_resi.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/css/cetak_laporan.css">
	
	<link rel="stylesheet" href="../.core/.assets/.dashboard/css/style.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/Ionicons/css/ionicons.min.css">	
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/dist/css/skins/_all-skins.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/morris.js/morris.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/jvectormap/jquery-jvectormap.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/bootstrap-daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
	<link rel="stylesheet" href="../.core/.assets/.dashboard/bower_components/select2/dist/css/select2.min.css">	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	
	<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script>
	$(document).ready(function(){
		$("#myInput_berat_kiriman").on("input", function(){
			$("#result_berat_kiriman").text($(this).val());
		});
	});
	</script>
	<style>
		.sidebar-toggle:before {
			display:none;
		}
		a.sidebar-toggle {
			font-size: 12.5px!important;
			line-height: 1.42857143;
			color: #000!important;
			font-family:'Source Sans Pro','Helvetica Neue',Helvetica,Arial,sans-serif!important;
			font-weight:600;
			text-shadow: 0 0 0.7px #6777ef;
			margin-top:2px;
		}
		.skin-blue .main-header .navbar .nav>li>a.logout{
			pointer-events: none; 
			cursor: auto; 
			color:#000;
			margin-top:0.5px;
		}
	</style>
</head>
<body class="hold-transition skin-blue sidebar-mini fixed">
	<div class="wrapper">
		<header class="main-header">
			<a href="index" class="logo">
				<span class="logo-mini">
					<strong>
						<?php echo $d['tagline'];?>
					</strong> 
				</span>
				<span class="logo-lg">
					<strong>
						<?php echo $d['nama_website'];?>
					</strong>
				</span>
			</a>
			<nav class="navbar navbar-static-top">
				<a href="page?src=logout" class="sidebar-toggle">
					<i class="fa fa-sign-out"></i> &nbsp;<span>Logout</span>
				</a>
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">			
						<li>
							<a href="index" class="logout">
								<i class="fa fa-user-circle"></i> &nbsp;<?php echo $username;?>
							</a>
						</li>	
					</ul>
				</div>
			</nav>
		</header>
<?php 
}
?>