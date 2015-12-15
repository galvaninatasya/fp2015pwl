<?php

require_once('lib/view.php');
require_once('models/m_supplier.php');

$suppliers = new Suppliers();

$data['title'] = "Suppliers";
$data['page'] = "v_suppliers.php";

if(!empty($_POST)){

	$name   = $_POST['input_name'];
	$email = $_POST['input_email'];
	$nohp  = $_POST['input_nohp'];
	$address = $_POST['input_address'];
	$city = $_POST['input_city'];
	$prov = $_POST['input_prov'];

	$suppliers->UpdateSuppliers($name, $email, $nohp, $address, $city, $prov);
	$success = "Data Berhasil di Tambahkan";

}

$data['suppliers'] = $suppliers->readAllSuppliers();


require_once View::getView('dashboard.php', $data);