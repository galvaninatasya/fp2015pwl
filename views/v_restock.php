<p>Student Payment</p>
<p> Tabel berikut merupakan list supplier yang telah bekerjasama dengan Galvicenna Pharmacy </p>                           




						   <table width="1024" id="list">
                            	<tr>
                                	<th>NO</th>
									<th>ID RESTOCK</th>
									<th>ID SUPPLIER</th>
                                    <th>ORDER STATUS</th>
									<th>ORDER DATE</th>
                                    <th>TOTAL</th>
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
									$batas = 10;
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
									$query = "select * from restock order by tgl_order limit $posisi,$batas";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								        echo"<tr>
												<td>$no</td>
												<td>$tampilkan[id_restock]</td>
												<td>$tampilkan[id_supplier]</td>
												<td>$tampilkan[status_order]</td>
												<td>$tampilkan[tgl_order]</td>
												<td>$tampilkan[jumlah]</td>
												<td><a href='?modul=edit_supplier&id=$tampilkan[id_supplier]'>Edit</a> |
													<a href='proses.php?modul=hapus_supplier&id=$tampilkan[id_supplier]'>Hapus<a>
												</td>
                	                        </tr>";
									$no++;
									}
									$tampil2 = mysql_query("SELECT * FROM restock");
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
 
}else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>
								
                            </table>
                        
                        
                       