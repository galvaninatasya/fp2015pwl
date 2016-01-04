<?php

require_once('lib/view.php');
require_once('models/m_transaction.php');
require_once('models/m_customer.php');
require_once('models/m_product.php');

$transactions = new Transactions();
$pel = new Customers();
$prod = new Products();

$data['title'] = "Form Tambah Transaksi Baru";
$data['page'] = "tambah/v_tambahtran.php";


if(!empty($_POST)){

	$no_faktur    = $_POST['no_faktur'];
	$input_pel   = $_POST['input_pel'];
	$tgl = $_POST['tgl'];
	$input_prod  = $_POST['input_prod'];
	$input_jlh = $_POST['input_jlh'];
	$harga=$_POST['harga'];
	$total    = $_POST['total'];
	

	$transactions->createTransactions($no_faktur, $input_pel, $tgl, $input_prod, $input_jlh, $total);
	$success = "Data Berhasil di Tambahkan";
	
	header('Location:transaction.php');


$data['pel'] = $pel->readAllCustomers();
$data['prod'] = $prod->readAllProducts();
$jumlah_beli = $_POST['$input_jlh'];
$hargab = $_POST['$harga'];
$total= $hargab * $jumlah_beli;
}


require_once View::getView('dashboard.php', $data);