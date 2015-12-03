<?php
function genCode($first, $field, $table, $char){ //kode awal, field kode, nama table dan panjang kode
global $mysqli;
	$get = $mysqli->query("SELECT MAX(RIGHT($field, $char)) as maxID FROM $table ORDER BY $field");
	$code = $get->fetch_array(); 
	$genKode = $code['maxID']; 
	$getCode = (int) substr($genKode, 1, $char); 
	$getCode++; 
	$theCode = $first.sprintf("%0".$char."s", $getCode); 
	return $theCode;
}