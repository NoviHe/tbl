	<nav class="navbar navbar-expand-lg mainmenu bgmain-abu w-100">
		<div class="container-fluid bgmain-top container-fluid-top position-absolute"></div>
		<div class="container container-top h-100" style="padding-right:0px;">	
			<?php
				include 'config.php';
				$data = mysqli_query($koneksi,"select * from data_menu_utama where id='1'");
				while($d = mysqli_fetch_array($data)){
			?>
			<a href="/" class="navbar-brand col-logo mobile_logo">
			<?php 
			}
			?>
			<?php
				include 'config.php';
				$data = mysqli_query($koneksi,"select * from data_website");
				while($d = mysqli_fetch_array($data)){
			?>
				<img src=".core/.assets/.img/<?php echo $d['logo_website'];?>" class="menulogo">
			</a>
			<?php 
			}
			?>			
			<button class="custom-toggler navbar-toggler float-right my-4 collapsed" id="nav-icon1" type="button" data-toggle="collapse" data-target="#navbar9" aria-expanded="false">
				<span></span>
				<span></span>
				<span></span>
			</button>
			<div class="navbar-collapse collapse" id="navbar9" style="padding-right:15px;">
				<ul id="dp-mn-menu" class="navbar-nav ml-auto my-3 align-self-center font-montserrat-bold">
					<?php
						include 'config.php';
						$data = mysqli_query($koneksi,"select * from data_menu_utama limit 5");
						while($d = mysqli_fetch_array($data)){
					?>
					<li class="nav-item nav-line my-3 my-lg-auto align-middle">
						<a class="nav-link font-size14 active_link_<?php echo $d['url'];?>" href="page?url=<?php echo $d['url'];?>">
							<?php echo $d['menu'];?>
						</a>
					</li>
					<?php 
					}
					?>
					<?php
						include 'config.php';
						$data = mysqli_query($koneksi,"select * from data_menu_utama where id='6'");
						while($d = mysqli_fetch_array($data)){
					?>
					<li class="nav-item my-3 my-lg-auto align-middle">
						<a class="nav-link" href="page?url=<?php echo $d['url'];?>">
							<button class="btn btn-cs btn-sm font-black font-size14"><?php echo $d['menu'];?></button>
						</a>
					</li>
					<?php 
					}
					?>
				</ul>				
			</div>
		</div>
	</nav>