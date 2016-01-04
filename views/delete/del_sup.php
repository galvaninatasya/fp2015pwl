<?php

require_once 'DBClass.php';
$db = new DBClass();

$id = $_GET['id_supplier'];
$query = "delete from supplier where id_supplier=$id";

$db->putRows($query);

header('location:nat.php');

?>