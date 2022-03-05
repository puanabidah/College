<?php 

session_start();

if( !isset($_SESSION["log"]) ) {
	header("Location: login.php");
	exit;
}
if(isset($_SESSION['username'])){
		$username=$_SESSION['username'];
		exit;
	}

//menghubungkan ke file functions.php
require('functions.php');

// panggil function query utk mengambil data
$buku = query("SELECT * FROM buku");

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
		}

	</style>

</head>
<body>
	<!-- Akhir Home -->
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


	<!-- Awal Table -->
	<?php 
	if( isset($_SESSION['message']) ) : ?>
		<div class="container" style="margin-bottom: -80px;">
			<div class="alert alert-<?=$_SESSION['msg_type']?>">
				<?php 
					echo $_SESSION['message'];
					unset($_SESSION['message']);
				?>	
			</div>
		</div>
	<?php endif ?>

	<!-- Awal Home -->
	<div class="container">

		<h1 style="margin-bottom: 20px;">DATA BUKU</h1>
		<table class="table table-striped text-center">
		<a href="tambah.php" class="btn btn-primary" style="margin-bottom: 15px;">Tambah Buku</a>	
		  <thead>
		    <tr>
		      <th scope="col">No.</th>
		      <th scope="col">Nama Buku</th>
		      <th scope="col">Genre</th>
		      <th scope="col">Harga Peminjaman</th>
		      <th scope="col">Aksi</th>
		    </tr>
		  </thead>
		  <tbody>
		  	<?php $i = 1; ?>
		  	<?php foreach ( $buku as $row ) : ?>
		    <tr>
		      <th scope="row"><?= $i ?></th>
		      <td><?= $row["nama"] ?></td>
		      <td><?= $row["genre"] ?></td>
		      <td><?= $row["harga"] ?></td>
		      <td>
		      	<a href="ubah.php?id= <?= $row["id"]; ?>" class="btn btn-primary">Ubah</a>
		      	<a href="hapus.php?id= <?= $row["id"]; ?>" onclick="return confirm('Apakah Anda yakin akan menghapus data ini?');" class="btn btn-danger">Hapus</a>
		      </td>
		    </tr>
		    <?php $i++; ?>
		<?php endforeach; ?>
		  </tbody>
		</table>
	</div>
	<!-- Akhir Table -->





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