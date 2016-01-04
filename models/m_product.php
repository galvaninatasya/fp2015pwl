<?php

require_once('lib/DBClass.php');

class Products{

	private $db;

	public function Products(){
		$this->db = new DBClass();
	}

	public function readAllProducts(){
		$query = "Select * from Products order by id_produk";
		return $this->db->getRows($query);	
	}

	public function readProducts($id){
		$query = "Select * from Products where id_produk=".$id;
		return $this->db->getRows($query);		
	}

	public function createProducts($id_prod,$nama_prod,$harga_prod,$gambar_prod,$stock,$komp,$indi,$sup){
		$query = "Insert into Products (id_produk, nama_produk, harga, gambar, jlh_produk, komposisi, keterangan, id_supplier)
			values('$id_prod', '$nama_prod', '$harga_prod', '$gambar_prod', '$stock', '$komp', '$indi', '$sup')";
		$this->db->putRows($query);	
	}

}