<p> Tabel berikut merupakan list produk Galvicenna Pharmacy </p>                           




 <table class='table table-striped'>
                    	<tr>
                        	<th>NO</th>
							<th>ID</th>
                            <th>PRODUCT</th>
                        	<th>PRICE (IDR)</th>
                            <th>IMAGE</th>
                            <th>STOCK</th>
							<th>COMPOSITION</th>
							<th>INDICATION</th>
							<th>ACTION</th>
                        </tr> 

<?php
							
$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {
									$batas = 5;
									$halaman = (isset($_REQUEST['halaman'])&& $_REQUEST['halaman'] !=NULL)?$_REQUEST['halaman']:'';;
									if (empty ($halaman))
									{
										$posisi = 0;
										$halaman = 1;
									}
									else
									{
										$posisi = ($halaman - 1 ) * $batas;
									}
									
								
									$no=$posisi+1;
									$query = "select * from products order by id_produk limit $posisi,$batas";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								$id = $tampilkan['id_produk'];
								echo"<tr>
										<td>$no</td>
										<td>$tampilkan[id_produk]</td>
										<td>$tampilkan[nama_produk]</td>
										<td>$tampilkan[harga]</td>
										<td><img src='assets/image/productassets/$tampilkan[gambar]' width='100'/></td>
										<td>$tampilkan[jlh_produk]</td>
										<td>$tampilkan[komposisi]</td>
										<td>$tampilkan[keterangan]</td>
										<td><a href='edit_product.php?id_produk=$id'>
											<span class='label label-success'>Edit</a>
											<a href='del_prod.php?id_produk=$id'>
											<span class='label label-danger'>Del</a>
										</td>
									</tr>";
									$no++;
									}
								$tampil2 = mysql_query("SELECT * FROM products");
								$jmldata = mysql_num_rows($tampil2);
								$jmlhal  = ceil($jmldata/$batas);
								echo "<div class=paging>";
									if ($halaman > 1)
									{
										$prev = $halaman - 1;
										echo"<span class=prevnext><a href=$_SERVER[PHP_SELF]?modul=produk&halaman=$prev>« Prev</a></span>";
									}
									else
									{ 
										echo "<span class=disabled>« Prev</span> ";
									}
									
									for($i=1;$i<=$jmlhal;$i++)
									if ($i != $halaman){
										echo " <a href=$_SERVER[PHP_SELF]?modul=produk&halaman=$i>$i</a> ";
									}
									else{
										echo " <span class=current>$i</span> ";
									}
									
									if($halaman < $jmlhal){
										$next=$halaman+1;
										echo "<span class=prevnext><a href=$_SERVER[PHP_SELF]?modul=produk&halaman=$next>Next »</a></span>";
									}
									else{ 
										echo "<span class=disabled>Next »</span>";
									}
								echo "</div>";
								
					
mysql_close($connect_db);
 
}
else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>
								
                            </table>