<?php 
	include 'koneksi.php';

	$pdostatement = $koneksiPDO->prepare("SELECT * FROM kategori");
	$pdostatement->execute();
	$result = $pdostatement->fetchAll(PDO::FETCH_ASSOC);

 ?>

 <table border="1px" width="500px">
 	<tr>
 		<th>#</th>
 		<th>Kategori</th>
 		<th>Status</th>
 	</tr>
 	<?php $no =1; ?>
 	<?php foreach ($result as $value): ?>
 	<tr>
 		<td><?= $no; ?></td>
 		<td><?= $value['kategori']; ?></td>
 		<td><?= $value['status']; ?></td>
 	</tr>
 	<?php $no++; ?>
 	<?php endforeach ?>

 </table>