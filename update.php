<?php 
	include 'koneksi.php';

	$kategori = 'Kipas';
	$status = 'on';
	$id = 1;
	$pdostatement = $koneksiPDO->prepare("UPDATE kategori SET kategori=:kategori, status=:status WHERE kategori_id=:kategori_id");
	$array_execute[":kategori_id"] = $id;
	$array_execute[":kategori"] = $kategori;
	$array_execute[":status"] = $status;
	$pdostatement->execute($array_execute);

 ?>