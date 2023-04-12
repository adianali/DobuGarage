<?php
    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
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
    
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    
    <!-- My Style -->
    <link rel="stylesheet" href="style.css">
    
    <!-- CKEditor -->
    <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script>


    <title>Profile | Dobu Garage</title>
  </head>
  <body>
    
  <!-- Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container">
      <a class="navbar-brand" href="dashboard.php">Dobu Garage</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php">Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data-kategori.php">Kategori</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="data-produk.php">Produk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pesan-user.php">Pesan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="keluar.php">Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar End -->

    <!-- content -->
    <div class="section">
        <div class="container">
            <h3 class="dsh">Tambah Data Produk</h3>
            <div class="box">
                <form action="" method="POST" enctype="multipart/form-data">
                  <select class="input-control" name="kategori" required>
                    <option value="">--Pilih--</option>
                    <?php
                      $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id ASC");
                      while($r = mysqli_fetch_array($kategori)){
                    ?>
                      <option value="<?php echo $r['category_id'] ?>"><?php echo $r['category_nama'] ?></option>
                    <?php } ?>
                  </select>

                  <input type="text" name="nama" class="input-control" placeholder="Nama Produk" required>
                  <input type="text" name="harga" class="input-control" placeholder="Harga" required>
                  <textarea name="deskripsi" class="input-control" placeholder="Deskripsi"></textarea><br>
                  <input type="file" name="gambar" class="input-control"  required>
                  <select name="status" class="input-control ">
                    <option value="">--Pilih--</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                  </select>
                    <input type="submit" name="submit" value="Submit" class="btn btn-success">
                </form>
                <?php
                    if(isset($_POST['submit'])){
                       $kategori  = $_POST['kategori'];
                       $nama      = $_POST['nama'];
                       $harga     = $_POST['harga'];
                       $deskripsi = $_POST['deskripsi'];
                       $status    = $_POST['status'];

                       // data file yang di upload
                       $filename = $_FILES['gambar']['name'];
                       $tmp_name = $_FILES['gambar']['tmp_name'];

                       $type1 = explode('.', $filename);
                       $type2 = $type1[1];

                       $newname = 'Produk'.time().'.'.$type2;

                       //format yang diizinkan
                       $tipe_diizinkan = array('jpg', 'jpeg', 'png', 'gif');

                       //validasi file
                       if(!in_array($type2, $tipe_diizinkan)){
                        
                        echo '<script>alert("Format file tidak diizinkan")</script>';                    
                      }else{
                        move_uploaded_file($tmp_name, './produk/'.$newname);

                        $insert = mysqli_query($conn, "INSERT INTO tb_product VALUE (
                          null,
                          '".$kategori."',
                          '".$nama."',
                          '".$harga."',
                          '".$deskripsi."',
                          '".$newname."',
                          '".$status."',
                          null )");

                        if($insert){
                          echo '<script>alert("Tambah Data Produk Berhasil")</script>';
                          echo '<script>window.location="data-produk.php"</script>';
                        }else{
                          echo 'gagal ',mysqli_error($conn);
                        }
                      }


                    
                    }
                ?>
            </div>
        </div>
    </div>
    <!-- End content -->

    <!-- footer -->
    <footer>
        <div class="container">
            <small>Copyright &copy; Dobu Garage 2022.</small>
        </div>
    </footer>
    <!-- end footer -->
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
    <!-- CKEditor -->
    <script>CKEDITOR.replace( 'deskripsi' );</script>
  </body>
</html>