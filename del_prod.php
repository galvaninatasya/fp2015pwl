<?php
 
$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {		
	$id =$_REQUEST['id_produk'];
	
	
	// sending query
	mysql_query("DELETE FROM products WHERE id_produk = '$id'")
	or die(mysql_error());  	
	
	header("Location: product.php");
	
mysql_close($connect_db);
 
} else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>