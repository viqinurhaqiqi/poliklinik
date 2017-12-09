<?php 
include 'db/koneksi.php';

$kode = $_POST['kode'];
$nama =$_POST['nama'];
$provinsi =$_POST['provinsi'];
$kota =$_POST['kota'];
$jk =$_POST['jk'];

$q = $pdo->prepare("insert into test(kode, nama, fakultas, jurusan, jk)
					value('".$_POST['kode']."',
						'".$_POST['nama']."',
						'".$_POST['provinsi']."',
						'".$_POST['kota']."',
						'".$_POST['jk']."')");
$q->execute();	

header("location:h.php?aksi=input");

 ?>