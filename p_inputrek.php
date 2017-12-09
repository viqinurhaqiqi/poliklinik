<?php 
include 'db/koneksi.php';

$kode = $_POST['kode'];
$nama =$_POST['nama'];
$kode_pasien =$_POST['kode_pasien'];
$keluhan =$_POST['keluhan'];
$obat =$_POST['obat'];


$q = $pdo->prepare("insert into rekap_medis(kode, nama, kode_pasien, keluhan, obat)
					value('".$_POST['kode']."',
						'".$_POST['nama']."',
						'".$_POST['kode_pasien']."',
						'".$_POST['keluhan']."',
						'".$_POST['obat']."')");
$q->execute();	

header("location:data_rekap.php?aksi=input");

 ?>