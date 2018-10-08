<?php 
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$input    ="INSERT INTO data (username,password) 
			VALUES ('$username','$password')";

 ?>