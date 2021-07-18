	<?php include ".core/head.php";?>
	<?php include ".core/menu.php";?>
	
	<?php
		$pages_dir = '.core/.pages';
		if(!empty($_GET['src'])){
			$pages = scandir($pages_dir, 0);
			unset($pages[0], $pages[1]);
			
			$p = $_GET['src'];
			if(in_array($p.'.php', $pages)){
				include($pages_dir.'/'.$p.'.php');
			} else {
				echo '				';
			}
		} else {
			include($pages_dir.'/');
		}
	?>	
	
	<?php include ".core/footer.php";?>