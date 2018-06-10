<?php 
	include 'koneksi.php';

	$status = 'off';
	$id = 3;
	$pdostatement = $koneksiPDO->prepare("UPDATE kategori SET status=:status WHERE kategori_id=:kategori_id");
	$array_execute[":kategori_id"] = $id;
	$array_execute[":status"] = $status;
	$pdostatement->execute($array_execute);

 ?>