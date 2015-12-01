<p> Tabel berikut merupakan daftar pelanggan di Galvicenna Pharmacy </p>                           


						   <table id="list">
                            	<tr>
                                	<th>NO</th>
									<th>USERNAME</th>
                                    <th>NAME</th>
									<th>ADDRESS</th>
									<th>PHONE NUMBER</th>
                                    <th>TELP. NUMBER</th>
									<th>PASSWORD</th>
                                    
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
									$query = "select * from pelanggan order by username limit $posisi,$batas";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								        echo"<tr>
												<td>$no</td>
												<td>$tampilkan[username]</td>
												<td>$tampilkan[nama_pelanggan]</td>
												<td>$tampilkan[alamat]</td>
												<td>$tampilkan[no_handphone]</td>
												<td>$tampilkan[no_telp]</td>
												<td>$tampilkan[pwd_pelanggan]</td>
												
                	                        </tr>";
											$no++;
											}
								$tampil2 = mysql_query("SELECT * FROM pelanggan");
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
                        
                        
                       