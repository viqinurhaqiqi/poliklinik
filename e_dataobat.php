<?php 
include 'db/koneksi.php';

$kode = $_POST['kode'];
$nama =$_POST['nama'];
$nim =$_POST['kategori'];
$tmp_lahir =$_POST['stok'];

$q = $pdo->prepare("update obat set 
					nama_obat = '".$nama."',
					kategori = '".$_POST['nim']."',
					tmp_lahir = '".$nim."',
					tgl_lahir = '".$tmp_lahir."'
					where kode = '".$_POST['kode']."'");
$q->execute();	

header("location:data_obat.php?aksi=update");

 ?>