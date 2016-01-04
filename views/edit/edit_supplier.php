<?php

$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {						

$id =$_REQUEST['id_supplier'];

$result = mysql_query("SELECT * FROM suppliers WHERE id_supplier  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$SuppName=$test['nama_supplier'] ;
				$Email= $test['email'] ;					
				$NoHP=$test['no_hp'] ;
				$SuppAddress=$test['alamat'] ;
				$City=$test['kota'] ;
				$Prov= $test['provinsi'] ;					
				

if(isset($_POST['save']))
{	
	$suppname_save = $_POST['nama_supplier'];
	$email_save = $_POST['email'];
	$nohp_save = $_POST['no_hp'];
	$address_save = $_POST['alamat'];
	$city_save = $_POST['kota'];
	$prov_save = $_POST['provinsi'];

	mysql_query("UPDATE suppliers SET nama_supplier ='$suppname_save', email ='$email_save',
		 no_hp ='$nohp_save', alamat ='$address_save', kota ='$city_save', provinsi ='$prov_save' WHERE id_supplier = '$id'")
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
		<td>Nama</td>
		<td><input type="text" name="nama_supplier" value="<?php echo $SuppName ?>"/></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?php echo $Email ?>"/></td>
	</tr>
	<tr>
		<td>No Handphone</td>
		<td><input type="text" name="no_hp" value="<?php echo $NoHP ?>"/></td>
	</tr>
	<tr>
		<td>Alamat </td>
		<td><input type="text" name="alamat" value="<?php echo $SuppAddress ?>"/></td>
	</tr>
	<tr>
		<td>Kota </td>
		<td><input type="text" name="kota" value="<?php echo $City ?>"/></td>
	</tr>
	<tr>
		<td>Provinsi </td>
		<td><input type="text" name="provinsi" value="<?php echo $Prov ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>

</body>
</html>