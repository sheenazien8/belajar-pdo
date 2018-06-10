<?php 
	include 'koneksi.php';

	$kategori = 'AC';
	$status = 'on';
	$pdostatement = $koneksiPDO->prepare("INSERT INTO kategori (kategori,status) VALUES (:kategori,:status)");
	$array_execute[":kategori"] = $kategori;
	$array_execute[":status"] = $status;
	$pdostatement->execute($array_execute);

 ?>