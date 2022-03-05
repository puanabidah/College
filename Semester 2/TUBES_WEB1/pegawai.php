<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fixed.css">

  <title>Profil Pegawai</title>

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
            <a class="nav-link" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>       
          <li class="nav-item">
            <a class="nav-link"  href="index.php#books">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil_perusahaan.php">Profile</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link"  href="pegawai.php">Pegawai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href=login.php>Login</a>
          </li>
          </ul> 
        </div>
      </nav>
      <!-- Akhir Navigasi -->
    </div>
    <!-- Akhir Home -->

    <!-- Awal Table Pegawai -->
    <div class="container">
        <h1 style="margin-bottom: 20px;">PROFIL PEGAWAI</h1>
        <table class="table table-striped">
          <thead>
            <tr class="text-center">
              <th scope="col">No.</th>
              <th scope="col">Gambar</th>
              <th scope="col">Nama</th>
              <th scope="col">NIM</th>
              <th scope="col">Email</th>
              <th scope="col">Alamat</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td><img src="img/puan.jpg" width="120px" height="170px"></td>
              <td>Puan Abidah Nitisara</td>
              <td>201401009</td>
              <td>puanabidah01@gmail.com</td>
              <td>Jl. Muspika, Batang Kuis</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td><img src="img/ayu.jpeg" width="120px" height="170px"></td>
              <td>Ayu Wulandari</td>
              <td>201401021</td>
              <td>ayuw0866@gmail.com</td>
              <td>Jl Starban polonia link X, Medan </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td><img src="img/ainun.jpeg" width="120px" height="170px"></td>
              <td>Ainun Mardiah</td>
              <td>201401001</td>
              <td>mardiahainun314@gmail.com</td>
              <td>Jl gulama, Medan Belawan</td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td><img src="img/lia.jpg" width="120px" height="170px"></td>
              <td>Siti Aulia Nabila</td>
              <td>201401013</td>
              <td>sitiaulianabila892@gmail.com</td>
              <td>Panyabungan kota, Mandailing Natal</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td><img src="img/siti.jpeg" width="120px" height="170px"></td>
              <td>Siti Jubaidah Munthe</td>
              <td>201401014</td>
              <td>sitijubaidahmunthe@gmail.com</td>
              <td>Aek Natas, Labuhan Batu Utara</td>
            </tr>
          </tbody>
        </table>
    </div>
    <!-- Akhir Table Pegawai -->





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

</body>
</html>