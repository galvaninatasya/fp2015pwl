<?php

 
$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cetak Laporan order</title>
<style type="text/javascript">

</style>
<link href="asssets/css/style.css" rel="stylesheet" type="text/css" />
</head>
<center><img src="assets/image/homeassets/galvicenna_pharmacy.png" width="400"/></center>      

					
<body onload="print() ">
            <div id="wrapper">
            	<p>
<center><h2>Daftar Pembelian Pelanggan </h2>
        
           <table border = "2">
		   <tr>
           <th colspan="7" align="center"></th>
			</tr>
           	<tr>
               	<th>Tanggal</th>
				<th>No Faktur</th>
				<th>Nama Pelanggan</td>
               	<th>Id Produk</th>
                <th>Nama Produk</th>
               	<th>Harga</th>
                <th>Jumlah Beli</th>
            </tr>
          <?php
	  error_reporting(E_ALL^E_NOTICE);
		 
		$query = "select * from transactions t join products p on t.id_produk = p.id_produk join customers c on t.username = c.username  order by no_faktur";
		$hasil = mysql_query($query);
		while($tampilkan = mysql_fetch_array($hasil)){ 
								echo"<tr>
										<td>$tampilkan[tgl]</td>
										<td>$tampilkan[no_faktur]</td>
										<td>$tampilkan[nama_pelanggan]</td>
										<td>$tampilkan[id_produk]</td>
										<td>$tampilkan[nama_produk]</td>
										<td>$tampilkan[harga]</td>
										<td>$tampilkan[jlh]</td>
										
										";
										
									echo '
									</tr>';
								
								
							}
				?>
    </table>
                     <table id="list_produk" width="500px" align='center'>
                     	<tr>
                     	  <td align="justify">
                          <?php
						  $sql="SELECT sum(t.jlh*p.harga) as tt
FROM (transactions t JOIN products p ON t.id_produk = p.id_produk) JOIN customers c ON t.username = t.username";
$result2 = mysql_query($sql) or die ('Error: '.mysql_error ());
	 $row2 = mysql_fetch_array($result2);
		 echo "<h3>Total ".$row2['tt']."</h3>";
	 
						  ?>
                           </td>
                   	  </tr>
                     	<tr>
                        	<td align="justify"> Laporan transaksi <strong> GALVICENNA PHARMACY</strong>. Berdasarkan laporan ini, jumlah total transaksi yang telah tercatat adalah sebanyak <strong> Rp <?php echo $row2['tt']; ?></strong>. 
								Demikian laporan ini dibuat dan sebagai bahan laporan pertanggungjawaban, hasil laporan yang tertera diharapkan dapat dimanfaatkan dan dipertanggungjawabkan. <i>Admin</i> &nbsp; &nbsp;
                            </td>
                        </tr>
                     </table>
      <?php
echo" <br><br><center> <p>Tertanda</p> <br><br><br> Admin </br></br></br> </center> ";
?>
					
                </p>
                </div>
                
</body>
</html>