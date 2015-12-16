<?php

require_once('lib/view.php');
require_once('models/m_customer.php');

$Customers = new Customers();

$data['title'] = "Form Tambah Pelanggan Baru";
$data['page'] = "tambah/v_tambahConsumer.php";


if(!empty($_POST)){

	$uname    = $_POST['uname_pel'];
	$nama_pelanggan   = $_POST['nama_pel'];
	$pass  = $_POST['pwd_pel'];
	$no_hp = $_POST['inputno_hp'];
	$alamat    = $_POST['input_alamatpel'];
	$no_telp   = $_POST['input_notelp'];
	

	$Customers->createCustomers($uname, $nama_pelanggan, $no_hp, $alamat, $no_telp, $pass);
	$success = "Data Berhasil di Tambahkan";
	
	header('Location:consumers.php');

}


require_once View::getView('dashboard.php', $data);