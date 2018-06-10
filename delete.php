<?php  
	include 'koneksi.php';

	$id = 1;
	$pdostatement = $koneksiPDO->prepare("DELETE FROM kategori WHERE kategori_id=:kategori_id");
	$array_execute[":kategori_id"] = $id;
	$pdostatement->execute($array_execute);

?>