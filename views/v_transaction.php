<?php
	require_once 'lib/DBClass.php';
	$db = new DBClass();
?>

<p>Detail of Transactions</p>

<p>Student Payment</p>
<p> Tabel berikut merupakan list supplier yang telah bekerjasama dengan Galvicenna Pharmacy </p>                           




						   <table class='table table-striped'>
                            	<tr>
                                	<th>NO</th>
									<th>NO FAKTUR</th>
									<th>NAMA PELANGGAN</th>
                                    <th>ORDER DATE</th>
									<th>PRODUK</th>
                                    <th>HARGA SATUAN</th>
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
									$query = "select * from transactions t join customers c on t.username = c.username order by no_faktur limit $posisi,$batas";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								        echo"<tr>
												<td>$no</td>
												<td>$tampilkan[no_faktur]</td>
												<td>$tampilkan[nama_pelanggan]</td>
												<td>$tampilkan[tgl]</td>
												<td>$tampilkan[id_produk]</td>
												<td>$tampilkan[harga_satuan]</td>
												<td>$tampilkan[total]</td>
												<td><a href='edit_tran.php?no=<?php echo $tampilkan[no_faktur]?>'>Edit</a> |
													<a href='del_tran.php?no=<?php echo $tampilkan[no_faktur]?>'>Del<a>
												</td>
                	                        </tr>";
									$no++;
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
                        
                        
                       