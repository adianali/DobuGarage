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

    <title>Dashboard | Dobu Garage</title>
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
            <h3 class="dsh">Data Product</h3>
            <div class="box">
            <p><a href="tambah-product.php" class="btn btn-outline-primary">Tambah Product</a></p>
            <table border="1" cellspacing="0" class="table">
                <thead>
                    <tr>
                        <th width="60px">No</th>
                        <th>Kategori</th>
                        <th>Nama Product</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th width="200px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $product = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id ASC");
                        if(mysqli_num_rows($product) > 0){
                        while($row = mysqli_fetch_array($product)){
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['category_nama'] ?></td>
                        <td><?php echo $row['product_nama'] ?></td>
                        <td>Rp<?php echo number_format($row['product_price']) ?></td>
                        <td><a href="produk/<?php echo $row['product_image'] ?>" target="_blank" ><img src="produk/<?php echo $row['product_image'] ?>" width="100px"></td>
                        <td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif' : 'Aktif' ?></td>
                        <td>
                            <a href="edit-product.php?id=<?php echo $row['product_id'] ?>" class="btn btn-outline-primary">Edit</a> || 
                            <a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick="return confirm('Anda yakin ingin hapus ?')" class="btn btn-outline-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php }} else { ?>
                        <tr>
                          <td colspan="7" >Tidak Ada Data</td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>    
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
  </body>
</html>