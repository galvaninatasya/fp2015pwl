
      	<h4> Form Tambah Supplier</h4>
           	<form action="proses.php" method="post">
                <table>                                	
                  <tr>
                 	<td><p>Nama		</p></td>
                  	<td><input type="text" name="nama" /></td>
                  </tr>
                  <tr>
                   	<td><p>Password		</p></td>
                   	<td><input type="text" name="pass" /></td>
                  </tr>
                  <tr>
                   	<td><p>Email</p></td>
                   	<td><input type="text" name="email" /></td>
                    </tr>
                  <tr>
                   	<td><p>Kota</p></td>
					<td><input type="text" name="kota" /></td>
                  </tr>
                  <tr>
                   	<td><p>Provinsi</p></td>
                   	<td><input type="text" name="provinsi" /></td>
                  </tr>
					<?php 
						date_default_timezone_set("Asia/Jakarta");
						$tgl = date("Y-m-d H:i:s");
					?>
                  <tr>
                   	<td><p>Tanggal Daftar</p></td>
                   	<td><input type="text" value="<?php echo"$tgl";?>" disabled="disabled"/></td>
                  </tr>
                  <tr>
					<td><p>No Handphone</p></td>
					<td><input type="text" name="nohp" /></td>
                  </tr>
                  <tr>
                   	<td valign="top"><p>Alamat</p></td>
                   	<td><textarea name="alamat" style="width:150px; height:50px;"></textarea></td>
                  </tr>
                  <tr>
					<td colspan="2"><input type="submit" name="tambah_supplier" class="button" value="Tambah"/></td>
                  </tr>
                </table>
            </form>
                            
