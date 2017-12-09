<?php 
include 'db/koneksi.php';

$kode = $_POST['kode'];
$nama =$_POST['nama'];
$tmp_lahir =$_POST['tmp_lahir'];
$tgl_lahir =$_POST['tgl_lahir'];
$alamat =$_POST['alamat'];
$no_hp =$_POST['no_hp'];
$email =$_POST['email'];
$jabatan =$_POST['jabatan'];


$q = $pdo->prepare("insert into pegawai(kode, nama, tmp_lahir, tgl_lahir, alamat, no_hp, email, jabatan)
					value('".$_POST['kode']."',
						'".$_POST['nama']."',
						'".$_POST['tmp_lahir']."',
						'".$_POST['tgl_lahir']."',
						'".$_POST['alamat']."',
						'".$_POST['no_hp']."',
						'".$_POST['email']."',
						'".$_POST['jabatan']."')");
$q->execute();	

header("location:kelolapegawai.php?aksi=input");

 ?>