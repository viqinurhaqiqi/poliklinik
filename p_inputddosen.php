<?php 
include 'db/koneksi.php';

$kode = $_POST['kode'];
$nama =$_POST['nama'];
$nipk =$_POST['nipk'];
$tmp_lahir =$_POST['tmp_lahir'];
$tgl_lahir =$_POST['tgl_lahir'];
$jk =$_POST['jk'];
$alamat =$_POST['alamat'];


$q = $pdo->prepare("insert into dosen(kode, nama, nipk, tmp_lahir, tgl_lahir, jk, alamat)
					value('".$_POST['kode']."',
						'".$_POST['nama']."',
						'".$_POST['nipk']."',
						'".$_POST['tmp_lahir']."',
						'".$_POST['tgl_lahir']."',
						'".$_POST['jk']."',
						'".$_POST['alamat']."')");
$q->execute();	

header("location:input_data.php?aksi=input");

 ?>