<?php
 
$user_name = "root";
$password = "";
$database = "apotek";
$host_name = "localhost";
 
$connect_db=mysql_connect($host_name, $user_name, $password);
 
$find_db=mysql_select_db($database);
 
if ($find_db) {		
	$id =$_REQUEST['id_supplier'];
	
	
	// sending query
	mysql_query("DELETE FROM suppliers WHERE id_supplier = '$id'")
	or die(mysql_error());  	
	
	header("Location: suppliers.php");
	
mysql_close($connect_db);
 
} else {
 
  echo "Database Tidak Ada";
 
  mysql_close($connect_db);
 
}
 
?>