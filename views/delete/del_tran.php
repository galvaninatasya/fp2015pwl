<?php
	require_once 'lib/DBClass.php';
	
 $no = $_GET['no_faktur']; //get the no which will deleted
 
//query for update data in database
 $query = "DELETE from transaction WHERE no = '$no_faktur'" ;
 $hasil = mysql_query($query);
 //see the result
 if ($hasil) {
    include "dashboard.php";
	echo "<h4> delete data success </h4>";
}
?>