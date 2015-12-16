<?php

require_once('lib/DBClass.php');

class Customers{

	private $db;

	public function Customers(){
		$this->db = new DBClass();
	}

	public function readAllCustomers(){
		$query = "Select * from customers order by username";
		return $this->db->getRows($query);	
	}

	public function readCustomers($id){
		$query = "Select * from customers where nama_pelanggan=".$id;
		return $this->db->getRows($query);		
	}

	public function createCustomers($uname, $nama_pelanggan, $no_hp, $alamat, $no_telp, $pass){
		$query = "Insert into Customers (username, nama_pelanggan, alamat, no_handphone, no_telp, pwd_pelanggan)
			values('$uname', '$nama_pelanggan','$alamat',  '$no_hp', '$no_telp', '$pass')";
		$this->db->putRows($query);	
	}

}