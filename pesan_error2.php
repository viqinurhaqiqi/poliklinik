<?php
   session_start();
   if(isset($_SESSION['username'])) { }
   require_once("db/koneksi.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Poliklinik UINSSGD Bandung</title>

    <!-- Bootstrap -->
    <link rel="shortcut icon" href="assets/img/uin.png">
    <link href="https://fonts.googleapis.com/css?family=Francois+One|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/stylepro.css">
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  </head>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  	<br><br><br><br><br>
	 <div class="container text-center" style="padding-top: 50px;">
	    <div class="container transparent">
	    <img class="" src="assets/img/uin.png" style="width: 20%;">
	    <h4 align="center"><strong>Login Admin</strong></h4><br>
      <div class="alert alert-danger">
        <strong>Gagal!</strong> Password salah <a href="login.php" class="alert-link">kembali ke halaman login</a>.
      </div>
	 </div>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>

