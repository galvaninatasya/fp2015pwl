<?php

$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {						

$id =$_REQUEST['id_produk'];

$result = mysql_query("SELECT * FROM products WHERE id_produk  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id_prod = $test['id_produk'];
				$nama_prod=$test['nama_produk'] ;
				$harga_prod= $test['harga'] ;					
				$gambar_prod=$test['gambar'] ;
				$jlh_prod=$test['jlh_produk'] ;
				$komp_prod=$test['komposisi'] ;
				$ket_prod= $test['keterangan'] ;	
					
				

if(isset($_POST['save']))
{	
	$idprod_save = $_POST['id_produk'];
	$namaprod_save = $_POST['nama_produk'];
	$hargaprod_save = $_POST['harga'];
	$gambarprod_save = $_POST['gambar'];
	$jlhprod_save = $_POST['jlh_produk'];
	$kompprod_save = $_POST['komposisi'];
	$ketprod_save = $_POST['keterangan'];

	mysql_query("UPDATE customers SET nama_produk '$namaprod_save', 
		 harga ='$hargaprod_save', gambar ='$gambarprod_save', jlh_produk ='$jlhprod_save', 
		 komposisi ='$kompprod_save', keterangan = '$ketprod_save' WHERE id_produk = '$id'")
				or die(mysql_error()); 
	echo "Saved!";
	 
}
mysql_close($connect_db);
 
}
else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body>
<form method="post">
<table class='table table-striped'>
	<tr>
		<td>Id Produk</td>
		<td><input type="text" name="id_produk" value="<?php echo $id_prod ?>"/></td>
	</tr>
	<tr>
		<td>Nama Produk</td>
		<td><input type="text" name="email" value="<?php echo $nama_prod ?>"/></td>
	</tr>
	<tr>
		<td>Gambar</td>
		<td><input type="image" name="gambar" value="<?php echo $gambar_prod ?>"/></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga" value="<?php echo $harga_prod?>"/></td>
	</tr>
	<tr>
		<td>Jumlah Produk</td>
		<td><input type="text" name="jlh_produk" value="<?php echo $jlh_prod ?>"/></td>
	</tr>
	<tr>
		<td>Komposisi</td>
		<td><input type="textarea" name="alamat" value="<?php echo $komp_prod ?>"/></td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><textarea name="keterangan"  value="<?php echo $ket_prod ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>