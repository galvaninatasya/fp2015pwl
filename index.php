<?php
session_start();
	include "config.php";
	include "include/fungsi_rupiah.php";
	include "include/library.php";
	include "header.php";
?>
	<div id="content">
    	<?php
		if(isset($_REQUEST['modul']))
		{
			
			if ($_REQUEST['modul'] == 'login')
			{
				include "login.php";
			}
			elseif ($_REQUEST['modul'] == 'menu')
			{
				include "menu.php";
			}
			elseif ($_REQUEST['modul'] == 'loginpelanggan')
			{
				include "login2.php";
			}
			else
			{
				include "home.php";
			}
		}else{
				include "home.php";
		}
			
		?>
    </div>
