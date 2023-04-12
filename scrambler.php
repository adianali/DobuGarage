<?php
    error_reporting(0);
    include 'db.php';

    $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '".$_GET['id']."' ");
    $p = mysqli_fetch_object($produk);

    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- Font Google: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- My Style -->
    <link rel="stylesheet" href="style2.css">

    <!-- logo -->
    <link rel="icon" href="asset/logo1.png" type="image/x-icon" >

    <title>Dobu Garage</title>
  </head>
  <body>
  
   <!-- Navbar Start -->
   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container">
      <a class="navbar-brand" href="index.php">
      <img src="asset/logo1.png" alt="" width="50" class="d-inline-block align-text-top me-3">
      Dobu Garage</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item mx-2">
            <a class="nav-link" href="index.php">Beranda</a>
          </li>
          <li class="nav-item dropdown mx-2">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Bikes
              </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="bobber.php">Bonneville Bobber</a>
              <a class="dropdown-item" href="caferacer.php">Husqvarna Vitpilen 701 Cafe Racer</a>
              <a class="dropdown-item" href="scrambler.php">BMW R Nine T Scrambler</a>
            </div>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="store.php">Store</a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="kontak.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->
    
 
  <!-- best scrambler -->
  <section class="scrambler">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="asset/scrambler2.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/scrambler3.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="asset/scrambler4.jpg" alt="Third slide">
    </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  </div>
      </div>
      <div class="col-md-6">
      <p class="bestbike text-center">BEST</p>
          <h3>BMW R Nine T Scrambler</h3>
          <h4>Rp.620,000,000</h4>
          <p>Spesifikasi : <br>
          Tenaga Maksimal : 110 hp,
          Jenis Mesin : 4-Stroke,DOHC,
          Opsi start : Listrik,
          Jenis Bahan Bakar : Bensin,
          Konfigurasi Katup : DOHC,
          Kecepatan maksimum : 200 kmph,
          Rasio Kompresi : 12.0:1,
          RPM torsi maksimum : 6000 rpm,
          Jumlah silinder : 2,
          RPM Tenaga Maksimum : 7750 rpm,
          Katup Per Silinder : 4,
          Torsi Maksimal : 116 Nm,
          Jenis Kopling : Dry Single Plate,
          Pipa Knalpot : Dual Exhaust,
          Kapasitas(cc) : 1170,
          Ketinggian Jok : 820 mm,
          Suspensi Belakang : Swing Arm,
          Suspensi Depan :  Telescopic,
          Travel Suspensi depan & belakang : 125mm & 140mm,
          Head Lamp : Halogen,
          Lampu Belakang : LED,
          Indikator Bbm : Digital,
          Ukuran velg belakang & depan : R17 & R19,
          Ban depan : 120/70 R19,
          Ban belakang : 170/60 R17,
          </p>
          <p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text= Hallo kak, saya tertarik dengan Best Produk Dobu Garage yaitu BMW R Nine T Scrambler" target="_blank" class="btn btn-outline-success">Order Via Whatsaap</a></p>
          
      </div>
    </div>
  </div>
  </section>
  <!-- end best bobber -->

  
   
   <!-- Footer Start -->
   <footer id="contact" class="contact2 text-white px-5 pb-3 bg-dark">
    <div class="row justify-content-right">
      <div class="footer-left col-lg-4">
        <h3>Payment Method</h3>
        <div class="credit-cards">
          <img src="asset/pembayaran/visa.png" width="130px" >
          <img src="asset/pembayaran/mastercard.png" width="130px">
          <img src="asset/pembayaran/paypal.png" width="130px">
        </div>
      </div>
      <div class="col-lg-4">
        <div class="alamat">
          <p><img src="asset/sosmed/mail.png" width="50px" > dobugarage@gmail.com</p><br>
          <p><img src="asset/sosmed/call.png" width="50px"> 085233369129</p><br>
          <p><img src="asset/sosmed/loc.png" width="50px"> Jl. Kelapa Dua Raya No.93, Klp. Dua, Kec. Klp. Dua, Kabupaten Tangerang, Banten 15810</p>
        </div>
        
      </div>
      <div class="col-lg-4">
        <div class="text">
          <p>Dobu Garage merupakan usaha yang bergerak dalam bidang custom dan modifikasi motor. Membangun ulang motor kesayangan agar sesuai dengan keinginan. Apalagi motor merupakan kendaraan bermotor yang sudah banyak digunakan di Indonesia. Dengan bentukan pabrik yang sama maka kami Dobu Garage membantu para bikers mewujudkan motor impian. Kami menyediakan refrensi custom motor terbaik kami dan kami juga menjual beberapa motor custom.</p>
          <img src="asset/sosmed/instagram.png" width="50px">
          <img src="asset/sosmed/tw.png" width="50px">
          <img src="asset/sosmed/yt.png" width="50px">
          <img src="asset/sosmed/fb.png" width="50px">
        </div>
      </div>
      </div>
    </div>
    <hr class="bg-white">
    <div class="row">
      <div class="col-lg text-center">
        <p class="copy">Copyright &copy; Dobu Garage 2022.</p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->





  
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>