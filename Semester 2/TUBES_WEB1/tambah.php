<?php 

session_start();

if( !isset($_SESSION["log"]) ) {
  header("Location: login.php");
  exit;
}

require('functions.php');
  // cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
  

  // cek apakah data berhasil ditambahkan atau tidak
    if ( tambah($_POST) > 0 ) {
      ?>
      <div class="container" style="margin-bottom: -80px;">
        <div class="alert alert-success" role="alert">
          Record was inserted successfully!
        </div>
      </div>
      <?php  
    }
    else {
      ?>
      <div class="container" style="margin-bottom: -80px;">
        <div class="alert alert-danger" role="alert">
          SORRY! ERROR while inserting record !
        </div>
      </div>
      <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fixed.css">

  <title>Tabel Buku CRUD</title>

  <style>
    .container {
      margin-top: 100px;
      font-size: 18px;
    }

  </style>

</head>
<body>
    <!-- Awal Home -->
    <div id="home">
    
      <!-- Awal Navigasi -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html"><img src="img/nuno.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span> 
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto"> <!-- meaning margin-left auto -->
            <li class="nav-item">
              <a class="nav-link"  href="logout.php" onclick="return confirm('Apakah anda yakin ingin logout?')">Logout</a>
            </li>
          </ul> 
        </div>
      </nav>
      <!-- Akhir Navigasi -->
    </div>
    <!-- Akhir Home -->

    <!-- Awal Form Tambah -->
    <div class="container">
        <form action="" method="post">
          <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Buku</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nama" id="nama" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="genre" class="col-sm-2 col-form-label">Genre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="genre" id="genre" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="harga" class="col-sm-2 col-form-label">Harga Peminjaman</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="harga" id="harga" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <a href="index1.php" class="btn btn-success">Kembali</a>
              <button type="submit" name="submit" class="btn btn-primary">Tambah</button>
            </div>
          </div>
        </form>
    </div>
    <!-- Akhir Form Tambah -->





    <!-- awal footer section-->
    <div id="contact" class="offset">
      <footer>
        <div class="row justify-content-center">
          <div class="col-md-5 text-center">
            <img class="logo" src="img/nuno.png">
            <p>"Pembaca nyaman, Kami pun senang."</p>
            <strong>Contact Info</strong>
            <p>(888) 888-8888 <br> email@nuno.com</p>

            <a class="ikon" href="https://web.facebook.com/profile.php?id=100007666605125" target="_blank"><img src="img/facebook.svg" style="width: 30px"></a>
            <a class="ikon" href="https://twitter.com/ramyeoonnn" target="_blank"><img src="img/twitter.svg" style="width: 30px"></a>
            <a class="ikon" href="https://www.instagram.com/puanarash/" target="_blank"><img src="img/instagram.svg" style="width: 30px"></a>
          </div>

          <hr class="socket">
          &copy; Nuno Books.
        </div> <!-- end of row -->
      </footer>
    </div> <!-- Akhir footer section-->

    

    <!-- Script Source Files -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="h\https://use.fontawesome.com/releases/v5.15.3/js/all.js"></script>

</body>
</html>