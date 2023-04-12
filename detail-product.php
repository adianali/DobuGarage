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
    

  <!-- Search -->
  <div class="search">
    <div class="container">
        <form action="produk.php">
            <input type="text" name="search" placeholder="Cari Bikes" value="<?php echo $_GET['search'] ?>">
            <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
            <input type="submit" name="cari" value="Cari Produk">
        </form>
    </div>
  </div>
  <!-- end Search -->
 
  <!-- detail -->
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <img src="produk/<?php echo $p->product_image ?>" width="600px" >
      </div>
      <div class="col-md-7">
          <p class="newbike text-center">NEW</p>
          <h3> <?php echo $p->product_nama ?></h3>
          <h4>Rp. <?php echo number_format($p->product_price)?></h4>
          <p>Deskripsi :
            <?php echo $p->product_description ?>
          </p>
          <p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text= Hallo kak, saya tertarik dengan produk <?php echo $p->product_nama ?>" target="_blank" class="btn btn-outline-success">Order Via Whatsaap</a></p>
      </div>
    </div>
  </div>
  <!-- end detail -->

  
    

   
   <!-- Footer Start -->
   <footer id="contact" class="contact0 text-white px-5 pb-3 bg-dark">
    <div class="row justify-content-right">
      <div class="footer-left col-lg-6">
        <h3>Payment Method</h3>
        <div class="credit-cards">
          <img src="asset/pembayaran/visa.png" width="150px" >
          <img src="asset/pembayaran/mastercard.png" width="150px">
          <img src="asset/pembayaran/paypal.png" width="150px">
        </div>
      </div>
      <div class="col-lg-6">
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