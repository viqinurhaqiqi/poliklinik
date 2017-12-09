<?php 
	include "db/koneksi.php";
	$kode = $_GET['kode'];
	$q = $pdo->prepare("delete from pegawai where kode = '$kode'");
	$q->execute();

	header("location:kelolapegawai.php?aksi=hapus");
?>