<?php

$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {						

$id =$_REQUEST['id_produk'];

$result = mysql_query("SELECT * FROM products p join suppliers s on p.id_supplier=s.id_supplier WHERE id_produk  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id_prod= $test['id_produk'];
				$nama_prod=$test['nama_produk'] ;
				$harga_prod= $test['harga'] ;					
				$jlh_prod=$test['jlh_produk'] ;
				$komp_prod=$test['komposisi'] ;
				$ket_prod= $test['keterangan'] ;	
				$gambar_prod=$test['gambar'] ;
				$sup_prod= $test['nama_supplier'] ;
					

if(isset($_POST['save']))
{	
	$idprod_save = $_POST['id_produp'];
	$namaprod_save = $_POST['nama_produp'];
	$hargaprod_save = $_POST['harga_produp'];
	$jlhprod_save = $_POST['jlh_produp'];
	$kompprod_save = $_POST['komposisi_produp'];
	$ketprod_save = $_POST['keterangan_produp'];
	$gamprod_save = $_POST['gambar_produp'];
	$supprod_save = $_POST['sup_produp'];
	

	mysql_query("UPDATE products SET nama_produk='$namaprod_save', 
		 harga ='$hargaprod_save', jlh_produk ='$jlhprod_save', gambar  ='$gamprod_save',
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
		<td><input type="text" name="id_produp" value="<?php echo $id_prod ?>"style="width:50px;" readonly ="readonly"/></td>
	</tr>
	<tr>
		<td>Nama Produk</td>
		<td><input type="text" name="nama_produp" value="<?php echo $nama_prod ?>"style="width:500px;"/></td>
	</tr>
	<tr>
		<td>Gambar Produk</td>
		<td><input type="text" name="gambar_produp" value="<?php echo $gambar_prod ?>" style="width:500px;"readonly ="readonly"/></td>
	</tr>
	<tr>
		<td>Harga</td>
		<td><input type="text" name="harga_produp" value="<?php echo $harga_prod?>"style="width:500px;"/></td>
	</tr>
	<tr>
		<td>Jumlah Produk</td>
		<td><input type="text" name="jlh_produp" value="<?php echo $jlh_prod ?>" style="width:500px;"/></td>
	</tr>
	<tr>
		<td>Komposisi</td>
		<td><input type="textarea" name="komposisi_produp" value="<?php echo $komp_prod ?>" style="width:500px;"/> </td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><input type="textarea" name="keterangan_produp"  value="<?php echo $ket_prod ?>" style="width:500px;"/></td>
	</tr>
	<tr>
		<td>Supplier Produk</td>
		<td><input type="text" name="sup_produp" value="<?php echo $sup_prod ?>" style="width:500px;" readonly ="readonly"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="ADD"/></td>									
	</tr>
</table>

</body>
</html>