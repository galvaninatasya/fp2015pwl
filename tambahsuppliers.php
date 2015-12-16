<?php

require_once('lib/view.php');
require_once('models/m_supplier.php');

$suppliers = new Suppliers();

$data['title'] = "Form Tambah Supplier Baru";
$data['page'] = "tambah/v_tambahsuppliers.php";


if(!empty($_POST)){

	$id_sup    = $_POST['id_supp'];
	$nama_sup   = $_POST['nama_supp'];
	$pass  = $_POST['pwd'];
	$email  = $_POST['input_email'];
	$no_hp = $_POST['inputno_hp'];
	$alamat    = $_POST['input_alamat'];
	$kota   = $_POST['input_kota'];
	$prov  = $_POST['input_prov'];
	$tgl = $_POST['tgl_daftar'];

	$suppliers->createSuppliers($id_sup,$pass,$nama_sup,$email,$no_hp,$alamat,$kota,$prov,$tgl);
	$success = "Data Berhasil di Tambahkan";
	
	header('Location:suppliers.php');

}


require_once View::getView('dashboard.php', $data);