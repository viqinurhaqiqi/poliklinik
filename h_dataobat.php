<?php 
	include "db/koneksi.php";
	$kode = $_GET['kode'];
	$q = $pdo->prepare("delete from obat where kode = '$kode'");
	$q->execute();

	header("location:data_obat.php?aksi=hapus");
?>