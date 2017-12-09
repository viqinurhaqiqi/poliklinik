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
    <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/js/config.js" type="text/javascript"></script>
  </head>

  <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

   <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header" > 
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span> 
        </button>
        <a class="navbar-brand" style="cursor: pointer;" href="index.php"><img src="assets/img/uin.png" alt="logo uin" class="img-responsive" style="width: 40px; margin-top: -10px;"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#beranda">BERANDA</a></li>
          <li><a href="#info">PELAYANAN</a></li> 
          <li><a href="#tentang">TENTANG KAMI</a></li> 
          <li><a href="#kontak">KONTAK</a></li>           
        </ul>
      </div>
    </div>
  </nav>

  <!-- Tab Beranda -->

  <div class="container-fluid bg-cover" id="beranda">
    <div class="container-fluid text-center transparent"><br>
      <img class="" src="assets/img/uin.png" style="width: 20%;">
      <h2><strong>POLIKLINIK</strong></h2>
      <h2><strong>UIN BANDUNG</strong></h2><br>
      <marquee bgcolor="#7CBB00;"><h4>- Selamat Datang- </h4></marquee><br>
    </div>
  </div>

  <!-- Tab Informasi -->

  <div id="info" class="container-fluid bg-1" style="margin-top:0px;">
    <div class="row">
      <div class="col-md-4">
        <h2>Pelayanan Kami</h2>
        <hr class="botm-line">
        <p>
          Poliklinik UIN Bandung memiliki beberapa pelayanan kesetahan bagi
          masyarakat civitas UIN Bandung maupun masyarakat umum.
        </p>
        <button type="button" data-toggle="modal" data-target="#myModal2" class="btn btn-info" style="margin-bottom: 5px;">Tata Cara Berobat <span class="glyphicon glyphicon-menu-right"></span></button>
        <table class="table table-bordered">
          <tbody>
            <tr>
              <th colspan="2" style="text-align: center; background-color: #006699; color: #fff;">Jam Kerja</td>
            </tr>
            <tr>
              <td>Senin-Jumat</td>
              <td>08.00-16.00</td>
            </tr>
            <tr>
              <td>Sabtu-Minggu</td>
              <td>Libur</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-8">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <br><br>
            <i class="fa fa-stethoscope fa-3x" style="margin-bottom: 5px; color: #7CBB00;"></i>
            <h4><strong>Cek Kesehatan</strong></h4>
            <p style="margin-bottom: 20px;">Mengecek kesehatan mahasiswa, dosen dan staff kampus uin bandung secara gratis, yaitu mengukur tinggi badan, berat badan, serta tensi darah</p>
            <i class="fa fa-user-md fa-3x" style="margin-bottom: 5px; color: #7CBB00;"></i>
            <h4><strong>Praktek Dokter</strong></h4>
            <p style="margin-bottom: 20px;">Dokter hadir untuk penanganan berbagai keluhan penyakit dan pemeriksaan kesehatan</p>
          </div>
          <div class="col-md-6 col-sm-6">
            <br><br>
            <i class="fa fa-ambulance fa-3x" style="margin-bottom: 5px; color: #7CBB00;"></i>
            <h4><strong>Penanganan Darurat</strong></h4>
            <p style="margin-bottom: 20px;">Poliklinik uin bandung menangani kasus trauma dan medis darurat dengan memiliki fasilitas ambulance yang selalu siap siaga jika dibutuhkan</p>
            <i class="fa fa-medkit fa-3x" style="margin-bottom: 5px; color: #7CBB00;"></i>
            <h4><strong>Cek Gula Darah</strong></h4>
            <p style="margin-bottom: 20px;">Keluhan yang biasa terjadi pada dosen yang disiapkan oleh dokter untuk mengetahui gula darah dengan harga Rp.55.000</p>
          </div>
        </div>
      </div>
    </div><br>
    <div class="row">
      <div class="col-md-12">
        <div class="col-sm-2" style="background-color: #006699; height: 200px; color: #fff; padding-top: 20px;">
          <h2>Poliklinik UIN Bandung</h2>
        </div>
        <div class="col-sm-4" style="height: 200px; color: #fff; background-color: #7CBB00;">
          <img src="assets/img/IMG_4995.jpg" class="img-responsive" style="height: 200px; margin-left: -15px;">
        </div>
        <div class="col-sm-4" style="height: 200px; color: #fff; background-color: #7CBB00;">
          <img src="assets/img/MG_8450.jpg" class="img-responsive" style="height: 200px; margin-left: -10px;">
        </div>
        
      </div>
    </div>
  </div>

 <!-- Tab Tentang Kami -->

  <div class="container-fluid text-center bg-1" id="tentang">
    <div class="row">
      <div class="col-md-4">
        <h2>Tentang Kami</h2>
        <hr class="botm-line">
        <p>Poliklinik dikampus UIN Bandung melayani kesehatan yang dibutuhkan civitas akademika yang memiliki dokter dan perawat serta dikepalai oleh kepala Poliklinik.</p>
        <a data-toggle="modal" href="#myModal" style="color: #006699; padding-top:10px;">Ketahui Lebih Lanjut.....</a>
      </div>
      <div class="col-sm-8" style="padding-left: 50px; padding-top: 55px;">
        <h4><strong>Visi</strong></h4>
        <p>“ Menjadi satu-satunya klinik di uin bandung yang memberikan pelayanan kesehatan secara jujur, adil dan profesional ”.</p><br>
        <h4><strong>Misi</strong></h4>
        <ul style="list-style-type:square;">
          <li> Memberikan pelayanan kesehatan yang sesuai dengan kemajuan ilmu pengetahuan dan teknologi kedokteran</li>
          <li> Memberikan pelayanan yg baik dan bermutu</li>
          <li> Mengembangkan fasilitas yang dapat mewujudkan kondisi nyaman dan aman dalam pelayanan kesehatan</li>
          <li> Maksud Klinik ini didirikan dengan maksud memberikan layanan kesehatan yang memadai </li>
        </ul>
      </div>
    </div>
  </div>

 <!-- Tab Kontak -->

  <div id="kontak" class="container-fluid bg-1">
    <div class="row">
      <div class="col-sm-5">
        <h2>Kontak</h2>
        <hr class="botm-line">
        <div class="row">
          <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nama" type="text" required>
          </div>
          <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
          </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Komentar" rows="5"></textarea><br>
        <div class="row">
          <div class="col-sm-12 form-group">
            <button class="btn btn-success pull-left" type="submit">Kirim</button>
          </div>
        </div>  
      </div>
      <div class="col-sm-7">
        <div class="row" style="padding-top: 90px; padding-left: 50px;">
          <p style="font-size: 18px;"><span class="glyphicon glyphicon-map-marker" style="color: #7CBB00;"></span>Jalan A.H. Nasution No. 105 (Gedung Studi Center Lt 1)</p>
          <p style="font-size: 18px;"><span class="glyphicon glyphicon-phone" style="color: #7CBB00;"></span> +62 22-7800525</p>
          <p style="font-size: 18px;"><span class="glyphicon glyphicon-envelope" style="color: #7CBB00;"></span> contact@uinsgd.ac.id</p>
      </div>
  </div>
</div>
<br>
<div class="border">
  <iframe
    width="100%"
    height="400"
    frameborder="0" style="border:0"
    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC6e8sZwFM0gXiauu6ckKq3lu0ci2XvODM
    &q=Universitas+Islam+Negeri+Sunan+Gunung+Djati, Bandung" allowfullscreen>
  </iframe>
</div> 
</div>

<!-- Daftar Berobat  -->


  <div class="container-fluid">
    <!-- Modal -->
    <div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog modal-me">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" style=" color: #7CBB00;">&times;</button>
            <br><br><p class="center">TATA CARA BEROBAT</p>
          </div>
          <div class="modal-body" style="padding:40px 50px;" style="text-align: justify;">
            <p class="page-header">Alur Pendaftaran</p>
            <ul>
              <li>Pasien mendaftar dengan membawa persyaratan</li>
              <li>Petugas klinik memasukan data pasien dan pasien mendapat nomer dan kartu berobat</li>
              <li>Pasien diperiksa oleh Dokter</li>
              <li>Asisten Dokter memasukan data rekam medis pasien</li>
              <li>Pasien mendapatkan hasil rekam medis</li>
            </ul>
            <p class="page-header">Persyaratan Berobat</p>
            <ul>
              <li><strong>Mahasiswa :</strong> Menunjukkan Kartu Tanda Mahasiswa (KTM). Bagi mahasiswa yang belum memilki KTM, dapat menunjukkan slip bukti pembayaran semester</li>
              <li><strong>Karyawan/Pegawai :</strong> Menunjukkan surat keterangan karyawan</li>
              <li><strong>Tamu (Umum) :</strong> Tidak ada persyaratan administrasi khusus untuk masyarakat umum yang akan berobat, namun tetap dikenakan biaya konsultasi maupun biaya resep obat-obatan</li>
            </ul>
          </div>
          <!-- <div class="modal-footer">
            <p class="center">©2017</p>
          </div> -->
        </div>
        
      </div>
    </div> 
  </div>

<!-- Tentang -->

  <div class="container-fluid">
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog modal-me">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" style=" color: #7CBB00;">&times;</button>
            <br><br><p class="center">Tentang Poliklinik UIN Bandung</p>
          </div>
          <div class="modal-body" style="padding:40px 50px; text-align: justify;">
            <p class="page-header"><strong>Sejarah</strong></p>
            <p>Poliklinik pada awanya berada di gedung Al-Jamiah lanta 1 yang mana sekarang dipindahkan ke Gedung Student Centre Lantai 1 , memiliki ruangan Pasien, ruangan Dokter, ruangan Obat, kursi tunggu serta dapur</p>

            <p class="page-header"><strong>Personalia</strong></p>
            <ul>
              <li>Kepala Poliklinik 1 Orang</li>
              <li>Dokter 2 Orang</li>
              <li>Perawat 2 Orangr</li>
              <li>Cleaning Service 2</li>
            </ul>
          </div>
          <!-- <div class="modal-footer">
            <p class="center">©2017</p>
          </div> -->
        </div>
        
      </div>
    </div> 
  </div>

  <!-- Footer -->

 <footer id="footer" class="footer">
    <div class="container-fluid text-center">

      <h3>POLIKLINIK UIN BANDUNG</h3>

      <ul class="social-links">
      </ul>
      <div class="credits">
        ©2017 UIN Sunan Gunung Djati
      </div>
    </div>
  </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script>
      $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {

          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
            });
          } // End if 
        });
      })

      $( function() {
          $( "#datepicker" ).datepicker();
        } );      
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>