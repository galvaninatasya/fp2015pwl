<?php

require_once('lib/DBClass.php');

class Siswa{

	private $db;

	public function Transactions(){
		$this->db = new DBClass();
	}

	public function readAllTransactions(){
		$query = "Select * from transactions t join products p on p.id_product = t.id_product order by no_faktur";
		return $this->db->getRows($query);	
	}

	public function readTransactions($id){
		$query = "Select * from suppliers where no_faktur=".$id;
		return $this->db->getRows($query);		
	}

	public function createTransactions($no_faktur, $username, $tgl, $id_product, $harga_satuan, $total){
		$query = "Insert into transactions (no_faktur, username, tgl, id_product, harga_satuan, total)
			values('$no_faktur', '$username', '$tgl', '$id_product', '$harga_satuan', '$total')";
		$this->db->putRows($query);	
	}

	public function deleteTransactions($id){
		$sql = "Delete from transactions Where no_faktur=$id";
		$this->db->putRows($sql);		
	}


}