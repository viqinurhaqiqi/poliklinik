<?php
session_start();
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
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="assets/css/jquery.dataTables.css">
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="assets/js/config.js" type="text/javascript"></script>
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="assets/js/dataTables.bootstrap.min.js" type="text/javascript"></script>
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
                <div class="panel panel-success" style="width: 75%">
                    <div class="panel-heading">
                        Data Obat
                    </div>
                    <div class="panel-body">
                        <a href="input_dobat.php"><button class="btn btn-success">Tambah</button></a>
                        <a href="l_dataobat.php" target="_blank"><button class="btn btn-primary">Cetak Laporan</button></a><br><br>
                        <table class="table table-striped table-bordered" id="data">
                         <thead>
                            <tr>
                                <th>No. </th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Stock</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            
                            <tbody>
                            <?php
                            
                                        include('db/koneksi_d.php');
                                        
                                        $query = mysqli_query($conn, "SELECT * FROM obat ORDER BY id_obat ASC");
                                        
                                        if(mysqli_num_rows($query) == 0){
                                            echo '<tr><td colspan="6">Tidak ada data!</td></tr>';

                                        }else{ 
                                        
                                            $no = 1;
                                            while($no<=$data = mysqli_fetch_assoc($query)){
                                                
                                                echo '<tr>';
                                                    echo '<td>'.$no.'</td>';  
                                                    echo '<td>'.$data['id_obat'].'</td>';
                                                    echo '<td>'.$data['nama_obat'].'</td>';
                                                    if($data['stok'] == null){
                                                        echo '<td>0</td>';
                                                    }else{
                                                    echo '<td>'.$data['stok'].'</td>';
                                                    }
                                                    echo '<td><a href="edit_obat.php?kode='.$data['id_obat'].'" class="btn btn-warning btn-sm active">Edit</a>
                                                    <a href="h_dataobat.php?kode='.$data['id_obat'].'" onclick="return confirm(\'Anda yakin akan menghapusnya?\')" class="btn btn-danger btn-sm active">Hapus</a></td>';
                                    echo '</tr>';
                                                
                                                $no++;
                                                
                                            }
                                            
                                        }
                                        ?>
                            </tbody>
                        </table>        
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
    <script>
        $(document).ready(function(){
            $('#data').DataTable();
        });       
    </script>
  </body>
</html>