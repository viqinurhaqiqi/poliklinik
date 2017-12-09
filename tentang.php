<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
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
    <link rel="stylesheet" href="assets/css/styleadmin.css">
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="assets/js/config.js" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  </head>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        
     <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    POLIKLINIK UIN BANDUNG
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">            
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="logout.php" target=""><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container-fluid main-container">
            <div class="col-md-2 sidebar">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="admin.php"><span class="glyphicon glyphicon-home"></span> Beranda</a></li>
                    <li><a href="input_data.php"><span class="glyphicon glyphicon-pencil"></span> Input Data Pasien</a></li>
                    <li><a href="lihat_data.php"><span class="glyphicon glyphicon-list-alt"></span> Lihat Data Pasien</a></li>
                    <li><a href="data_rekap.php"><i class="fa fa-stethoscope fa-lg"></i> Rekap Medis</a></li>
                    <li><a href="kelolapegawai.php"><i class="fa fa-user-md fa-lg"></i> Data Pegawai</a></li>
                    <li><a href="data_obat.php"><i class="fa fa-medkit fa-lg"></i> Data Obat</a></li>
                    <!-- <li><a href="pesan.php"><span class="glyphicon glyphicon glyphicon-envelope"></span> Pesan</a></li> -->
                </ul>
            </div>
            <div class="col-md-10 content">
                <div class="jumbotron">
                    <div class="col-sm-2">
                        <img src="assets/img/uin.png" alt="Logo Uin" style="width: 90%;">
                    </div>
                  <h2>POLIKLINIK UIN BANDUNG</h2> 
                  <p>Tentang Kami</p> 
                </div>
                <h4>Poliklinik UIN Bandung</h4> 
			        <p>Poliklinik dikampus UIN Bandung melayani layanan kesehatan yang dibutuhkan civitas akademika yang memiliki dokter dan perawat serta dikepalai oleh kepala Poliklinik. Pada awalya Poliklinik berada di gedung Al-Jamiah lantai 1 yang mana sekarang dipindahkan ke Gedung Student Centre Lantai 1 , memiliki ruangan Pasien, ruangan Dokter, ruangan Obat, kursi tunggu serta dapur</p>
			        <p>Pelayanan Poliklinik : </p>
			        <p>- Berobar</p>
			        <p>- Periksa Gula Darah</p>
			        <p>- Periksa Tensi</p>
			        <p>- Tes Kesehatan</p>
			        <p>- Mengukur Berat Badan</p>
			        <p>- Mengukur Tinggi Badan</p>
			    	<p>- Konsultasi Kesehatan</p>
            </div>
            <footer class="pull-left footer">
                <p class="col-md-12">
                    <hr class="divider">
                    &COPY; 2017 UIN Sunan Gunung Djati Bandung
                </p>
            </footer>
        </div>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>