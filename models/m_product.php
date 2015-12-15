<?php

require_once('lib/DBClass.php');

class Siswa{

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

	public function createSuppliers($id_supplier, $password, $nama_supplier, $email, $no_hp, $alamat, $kota, $provinsi, $tanggal_daftar){
		$query = "Insert into suppliers (id_supplier, password, nama_supplier, email, no_hp, alamat, kota, provinsi, tanggal_daftar)
			values('$id_supplier', '$password', '$nama_supplier', '$email', '$no_hp', '$alamat', '$kota', '$provinsi', '$tanggal_daftar')";
		$this->db->putRows($query);	
	}

	public function updateSuppliers($id, $data){
		$name = $data['input_name'];
		$email = $data['input_email'];
		$nohp = $data['input_nohp'];
		$address = $data['input_address'];
		$city = $data['input_city'];
		$prov= $data['input_prov];
		

		$query = "update suppliers set nama_supplier='$name', email='$email', no_hp='$nohp', alamat='$address', kota='$city', provinsi='$prov'";
		$query.= " where id_supplier=$id";
		$this->db->putRows($query);		
	}

	public function deleteSuppliers($id){
		$sql = "Delete from suppliers Where id_supplier=$id";
		$this->db->putRows($sql);		
	}


}