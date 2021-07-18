	<?php include "../assets/scripts/login/head.php";?>
	<div class="sign-in" >
		<div class="border-box">
			<img class="logo"onerror="src='../assets/images/foto/.placeholder.png'" src="../assets/images/konten/<?php echo $logo_login['logo_login'];?>">
			<h4>Login Admin</h4>
			<form class="form_validation" method="post" action="" role="form" novalidate>
				<div class="form-row">
					<span class="label_top">
						Username
					</span>
					<input type="email" class="form-control" name="username" placeholder="" required>
					<div class="invalid-feedback">
						Username Tidak Valid!
					</div>
				</div>
				<div class="form-row">
					<span class="label_top">
						Password
					</span>
					<input type="password" class="form-control password" name="password" id="pass" placeholder="" required>
					<span id="pass_button" onclick="change()"><i class="fa fa-eye-slash"></i></span>
					<div class="invalid-feedback">
						Password <?php echo $feedback;?>
					</div>
				</div>
				<div class="modal-footer clearfix">
					<div class="float-left"><a onclick="myFunction()" class="btn-lg btn btn-link">Recover Password</a></div>
					<div class="float-right">
						<button class="btn btn-lg btn-login">Login Admin</button>
					</div>
				</div>
			</form>
			<script type="text/javascript">
				 function change()
				 {
					var x = document.getElementById('pass').type;
		 
					if (x == 'password')
					{
					   document.getElementById('pass').type = 'text';
					   document.getElementById('pass_button').innerHTML = '<i class="fa fa-eye"></i>';
					}
					else
					{
					   document.getElementById('pass').type = 'password';
					   document.getElementById('pass_button').innerHTML = '<i class="fa fa-eye-slash"></i>';
					}
				 }
			</script>
		</div>
	</div>
	<?php 
		if($_SERVER['REQUEST_METHOD']=='POST'){
			$user	=$koneksi->real_escape_string($_POST['username']);
			$pass	=$koneksi->real_escape_string($_POST['password']);
			if($user=='' || $pass==''){
				//Silent
			}else{
				$pass=md5($pass.$salt);
				$sqlLogin = mysqli_query($koneksi, "SELECT * FROM db_usermanager WHERE username='$user' AND password='$pass' AND tipe_akun='admin'");
				$jml=mysqli_num_rows($sqlLogin);
				$d=mysqli_fetch_array($sqlLogin);
				if($jml > 0){
					session_start();
					$_SESSION['sign-in']		= TRUE;
					$_SESSION['username']		= $d['username'];
				
					header('Location: index'); 
				}else 
				{
					echo "<div class='notifikasi'><i class='pe-7s-bell'></i> Email Atau Kata Sandi Salah!</div>";
				}												
			}
		}
	?>
	<span id="recover_password"></span>

	<script>
	function myFunction() {
	  document.getElementById("recover_password").innerHTML = "<div class='notifikasi'><i class='pe-7s-bell'></i> Silahkan Hubungi Super Admin!</div>";
	  window.setTimeout(function() {
			$("#recover_password").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
			});
		}, 10000);
	}
	</script>
	<div class="copyright" style="color:#b4b4b4;">
		Copyright &copy; <?php echo date("Y"); ?> <?php echo $nama_perusahaan['nama_website'];?>
	</div>
	<?php include "../assets/scripts/login/footer.php";?>