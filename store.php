<?php
    include 'db.php';
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
            <input type="text" name="search" placeholder="Cari Bikes">
            <input type="submit" name="cari" value="Cari Produk">
        </form>
    </div>
  </div>
  <!-- end Search -->
 
   <!-- katagori -->
   <div class="section">
    <div class="container">
        <div class="box">
            <?php
                $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id ASC");
                if(mysqli_num_rows($kategori) > 0 ){
                    while($k = mysqli_fetch_array($kategori)){
            ?>
            <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
            <div class="col-5">
                <img src="asset/kategori.png" width="50px" style="margin-bottom:5px;">
                <p><?php echo $k['category_nama'] ?></p>
            </div>
                    </a>
            <?php }}else{ ?>
                <p>Kategori tidak ada</p>
            <?php } ?>

        </div>
    </div>
   </div>
   <!-- end katagori -->

   <!-- produk baru -->
   <div class="section">
    <div class="container">
        <h3>Produk Terbaru</h3>
        <div class="box">
            <?php
                $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC ");
                if(mysqli_num_rows($produk) > 0){
                    while($p = mysqli_fetch_array($produk)){
            ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="produk/<?php echo $p['product_image'] ?>" >
            <div class="card-body">
                <h5 class="card-title text-center"><?php echo $p['product_nama']?></h5>
                <p class="card-text text-center">Rp. <?php echo $p['product_price']?></p>
                <a href="detail-product.php?id=<?php echo $p['product_id'] ?>" class="btn btn-primary">Detail Produk</a>
            </div>
            </div>
            <?php }}else{ ?>
                <p>Produk tidak ada</p>
            <?php } ?>
        </div>
    </div>
   </div>
   <!-- end produk baru -->

     

  
   <!-- Footer Start -->
   <footer id="contact" class="contact0 text-white px-5 pb-3 bg-dark">
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