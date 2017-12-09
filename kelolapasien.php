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
                    <li><a href="index.php" target=""><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
                </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="container-fluid main-container">
            <div class="col-md-2 sidebar">
                <ul class="nav nav-pills nav-stacked">
                    <li><a href="admin.php">Beranda</a></li>
                    <li><a href="kelolapasien.php">Kelola Pasien</a></li>
                    <li><a href="kelolapegawai.php">Kelola Pegawai</a></li>
                </ul>
            </div>
            <div class="col-md-10 content">
                <ul class="nav nav-tabs">
                  <li class="active"><a data-toggle="tab" href="#input_mahasiswa">Input Riwayat Mahasiswa</a></li>
                  <li><a data-toggle="tab" href="#input_dosen">Input Riwayat Dosen</a></li>
                  <li><a data-toggle="tab" href="#data_mahasiswa">Data Riwayat Mahasiswa</a></li>
                  <li><a data-toggle="tab" href="#data_dosen">Data Riwayat Dosen</a></li>
                </ul>

                <br><br>

                <div class="tab-content">
                    <!-- input mahasiswa -->
                    <div id="input_mahasiswa" class="tab-pane fade in active">
                        <div class="panel panel-success" style="width: 76%;">
                            <div class="panel-heading">
                                Input Riwayat Mahasiswa
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label for="nama_mhs">Nama : </label>
                                        <input type="text" class="form-control" id="nama_mhs" style="width: 75%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="nim">Nim : </label>
                                        <input type="text" class="form-control" id="nim" style="width: 75%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="riwayat_mhs">Riwayat Penyakit : </label>
                                        <input type="text" class="form-control" id="riwayat_mhs" style="width: 75%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_mhs">Tanggal Berobat : </label>
                                        <input type="text" class="form-control" id="tgl_mhs" style="width: 75%;">
                                    </div>
                                </form>
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </div>
                        </div>                        
                    </div>

                    <!-- input dosen -->
                    <div id="input_dosen" class="tab-pane fade">
                        <div class="panel panel-success" style="width: 76%;">
                            <div class="panel-heading">
                                Input Riwayat Dosen
                            </div>
                            <div class="panel-body">
                                <form>
                                    <div class="form-group">
                                        <label for="nama_dosen">Nama : </label>
                                        <input type="text" class="form-control" id="nama_dosen" style="width: 75%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="nip">Nip : </label>
                                        <input type="text" class="form-control" id="nip" style="width: 75%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="riwayat_dosen">Riwayat Penyakit : </label>
                                        <input type="text" class="form-control" id="riwayat_dosen" style="width: 75%;">
                                    </div>
                                    <div class="form-group">
                                        <label for="tgl_dosen">Tanggal Berobat : </label>
                                        <input type="text" class="form-control" id="tgl_dosen" style="width: 75%;">
                                    </div>
                                </form>
                                <button class="btn btn-success" type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>

                    <!-- data mahasiswa -->
                    <div id="data_mahasiswa" class="tab-pane fade">
                        <div class="panel panel-success" style="width: 76%;">
                            <div class="panel-heading">
                                Data Riwayat Mahasiswa
                            </div>
                            <div class="panel-body">
                            </div>
                        </div>
                    </div>

                    <!-- data dosen -->
                    <div id="data_dosen" class="tab-pane fade">
                        <div class="panel panel-success" style="width: 76%;">
                            <div class="panel-heading">
                                Data Riwayat Dosen
                            </div>
                            <div class="panel-body">
                            </div>
                        </div>
                    </div>
                </div>
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