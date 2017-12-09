<?php 
	include "db/koneksi.php";
	$kode = $_GET['kode'];
	$q = $pdo->prepare("delete from mahasiswa where kode = '$kode'");
	$q->execute();

	header("location:lihat_data.php?aksi=hapus");
?>