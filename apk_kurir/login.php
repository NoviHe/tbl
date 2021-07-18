<?php
ob_start();
session_start();
if (!isset($_SESSION['login'])) {
    header('location:../login/kurir');
}
include "../config.php";
include ".core/query.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user    = $koneksi->real_escape_string($_POST['username']);
    $pass    = $koneksi->real_escape_string($_POST['password']);

    if ($user == '' || $pass == '') {
        //Silent
    } else {
        include "../config.php";
        $pass = md5($pass . $salt);
        $sqlLogin = mysqli_query($koneksi, "SELECT * FROM db_usermanager WHERE username='$user' AND password='$pass' AND tipe_akun='kurir'");
        $jml = mysqli_num_rows($sqlLogin);
        $d = mysqli_fetch_array($sqlLogin);
        var_dump($jml);
        if ($jml > 0) {
            session_start();
            $_SESSION['login']                = TRUE;
            $_SESSION['id']                    = $d['id'];
            $_SESSION['username']            = $d['username'];
            $_SESSION['username_agen']        = $d['username_agen'];
            $_SESSION['kota']                = $d['kota'];
            $_SESSION['nama']                = $d['nama'];

            header('location: ../apk_kurir');
        } else {
?>
            <div class="" id="alert" role="alert" data-backdrop="static" data-keyboard="false">
                <?php
                echo "
							<div class='modal-dialog alert_konten'>
								<div class='modal-content'>
									<div class='modal-body alert'>
										<a href='' class='modal_close' data-dismiss='modal' aria-label='close'>
											<i class='fa fa-times'></i>
										</a>
										<h4>
											<i class='icon fa fa-warning'></i> 
											Login Salah
										</h4>
										<p>
											Mohon maaf username atau password yang Anda inputkan <strong>SALAH</strong>. Silahkan ulangi dengan inputan data yang benar!
										</p>
									</div>
								</div>
							</div>
						";
                ?>
            </div>
<?php
        }
    }
}
?>