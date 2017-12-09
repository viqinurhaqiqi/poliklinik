<?php 
include 'db/koneksi.php';

$kode = $_POST['kode'];
$kategori =$_POST['kategori'];
$nama =$_POST['nama'];
$stok =$_POST['stok'];


$q = $pdo->prepare("insert into obat(kode, kategori, nama,stok)
					value('".$_POST['kode']."',
						'".$_POST['kategori']."',
						'".$_POST['nama']."',
						'".$_POST['stok']."')");
$q->execute();	

header("location:data_obat.php?aksi=input");

 ?>