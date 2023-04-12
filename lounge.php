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
            <a class="nav-link" href="lounge.php">Lounge</a>
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
  <div class="forum">
  <div class="jumbotron">
    <div class="container">
      <h2 class="display-4" ><span class="font-weight-bold"> Hai, BIKERS!! </span> <br></h2>
      <p>Masih bingung custom motor idaman kamu? ingin berdiskusi dengan orang lain?</p>
      <hr class="my-4">
      <p class="lead">Diskusikan bersama orang lain pada forum dibawah ini</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg font-weight-bold" href="#kustom" role="button">MULAI DISKUSI</a>
      </p>
      </div>
  </div>
</div>
  <!-- jumbotron End -->


  <!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
<div class="modal-dialog">

<!-- Modal content FORUM-->
<!-- Balasan-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<!-- Awal -->
<div class="container">
<div class="panel panel-default" style="margin-top:50px">
  <div class="panel-body">
    <h3>Forum Diskusi</h3>
    <hr>
    <form name="frm" method="post">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Masukan Email Anda:</label>
	  <input type="text" class="form-control" name="name" placeholder="Email" required >
	</div>
    <div class="form-group">
      <label for="comment">Berikan Pertanyaan Anda:</label>
      <textarea class=" form-control" rows="5" name="msg" placeholder="Pesan" required></textarea>
    </div>
	 <input type="submit"  name="save" class="btn btn-primary  add_comment_btn" value="Send">
  </form>
          <?php
          if(isset($_POST['save'])){
              $Pcommentid  = $_POST['Pcommentid'];
              $name  = $_POST['name'];
              $msg  = $_POST['msg'];
              $insert = mysqli_query($conn, "INSERT INTO tb_forum VALUE (
                null,
                '".$Pcommentid."',
                '".$name."',
                '".$msg."',
                null
                )");
                                        if($insert){
                                         
                                          echo json_encode(array("statusCode"=>200));
                                          
                                          }else{
                                            echo json_encode(array("statusCode"=>201));
                                          }
                                        }
                                       
                                      
                                        ?>
  </div>
</div>
  
<!-- View -->
<div class="panel panel-default">
  <div class="panel-body">
   <br> <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">		
	  </tbody>
    <?php
$data = array();
$result = mysqli_query($conn, "SELECT * FROM tb_forum  ORDER BY id ASC");
while($row = mysqli_fetch_array($result)){
        array_push($data, $row);
        array_push($data);
}

echo json_encode($data);
$conn = null;
exit();
?>                                  
	</table>
  </div>
</div>
</div>

  <!-- Modal content FORUM-->

   
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>