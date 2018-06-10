<?php  
	$server = "localhost";
	$username = "root";
	$pass = "root";
	$dbname = "user";

	$koneksiPDO = new PDO("mysql:host=$server;dbname=$dbname",$username,$pass);

?>