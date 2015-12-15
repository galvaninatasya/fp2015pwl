<?php
 
$hostname = 'localhost'; // server mysql
$username = 'root'; // user mysql
$password = ''; // pasword mysql
$database = 'apotek'; // nama database
try
{
	$dbh = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
 
}
catch(PDOException $e)
{
	echo $e->getMessage();
}
$query = $dbh->query('SELECT MAX(id_supplier) as kodex  FROM  suppliers'); // mengambil nilai kode_barang terbesar
$data = $query->fetch();
$kode = $data['kodex']; // kode_barang dengan angka terbesar
$nourut = substr($kode, 3, 4); // contoh JRD0004, angka 3 adalah awal pengambilan angka, dan 4 jumlah angka yang diambil
$nourut++; 
