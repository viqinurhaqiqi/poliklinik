<?php
@session_start();
include("db/koneksi.php");

    if (isset($_GET['aksi'])) {
        $aksi = $_GET['aksi'];
        if ($aksi == "input") {
            echo "
                <div class='alert alert-success alert-dismissable fade-in'>
                    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Berhasil!</strong> Data telah di input.
                </div>";
        } else if ($aksi == "update") {
            echo "<div class='alert alert-info alert-dismissable fade-in'>
                    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Berhasil!</strong> Data telah dirubah.
                </div>";
        } else if ($aksi == "hapus") {
            echo "<div class='alert alert-danger alert-dismissable fade-in'>
                    <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Berhasil!</strong> Data telah dihapus.
                </div>";
        }
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
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="assets/js/config.js" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
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
                <div class="panel panel-success" style="width: 76%;">
                  <div class="panel-heading">
                    Input Data Obat
                  </div>
                  <div class="panel-body">
                                                                       
                                <form action="p_inputdobat.php" method="POST"> 
                                    <?php
                                        $q = $pdo->query("SELECT MAX(id_obat) as kodeobat FROM obat");
                                        $datakode = $q->fetch(); 
                                        if($datakode) {
                                            $nilaikode = substr($datakode[0], 1);
                                            $kode = (int) $nilaikode;
                                            $kode = $kode + 1;
                                            $hasilkode = "O" .str_pad($kode, 3, "0", STR_PAD_LEFT);
                                        } else {
                                            $hasilkode = "O001";
                                        }
                                    ?>                                    
                                    <div class="form-group">                                                                   
                                        <label for="kode">Kode : </label>
                                        <input type="text" class="form-control" id="kode" style="width: 75%;" value="<?php echo $hasilkode;?>" name="kode">
                                    </div>   
                                    <div class="form-group">
                                        <label for="kategori">Kategori :</label>
                                        <select class="form-control" id="kategori" name="kategori" style="width: 75%;">
                                          <option>Pilih Kategori</option>
                                          <?php
                                          
                                          // Buat query untuk menampilkan semua data siswa
                                          $q = $pdo->prepare("SELECT * FROM kategori_obat ORDER BY kode");
                                          $q->execute(); // Eksekusi querynya
                                          
                                          while($data = $q->fetch()){ // Ambil semua data dari hasil eksekusi $sql
                                            echo "<option value='".$data['id_kategori_obat']."'>".$data['nama']."</option>";
                                          }
                                          ?>                 
                                        </select>
                                    </div>   
                                    <div class="form-group">
                                        <label for="nama">Nama : </label>
                                        <input type="text" class="form-control" id="nama" style="width: 75%;" name="nama">
                                    </div>
                                    <div class="form-group">
                                        <label for="stok">Stok : </label>
                                        <input type="text" class="form-control" id="stok" style="width: 75%;" name="stok">
                                    </div>
                                    <button class="btn btn-success" type="submit">Simpan</button>
                                    <button class="btn btn-danger">Batal</button>
                                    
                                </form>                    
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
    <script>
     $(function() {
      $("#datepicker").datepicker({
        dateFormat: 'dd/mm/yy',
        changeMonth: true,
        changeYear: true
       
      });
    });
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>