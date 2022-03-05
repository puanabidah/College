<?php 

session_start();

require('functions.php');

// cek apakah tombol login sudah ditekan atau belum
if( isset($_POST["login"]) ) {
	// menangkap data username dan password dari post nya
	$username = $_POST["username"];
	$password = $_POST["password"];

	//cek apakah ada username dalam database yang sama dengan username yang dimaksukkan user
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

	// cek usernamenya 
	if( mysqli_num_rows($result) === 1 ) {

		//cek password
		$row = mysqli_fetch_assoc($result);
		$cek_pass = $row["password"];

		//membandingkan password yang di input user dengan yang ada di database
		if( $cek_pass <> $password ) {
			echo "<script>alert('password salah'); </script>";
		}
		else {
			echo "<script>alert('Login berhasil'); </script>";
			// set session
			$_SESSION["log"] = true;

			header("location: index1.php");
		}
	}
	else {
			echo "<script>alert('username belum terdaftar'); </script>";
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
	<link rel="stylesheet" href="css/style_login.css">
	<title>Login</title>

</head>
<body>
	<!-- Awal Home -->
	<div id="home">
		<!-- Awal Navigasi -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="index.php"><img src="img/nuno.png" alt=""></a>
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


	<!-- Awal Form Login -->
	<div class="container">
        <form class="login-username" action="" method="post">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="text" for="username" placeholder="Username" name="username" id="username" required>
            </div>
            <div class="input-group">
                <input type="password" for="password" placeholder="Password" name="password" id="password" required>
            </div>
            <div class="input-group">
                <button class="btn" type="submit" name="login">Login</button>
            </div>
            <p class="login-register-text">Ini hanya untuk Admin saja.</p>
        </form>
    </div>
	<!-- Akhir Form Login -->





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