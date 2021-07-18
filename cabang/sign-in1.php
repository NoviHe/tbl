	<?php include "../assets/scripts/login/head.php";?>
	<div class="sign-in" >
		<!-- login page start-->
	    <div class="container-fluid p-0 border-box">
	      <div class="row m-0">
	        <div class="col-12 p-0">    
	          <div class="login-card">
	            <div>
	              <div><a class="logo" href="#"><img class="img-fluid for-light" src="../assets/images/konten/<?php echo $logo_login['logo_login'];?>" width="20%" alt="looginpage">
	              <div class="login-main"> 
	                <form class="theme-form form_validation" method="post" action="" role="form" novalidate>
	                  <h4>Sign in to account</h4>
	                  <p>Enter your username & password to login</p>
	                  <div class="form-group">
	                    <label class="col-form-label text-left">Username</label>
	                    <input class="form-control" type="text" required="" name="username" placeholder="yourusername">
	                  </div>
	                  <div class="form-group">
	                    <label class="col-form-label text-left">Password</label>
	                    <div class="form-input position-relative">
	                      <input class="form-control" type="password" name="password" required="" placeholder="*********">
	                      <div class="show-hide"><span class="show">                         </span></div>
	                    </div>
	                    <div class="invalid-feedback">
							Password <?php echo $feedback;?>
						</div>
	                  </div>
	                  <div class="form-group mb-0">
	                    <div class="checkbox p-0">
	                      <input id="checkbox1" type="checkbox">
	                      <label class="text-muted" for="checkbox1">Remember password</label>
	                    </div><a class="link" id="recover_password" onclick="myFunction()">Recover password?</a>
	                    <div class="text-end mt-3">
	                      <button class="btn btn-primary btn-block w-100" >Sign in</button>
	                    </div>
	                  <!-- <p class="mt-4 mb-0 text-center">Don't have account?<a class="ms-2" href="sign-up.html">Create Account</a></p> -->
	                </form>
	              </div>
	            </div>
	          </div>
	        </div>
	      </div>

	      <!-- latest jquery-->
	      <script src="../cuba/js/jquery-3.5.1.min.js"></script>
	      <!-- Bootstrap js-->
	      <script src="../cuba/js/bootstrap/bootstrap.bundle.min.js"></script>
	      <!-- feather icon js-->
	      <script src="../cuba/js/icons/feather-icon/feather.min.js"></script>
	      <script src="../cuba/js/icons/feather-icon/feather-icon.js"></script>
	      <!-- scrollbar js-->
	      <!-- Sidebar jquery-->
	      <script src="../cuba/js/config.js"></script>
	      <!-- Plugins JS start-->
	      <!-- Plugins JS Ends-->
	      <!-- Theme js-->
	      <script src="../cuba/js/script.js"></script>
	      <!-- login js-->
	      <!-- Plugin used-->
	      
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
				$sqlLogin = mysqli_query($koneksi, "SELECT * FROM db_usermanager WHERE username='$user' AND password='$pass' AND tipe_akun='agen'");
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
	  document.getElementById("recover_password").innerHTML = "<div class='notifikasi'><i class='pe-7s-bell'></i> Silahkan Hubungi Admin!</div>";
	  window.setTimeout(function() {
			$("#recover_password").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
			});
		}, 10000);
	}
	</script>
	<?php include "../assets/scripts/login/footer.php";?>