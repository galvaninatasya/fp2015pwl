<?php

require_once('lib/DBClass.php');

class Suppliers{

	private $db;

	public function Suppliers(){
		$this->db = new DBClass();
	}

	public function readAllSuppliers(){
		$query = "Select * from suppliers order by id_supplier";
		return $this->db->getRows($query);	
	}

	public function readSuppliers($id){
		$query = "Select * from suppliers where id_supplier=".$id;
		return $this->db->getRows($query);		
	}

	public function createSuppliers($id_sup, $pass, $nama_sup, $email, $no_hp, $alamat, $kota, $prov, $tgl){
		$query = "Insert into suppliers (id_supplier, password, nama_supplier, email, no_hp, alamat, kota, provinsi, tanggal_daftar)
			values('$id_sup', '$pass', '$nama_sup', '$email', '$no_hp', '$alamat', '$kota', '$prov', '$tgl')";
		$this->db->putRows($query);	
	}

	public function updateSuppliers($id, $data){
		$name = $tampilkan['input_name'];
		$email = $tampilkan['input_email'];
		$nohp = $tampilkan['input_nohp'];
		$alamat = $tampilkan['input_address'];
		$kota = $tampilkan['input_city'];
		$provinsi = $tampilkan['input_prov'];
		

		$query = "update suppliers set nama_supplier=[$name], email=[$email], no_hp=[$nohp], alamat=[$alamat], kota=[$kota], provinsi=[$provinsi]";
		$query.= " where id_supplier=$id";
		$this->db->putRows($query);		
	}

	public function deleteSuppliers($id){
		$sql = "Delete from suppliers Where id_supplier=$id";
		$this->db->putRows($sql);		
	}


}