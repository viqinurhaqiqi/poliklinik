<?php
   session_start();
   require_once("db/koneksi.php");
   $username = $_POST['username'];
   $password = $_POST['password'];
   $query = $pdo->prepare("SELECT * FROM admin WHERE username = ?");
   $query->execute(array($username));
   $hasil = $query->fetch();
   if($query->rowCount() == 0) {
     header('location:pesan_error1.php');
   } else {
     if($password <> $hasil['password']) {
       header('location:pesan_error2.php');
     } else {
       $_SESSION['username'] = $hasil['username'];
       header('location:admin.php');
     }
   }
?>