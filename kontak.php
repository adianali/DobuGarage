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

  <!-- Contact -->
    <section class="kontak">
        <div class="container py-5" >
            <div class="row" >
                <div class="col-lg-6 mx-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="head text-center text-white py-3">
                                        <h3>Contact Us</h3>                
                                    </div>
                                </div>
                            </div>
                            <div class="form p-3">
                            <form action="" method="POST">
                                <div class="form-row my-4">
                                    <div class="col-lg-12">
                                        <input type="text" name="nama" class="effect-1" placeholder="Name" required>
                                        <span class="Focus-border"></span>
                                    </div>
                                </div>
                                <div class="form-row pb-4">
                                    <div class="col-lg-12">
                                        <input type="text" name="telp" class="effect-1" placeholder="NO HP" required>
                                        <span class="Focus-border"></span>
                                    </div>
                                </div>
                                <div class="form-row pb-4">
                                    <div class="col-lg-12">
                                        <input type="text" name="email" class="effect-1" placeholder="Email Addres" required>
                                        <span class="Focus-border"></span>
                                    </div>
                                </div>
                                <div class="form-row pt-5">
                                    <div class="col-lg-12">
                                    <textarea name="pesan" class="effect-1" placeholder="Your Message"></textarea>
                                        <span class="Focus-border"></span>
                                    </div>
                                </div>
                                <div class="form-row pt-4">
                                    <div class="col-lg-6">

                                    </div>
                                    <div class="offset-2 col-lg-4">
                                    <input type="submit" name="submit" value="SEND MESSAGE" class="btn1">
                                    </div>
                                </div>
                            </form>
                            <?php
                                if(isset($_POST['submit'])){
                                    $nama  = $_POST['nama'];
                                    $telp  = $_POST['telp'];
                                    $email  = $_POST['email'];
                                    $pesan = $_POST['pesan'];
                                    
                                    $insert = mysqli_query($conn, "INSERT INTO tb_kontak VALUE (
                                        null,
                                        '".$nama."',
                                        '".$telp."',
                                        '".$email."',
                                        '".$pesan."')");

                                        if($insert){
                                           echo '<script>alert("Terima kasih telah menghubungi kami...")</script>';
                                            echo '<script>window.location="kontak.php"</script>';
                                          }else{
                                            echo 'gagal ',mysqli_error($conn);
                                          }
                                        }
                                      
                                        ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  <!-- Contact End -->

  
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