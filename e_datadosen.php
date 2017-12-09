<?php 
include 'db/koneksi.php';

$kode = $_POST['kode'];
$nama =$_POST['nama'];
$nim =$_POST['nik'];
$tmp_lahir =$_POST['tmp_lahir'];
$tgl_lahir =$_POST['tgl_lahir'];
$alamat =$_POST['alamat'];
$jk =$_POST['jk'];

$q = $pdo->prepare("update dosen set 
					kode = '".$_POST['kode']."',
					nama = '".$_POST['nama']."',
					nim = '".$_POST['nim']."',
					tmp_lahir = '".$_POST['tmp_lahir']."',
					tgl_lahir = '".$_POST['tgl_lahir']."',
					alamat = '".$_POST['alamat']."',
					jk = '".$_POST['jk']."'where kode = '".$_POST['kode']."'");
$q->execute();	

header("location:lihat_data.php?aksi=update");

 ?>