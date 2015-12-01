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
									$no=1;
									$query = "select * from restock";
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
mysql_close($connect_db);
 
}else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>
								
                            </table>
                        
                        
                       