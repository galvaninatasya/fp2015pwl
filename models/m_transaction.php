<?php

require_once('lib/DBClass.php');

class Transactions{

	private $db;

	public function Transactions(){
		$this->db = new DBClass();
	}

	public function readAllTransactions(){
		$query = "Select * from transactions t join products p on p.id_product = t.id_product join customers c on t.username=c.username order by no_faktur";
		return $this->db->getRows($query);	
	}

	public function readTransactions($id){
		$query = "Select * from transactions where no_faktur=".$id;
		return $this->db->getRows($query);		
	}

	public function createTransactions($no_faktur, $input_pel, $tgl, $input_prod, $input_jlh, $total){
		$query = "Insert into transactions (no_faktur, username, tgl, id_product, jlh, total)
			values('$no_faktur', '$input_pel', '$tgl', '$input_prod', '$input_jlh', '$total')";
		$this->db->putRows($query);	
	}

	public function deleteTransactions($id){
		$sql = "Delete from transactions Where no_faktur=$id";
		$this->db->putRows($sql);		
	}


}