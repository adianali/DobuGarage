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
    
  <!-- jumbotron -->
  <div class="jumbotron">
    <div class="container">
      <h2 class="display-4"><span class="font-weight-bold"> Hai, BIKERS!! </span> <br> Explore your the best custom motorcycle</h2>
      <hr class="my-4">
      <p class="lead">Ayo, buat motor custom terbaik anda di Dobu Garage</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg font-weight-bold" href="#kustom" role="button">BUAT SEKARANG</a>
      </p>
      </div>
  </div>
  <!-- jumbotron End -->

  
  <!-- Katalog-->
  <!-- Motor Kustom -->
  <section id="kustom" class="kustom">
    <div class="heading text-center mb-4">
      <h1 class="title">Custom your motorcycle </h1>
      <hr>
    </div>

    <div class="row mb-0 mb-lg-4 justify-content-center">
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="card cardBx card-hover-img overflow-hidden shadow">
          <img src="asset/chopper.jpg" class="card-img-top" alt="BangNomad">
          <div class="card-body card-hover position-absolute w-100">
            <h5 class="card-title">Chopper</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button1">
              Selengkapnya
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="card cardBx card-hover-img overflow-hidden shadow">
          <img src="asset/bobber.jpg" class="card-img-top" alt="BangNomad">
          <div class="card-body card-hover position-absolute w-100">
            <h5 class="card-title">Bobber</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button2">
              Selengkapnya
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="card cardBx card-hover-img overflow-hidden shadow">
          <img src="asset/caferacer.jpg" class="card-img-top" alt="BangNomad">
          <div class="card-body card-hover position-absolute w-100">
            <h5 class="card-title">Cafe Racer</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button3">
              Selengkapnya
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="card cardBx card-hover-img overflow-hidden shadow">
          <img src="asset/Scrambler.jpg" class="card-img-top" alt="BangNomad">
          <div class="card-body card-hover position-absolute w-100">
            <h5 class="card-title">Scrambler</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button4">
              Selengkapnya
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-0 mb-lg-4 justify-content-center">
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="card cardBx card-hover-img overflow-hidden shadow">
          <img src="asset/Tracker.jpg" class="card-img-top" alt="BangNomad">
          <div class="card-body card-hover position-absolute w-100">
            <h5 class="card-title">Tracker</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button5">
              Selengkapnya
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="card cardBx card-hover-img overflow-hidden shadow">
          <img src="asset/Bratstyle.jpg" class="card-img-top" alt="BangNomad">
          <div class="card-body card-hover position-absolute w-100">
            <h5 class="card-title">Brat Style</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button6">
              Selengkapnya
            </button>
          </div>
        </div>
      </div>
      <div class="col-lg-3 mb-4 mb-lg-0">
        <div class="card cardBx card-hover-img overflow-hidden shadow">
          <img src="asset/Street Cub.jpg" class="card-img-top" alt="BangNomad">
          <div class="card-body card-hover position-absolute w-100">
            <h5 class="card-title">Street Cub</h5>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#button7">
              Selengkapnya
            </button>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Motor kustom End-->

  
  <!-- Modal Start -->
  <div class="modal fade" id="button1" tabindex="-1" aria-labelledby="modalLabel1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel1">Chopper</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
        <p>Chopper adalah motor yang menggunakan frame rigid dan “dipotong” (chop) 
        untuk memperpanjang garpu depan dan sering menampilkan setang melengkung 
        tinggi sebagai ciri khasnya. Chopper sangat mengutamakan penampilan motor 
        dan karakter pengendaranya. Choppers juga memiliki kelebihan di bagian 
        performa 
        mesin</p>
        </div>
        <div class="modal-footer">   
        <p><a href="https://api.whatsapp.com/send?phone=085233369129&text= Hallo kak, saya ingin konsultasi dan custom motor Chopper " target="_blank" class="btn btn-success">Konsultasi & Order Via Whatsaap</a></p>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="button2" tabindex="-1" aria-labelledby="modalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel2">Bobber</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <p>Pada bobber, umumnya melepas atau memotong fender depan dan belakang bertujuan membuat motor menjadi lebih ringan karena biasanya penampilan bobber terlihat bongsor dan terkesan sangat berat. Biasanya motor ini enak digunakan untuk perjalan jauh, maka dari itu bobber juga memiliki khas menggunakan ban yang tebal.</p>
        </div>
        <div class="modal-footer">   
        <p><a href="https://api.whatsapp.com/send?phone=085233369129&text= Hallo kak, saya ingin konsultasi dan custom motor Bobber" target="_blank" class="btn btn-success">Konsultasi & Order Via Whatsaap</a></p>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="button3" tabindex="-1" aria-labelledby="modalLabel3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel3">Cafe Racer</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <p>
          Cafe racer adalah salah satu jenis motor custom yang memiliki bodi ringan dan biasanya hanya dikendarai untuk perjalanan jarak pendek. Memiliki ciri khas pada bagian belakang joknya, yang sepintas menyerupai buntut tawon atau sering dijuluki jok hornet. Sementara itu, model tangki motor dibuat memanjang, sejajar dengan bagian ekor, untuk menonjolkan tampilan bodi yang minimalis.
          </p>
        </div>
        <div class="modal-footer">   
        <p><a href="https://api.whatsapp.com/send?phone=085233369129&text= Hallo kak, saya ingin konsultasi dan custom motor Cafe Racer" target="_blank" class="btn btn-success">Konsultasi & Order Via Whatsaap</a></p>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="button4" tabindex="-1" aria-labelledby="modalLabel4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel4">Scrambler</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <p>Scrambler biasanya memiliki stang fatbar juga ground clearance dan posisi knalpot yang tinggi untuk memaksimalkan fungsi motor ini.Kemudian tanki biasanya berbentuk bulat memanjang posisinya agak tidak datar. Lampu depan yang biasa digunakan memakai lampu bulat.</p>
        </div>
        <div class="modal-footer">   
        <p><a href="https://api.whatsapp.com/send?phone=085233369129&text= Hallo kak, saya ingin konsultasi dan custom motor Scrambler" target="_blank" class="btn btn-success">Konsultasi & Order Via Whatsaap</a></p>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="button5" tabindex="-1" aria-labelledby="modalLabel5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel5">Tracker</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <p> tracker merupakan jenis motor custom yang mengambil konsep dari model trail enduro dan motor jalanan. Jadi, motor jenis ini bisa digunakan untuk dua medan yang berbeda. Tenang saja, motor ini juga tetap cocok untuk melaju di perkotaan.</p>
        </div>
        <div class="modal-footer">   
        <p><a href="https://api.whatsapp.com/send?phone=085233369129&text= Hallo kak, saya ingin konsultasi dan custom motor Tracker" target="_blank" class="btn btn-success">Konsultasi & Order Via Whatsaap</a></p>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="button6" tabindex="-1" aria-labelledby="modalLabel6" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel6">Brat Style</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <p>Jenis modifikasi ini merupakan kembangan dari gaya motor balap klasik yang kemudian dipadukan dengan sentuhan khas pada bagian stang dan kaki-kakinya. Modifikasi gaya Brat Style ini diperkenalkan pada tahun 1998 oleh builder (sebutan bagi modifikator) asal jepang yang bernama Go Takamine.</p>
        </div>
        <div class="modal-footer">   
        <p><a href="https://api.whatsapp.com/send?phone=085233369129&text= Hallo kak, saya ingin konsultasi dan custom motor Brat Style" target="_blank" class="btn btn-success">Konsultasi & Order Via Whatsaap</a></p>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="button7" tabindex="-1" aria-labelledby="modalLabel7" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel7">Street Cub</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-justify">
          <p>Salah satu aliran custom yang populer saat ini ialah Street Cub. Basis motor yang digunakan biasanya berjenis mesin tidur atau bebek. Modifikasi streetcub umumnya mengadopsi stang flat dan pendek serta menghilangkan spakbor depan dan belakang. Motor jenis ini sendiri didominasi oleh motor bebek tahun 70-90an </p>
        </div>
        <div class="modal-footer">
        <p><a href="https://api.whatsapp.com/send?phone=085233369129&text= Hallo kak, saya ingin konsultasi dan custom motor Street Cub" target="_blank" class="btn btn-success">Konsultasi & Order Via Whatsaap</a></p>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal End -->

  

   
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