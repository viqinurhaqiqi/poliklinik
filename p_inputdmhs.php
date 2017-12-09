<?php 
include 'db/koneksi.php';

$kode = $_POST['kode'];
$nama =$_POST['nama'];
$nim =$_POST['nim'];
$tmp_lahir =$_POST['tmp_lahir'];
$tgl_lahir =$_POST['tgl_lahir'];
$alamat =$_POST['alamat'];
$provinsi =$_POST['provinsi'];
$kota =$_POST['kota'];
$jk =$_POST['jk'];

$q = $pdo->prepare("insert into mahasiswa(kode, nama, nim, tmp_lahir, tgl_lahir, alamat, fakultas, jurusan, jk)
					value('".$_POST['kode']."',
						'".$_POST['nama']."',
						'".$_POST['nim']."',
						'".$_POST['tmp_lahir']."',
						'".$_POST['tgl_lahir']."',
						'".$_POST['alamat']."',
						'".$_POST['provinsi']."',
						'".$_POST['kota']."',
						'".$_POST['jk']."')");
$q->execute();	

header("location:input_data.php?aksi=input");

 ?>