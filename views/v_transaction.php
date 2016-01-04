
						   <table class='table table-striped'>
                            	<tr>
                                
									<th>NO FAKTUR</th>
									<th>NAMA PELANGGAN</th>
                                    <th>ORDER DATE</th>
									<th>PRODUCT</th>
									<th>JUMLAH BELI</th>
                                    <th>PRICE (IDR)</th>
									
									
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
									
								
									
									$query = "select * from transactions t join customers c on t.username = c.username join products p on t.id_produk=p.id_produk order by no_faktur limit $posisi,$batas";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{$id = $tampilkan['no_faktur'];
								        echo"<tr>
												
												<td>$tampilkan[no_faktur]</td>
												<td>$tampilkan[nama_pelanggan]</td>
												<td>$tampilkan[tgl]</td>
												<td>$tampilkan[nama_produk]</td>
												<td>$tampilkan[jlh]</td>
												<td>$tampilkan[harga]</td>
												
                	                        </tr>";
									
									}
									
									$tampil2 = mysql_query("SELECT * FROM transactions");
								$jmldata = mysql_num_rows($tampil2);
								$jmlhal  = ceil($jmldata/$batas);
								echo "<div class=paging>";
									if ($halaman > 1)
									{
										$prev = $halaman - 1;
										echo"<span class=prevnext><a href=$_SERVER[PHP_SELF]?produk&halaman=$prev>« Prev</a></span>";
									}
									else
									{ 
										echo "<span class=disabled>« Prev</span> ";
									}
									
									for($i=1;$i<=$jmlhal;$i++)
									if ($i != $halaman){
										echo " <a href=$_SERVER[PHP_SELF]?produk&halaman=$i>$i</a> ";
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
                        
                        
                       