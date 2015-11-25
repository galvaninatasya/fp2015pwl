
            <div id="menu">
           		<ul id="main_menu">
                	<li><a href="index.php">Home</a></li>
                	<li><a href="?modul=login">Login</a></li>
                    <li><a href="?modul=produk">Produk</a></li>
                    <?php
					if(isset($_SESSION['user_name']))
					{
						echo '<li><a href="logout2.php">LOG OUT</a></li>';
					}else{
                    	echo '<li><a href="?modul=loginpelanggan">Login Pelanggan</a></li>';
					}
					?>
                </ul>
           
            </div>
           	<div class="clean">
            </div>
            