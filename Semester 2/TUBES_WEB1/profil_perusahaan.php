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

    <!-- Awal Table Perusahaan -->
    <div class="container">
        <h1 style="margin-bottom: 20px;">PROFIL NUNO</h1>
        <table class="table table-striped">
          <tbody>
            <tr class="text-center">
              <td><img src="img/perusahaan.jpg" width="800px" height="500px"></td>
            </tr>
            <tr>
              <td class="text-center">Nuno adalah sebuah perusahaan baru yang didirikan sejak tahun 2021 dan buka 24 jam secara online. <br>
              Kami sadar bahwa minat membaca rakyat Indonesia tergolong rendah, sehingga kami datang membantu untuk meningkatkan minat membaca. Dengan sistem yang kami buat sedemikian rupa, pembaca akan merasa nyaman dan betah untuk membaca berjam-jam serta mendapatkan pengalaman membaca yang luar biasa, ilmu yang didapat pun akan semakin banyak. Itulah tujuan kami untuk mencerdaskan rakyat Indonesia menjadi lebih maju lagi salah satunya dengan membaca. Maka dari itu mari bangun kebiasaan itu dengan mulai dengan membaca di Nuno.</td>
            </tr>
          </tbody>
        </table>
    </div>
    <!-- Akhir Table Perusahaan -->





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