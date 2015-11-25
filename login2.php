  			<?php
				include "menu.php";
			?>
            <div id="isi_content">
            	<p>
                	<h3>- Form Login Pelanggan -</h3>
                	<div id="login">
                    	<form action="proses_login2.php" method="post" >
                        	<table id="form_login">
                            	<tr>
                                	<td>Username</td>
                                    <td><input type="text" name="username" /></td>
                                </tr>
                                <tr>
                                	<td>Password</td>
                                    <td><input type="password" name="pass"/></td>
                                </tr>
                                <tr>
									
                                	<td colspan="2" ><input name="Button" type="submit"  class="Button" value="Login"/>
                               	    <br></br>
									<br> belum ada akun? <a href="index.php?modul=daftar">Sign Up</a></br></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </p>
            </div>