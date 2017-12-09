<?php
$host = "localhost";	//nama host
$user = "root";	//username phpMyAdmin
$pass = "";	//password phpMyAdmin
$db = "poliklinik_database";	//nama database

$conn = mysqli_connect($host, $user, $pass, $db);
if(mysqli_connect_errno()){
	echo"Gagal Terhubung".mysqli_connect_error();
}
?>