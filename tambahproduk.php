<?php

require_once('lib/view.php');
require_once('models/m_product.php');

$products = new products();

$data['title'] = "Form Tambah produk Baru";
$data['page'] = "tambah/v_tambahproduk.php";


if(!empty($_POST)){

	$id_prod    = $_POST['id_prod'];
	$nama_prod   = $_POST['nama'];
	$harga_prod  = $_POST['harga'];
	$gambar_prod  = $_POST['image_upload'];
	$stock = $_POST['jlh'];
	$komp    = $_POST['comp'];
	$indi   = $_POST['indi'];
	$sup = $_POST['supplier'];
	

	$products->createProducts($id_prod,$nama_prod,$harga_prod,$gambar_prod,$stock,$komp,$indi,$sup);
	$success = "Data Berhasil di Tambahkan";
	
	header('Location:product.php');
	
$tampilkan['sup'] = "Select * from Suppliers order by id_supplier";
}


require_once View::getView('dashboard.php', $data);