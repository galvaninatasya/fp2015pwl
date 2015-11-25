<?php
$host='localhost';
$usr='root';
$pwd='';
$db='apotek';
$con = mysql_connect($host,$usr,$pwd);
mysql_select_db($db,$con);
$copy="Copyright ".date("Y")." &copy; galvani";
?>