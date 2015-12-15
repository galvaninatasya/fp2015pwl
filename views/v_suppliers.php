<p> Tabel berikut merupakan list supplier yang telah bekerjasama dengan Galvicenna Pharmacy </p>                           

						   <table class='table table-striped'>
                            	<tr>
                                	<th>NO</th>
									<th>ID SUPPLIER</th>
                                    <th>NAME</th>
									<th>EMAIL</th>
									<th>Phone Number</th>
                                    <th>ADDRESS</th>
									<th>CITY/DISTRICT</th>
                                    <th>PROVINCE</th>
									<th>REG. DATE</th>
									<th>ACTION</th>
                                </tr>								
<?php

$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {						$no=1;
									
									$query = "select * from suppliers order by id_supplier";
									$hasil = mysql_query($query);
									
									while($tampilkan = mysql_fetch_array($hasil))
									
									{			
										$id = $tampilkan['id_supplier'];
												echo"<tr>
												<td>$no</td>
												<td>$tampilkan[id_supplier]</td>
												<td>$tampilkan[nama_supplier]</td>
												<td>$tampilkan[email]</td>
												<td>$tampilkan[no_hp]</td>
												<td>$tampilkan[alamat]</td>
												<td>$tampilkan[kota]</td>
												<td>$tampilkan[provinsi]</td>
												<td>$tampilkan[tanggal_daftar]
												<td><a href='edit_supplier.php?id_supplier=$id'>
													<span class='label label-success'>Edit</a>
													<a href='del_supplier.php?id_supplier=$id'>
													<span class='label label-danger'>Del</span><a>
												</td>
                	                        </tr>";
									
											$no++;
									}
mysql_close($connect_db);
 
} else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>
                            </table>