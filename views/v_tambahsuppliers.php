
<?php
include 'lib/fungsi.php';
require_once 'lib/DBClass.php';


?>
           	<form>
                <table> 
				  
				  <tr>
                 	<td>Nama Supplier</td>
                  	<td><input type="text" name="nama" style="width:200px;"/></td>
                  </tr>
                  <tr>
                   	<td>Password</td>
                   	<td><input type="text" name="pass" style="width:200px;" /></td>
                  </tr>
                  <tr>
                   	<td>Email</td>
                   	<td><input type="text" name="email" style="width:200px;" /></td>
                    </tr>
                  <tr>
                   	<td>Kota</td>
					<td><input type="text" name="kota" style="width:200px;"/></td>
                  </tr>
                  <tr>
                   	<td>Provinsi</td>
                   	<td><input type="text" name="provinsi" style="width:200px;" /></td>
                  </tr>
					<?php 
						date_default_timezone_set("Asia/Jakarta");
						$tgl = date("Y-m-d H:i:s");
					?>
                  <tr>
                   	<td>Tanggal Daftar   </td>
                   	<td><input type="text" value="<?php echo"$tgl";?>" disabled="disabled" style="width:200px;"/></td>
                  </tr>
                  <tr>
					<td>No Handphone   </td>
					<td><input type="text" name="nohp" style="width:200px;" /></td>
                  </tr>
                  <tr>
                   	<td>Alamat</td>
                   	<td><textarea name="alamat" style="width:200px; height:100px;"></textarea></td>
                  </tr>
                  <tr>
					<td colspan="2"><input type="submit" name="tambah_supplier" class="button" value="Tambah"/></td>
                  </tr>
                </table>
            </form>
                            
