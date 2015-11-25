  			<?php
				include "menu.php";
			?>
            <div id="isi_content">
            	<p>
                	<h3>- Form Login -</h3>
                	<div id="login">
                    	<form action="proses_login.php" method="post" >
                        	<table id="form_login">
                            	<tr>
                                	<td>Username</td>
                                    <td><input type="text" name="username" /></td>
                                </tr>
                                <tr>
                                	<td>Level</td>
                                    <td><select name="level">
                                    		<option value=""></option>
                                            <option value="1">Admin</option>
											<option value="2">Supplier</option>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                	<td>Password</td>
                                    <td><input type="password" name="pass"/></td>
                                </tr>
                                <tr>
									
                                	<td colspan="2" ><input name="Button" type="submit"  class="Button" value="Login"/></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </p>
            </div>