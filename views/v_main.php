<marquee><p> Hi Mimin, Welcome to Galvicenna Pharmacy </p></marquee>

<br>Silahkan lakukan proses CRUD data Anda
<br>Semangkaaaaa!!!!!!!!! 



<p> Tabel berikut merupakan list admin Galvicenna Pharmacy </p>                           




						   <table id="list">
                            	<tr>
                                	<th>NO</th>
									<th>USERNAME</th>
                                    <th>ADMIN NAME</th>
									<th>EMAIL</th>
									
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
									$query = "select * from admin order by username";
									$hasil = mysql_query($query);
									while($tampilkan = mysql_fetch_array($hasil))
									{
								        echo"<tr>
												<td>$no</td>
												<td>$tampilkan[username]</td>
												<td>$tampilkan[nama_lengkap]</td>
												<td>$tampilkan[email]</td>
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
                        
                        
                       