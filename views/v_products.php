<p> Tabel berikut merupakan list supplier yang telah bekerjasama dengan Galvicenna Pharmacy </p>                           




 <table width="1024" id="list">
                    	<tr>
                        	<th>No</th>
                        	<th>Id Produk</th>
                            <th>Nama Produk</th>
                        	<th>Harga</th>
                            <th>Gambar</th>
                            <th>Jumlah Produk</th>
                        	<th>Tanggal</th>
                            <th>Aksi</th>
                        </tr>
								
<?php
							$batas = 5;
									$halaman = $_GET['halaman'];
									if (empty ($halaman))
									{
										$posisi = 0;
										$halaman = 1;
									}
									else
									{
										$posisi = ($halaman - 1 ) * $batas;
									}
									$no = $posisi+1;
							
							
$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {
									
									$query = "select * from produk";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								       if ($no%2 == 1)
								{
									$baris = "baris1";
								}
								else 
								{
									$baris = "baris2";
								}
								echo"<tr class='$baris'>
										<td>$no</td>
										<td>$baca[id_produk]</td>
										<td>$baca[nama_produk]</td>
										<td>$baca[harga]</td>
										<td><img src='romaninda-image/foto_produk/resize_small_$baca[gambar]' width='100'/></td>
										<td>$baca[jlh_produk]</td>
										<td>$baca[tgl]</td>
										<td><a href='index.php?modul=keranjang&action=add&id=$baca[id_produk]'>Beli</a></td>
									</tr>
								";
								$no++; 
									}
								$tampil2 = mysql_fetch_array($hasil);
								$jmldata = mysql_num_rows($tampil2);
								$jmlhal  = ceil($jmldata/$batas);
					
                    </table>
                    <?php
						echo "<div class=paging>";
									if ($halaman > 1)
									{
										$prev = $halaman - 1;
										echo"<span class=prevnext><a href=$_SERVER[PHP_SELF]?modul=list_produk&halaman=$prev>« Prev</a></span>";
									}
									else
									{ 
										echo "<span class=disabled>« Prev</span> ";
									}
									
									for($i=1;$i<=$jmlhal;$i++)
									if ($i != $halaman){
										echo " <a href=$_SERVER[PHP_SELF]?modul=list_produk&halaman=$i>$i</a> ";
									}
									else{
										echo " <span class=current>$i</span> ";
									}
									
									if($halaman < $jmlhal){
										$next=$halaman+1;
										echo "<span class=prevnext><a href=$_SERVER[PHP_SELF]?modul=list_produk&halaman=$next>Next »</a></span>";
									}
									else{ 
										echo "<span class=disabled>Next »</span>";
									}
								echo "</div>";
									}
mysql_close($connect_db);
 
}else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>
								
                            </table>
 