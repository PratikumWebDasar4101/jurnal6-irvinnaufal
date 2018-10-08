<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "jurnal5";
try{
	$conn = new PDO("mysql:host=$server;dbname=$db",$username);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
	echo "Gagal: " . $e->getMassage();
}
?>