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
									$no=1;
									$query = "select * from pelanggan order by username";
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
mysql_close($connect_db);
 
}else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>
								
                            </table>
                        
                        
                       