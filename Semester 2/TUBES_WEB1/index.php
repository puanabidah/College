<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/fixed.css">

	<title>Nuno</title>
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
	<!-- awal Home -->
	<div id="home">
	
		<!-- Navigation -->
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
			<a class="navbar-brand" href="index.php"><img src="img/nuno.png" alt=""></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>	
			</button>


			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto"> <!-- meaning margin-left auto -->
					<li class="nav-item">
						<a class="nav-link" href="#home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#about">About</a>
					</li>				
					<li class="nav-item">
						<a class="nav-link"  href="#books">Books</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#contact">Contact</a>
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

		<!-- Start of Image Slider -->
		<div id="carouselExampleIndicators" class="carousel slide" data-interval="7000">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0 " class="active"></li> 
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li> 
			</ol>
			<!-- awal carousel inner -->
			<div class="carousel-inner" role="listbox">
				<!-- slide 1 -->
				<div class="carousel-item active" style="background-image: url(img/rakbuku.jpg);">
					<div class="carousel-caption text-center">
						<h1>Welcome to Nuno</h1>
						<h3>Where You Can Read Easily</h3>
						<a class="btn btn-outline-light btn-lg" href="#course">Get Started</a>
					</div>
				</div>

				<!-- slide 2 -->
				<div class="carousel-item" style="background-image: url(img/membaca.jpg);">
					<div class="carousel-caption text-center">
						<h1>Reading is Fun</h1>
					</div>	
				</div>

			</div> <!-- akhir carousel inner -->

			<!-- prev dan next button -->
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
			</a>
		</div> <!-- akhir Image Slider -->
	</div>
	<!-- akhir Home -->

	
	<!-- awal about -->
	<section id="about" class="about">
		<div class="container">
			<div class="row content">
				<div class="col-lg-6">
					<h1>Nuno Books</h1>
					<h3>Tempat peminjaman dan membaca buku (Perpustakaan) secara online. Nuno baru saja didirikan sejak tahun 2021. Membuat Pembaca nyaman adalah tugas kami.</h3>
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0">
					<p>
					Di Nuno tersedia beberapa buku yang dapat dipinjam dan dibaca. Disini menyediakan series buku karangan dari Tere Liye, pengarang buku yang terkenal dengan karya-karya nya yang menakjubkan. Berikut beberapa judul buku yang tersedia :
				    </p>
					<ul>
						<li>Bumi</li>
						<li>Komet Minor</li>
						<li>Matahari</li>
						<li>Bintang</li>
						<li>Ceros Dan Batozar</li>
						<li>Komet</li>
					</ul>
					<p class="font-italic">
						Silahkan membaca dengan nyaman di Nuno Books..
					</p>
					
				</div>
			</div>
		</div>
	</section>


	<!-- awal Book section-->
	<div id="books" class="offset">
		<div class="col-12 text-center title">
				<h2>Books</h2>
				<div class="heading-underline"></div>
		</div>

		<div class="row padding">
			<div class="col-md-4"> 
				<div class="card">
					<img class="card-img-top" src="img/buku1.jpg">
					<div class="card-body">
						<h4 class="text-center">Bumi</h4>
						<p class="text-justify">"Menceritakan awal persahabatan ketiga tokoh utama. Diawali oleh kejadian robohnya tiang listrik di belakang sekolah, hingga pertemuan mereka dengan sosok tak terduga yang membawanya ke klan bulan--dunia paralel yang kehidupannya bersisian bumi. Petualangan menegangkan yang membawa kisah baru di kehidupan mereka."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/buku2.png">
					<div class="card-body">
						<h4 class="text-center">Komet Minor</h4>
						<p class="text-justify">"Dalam buku Komet Minor, saat tak ada lagi harapan bagi Ra, Seli dan Ali ketika di perahu mereka diikat dengan jaring perak.  Ali si genius, dengan caranya yang mengagumkan, berhasil menjatuhkan sebuah cermin kecil yang terbuat dari berlian. Berkat alat itu, ada yang melakukan teleportasi lewat portal cermin. Maka munculah Batozar – sang pengintai."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/buku3.jpg">
					<div class="card-body">
						<h4 class="text-center">Matahari</h4>
						<p class="text-justify">"Diawali dengan rasa penasaran Ali si jenius akan dunia paralel. Ia pun mempelajari segala hal yang berhubungan dengan itu. Hingga ia berhasil menemukan teori tentang klan bintang. Dengan ditemani oleh teman baru berwujud pesawat kapsul, perjalanan rahasia mereka yang tak kalah seru dari sebelumnya menjadi lebih menarik."</p>
					</div>
				</div>
			</div>

		</div>

		<div class="row padding">
			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/buku4.jpg">
					<div class="card-body">
						<h4 class="text-center">Bintang</h4>
						<p class="text-justify">"Petualangan Raib, Seli, dan Ali masih berlanjut di klan bintang. Kini mereka kembali lagi dengan misi menyelamatkan kehidupan di klan bumi. Pasak bumi yang ada di klan bulan harus ditemukan demi mencegah kehancuran bumi."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/buku5.jpg">
					<div class="card-body">
						<h4 class="text-center">Ceros Dan Batozar</h4>
						<p class="text-justify">"Kisah mereka menaklukkan dua makhluk misterius, yakni Ceros dan Batozar. Ceros si dua makhluk raksasa yang kehilangan bagian hal dari mereka, membuatnya tak dapat mengendalikan diri. Dan Batozar kriminal dari klan bulan yang kabur dan memiliki kemungkinan bersembunyi di bumi."</p>
					</div>
				</div>
			</div>

			<div class="col-md-4"> 
				<div class="card text-center">
					<img class="card-img-top" src="img/buku6.jpg">
					<div class="card-body">
						<h4 class="text-center">Komet</h4>
						<p class="text-justify">"Pertualangan tidak berhenti di klan bintang. Kini mereka harus melakukan petualangan di pulau dengan banyak tumbuhan aneh. pulau dengan nama berdasarkan nama hari. Pulau Hari Senin, Hari Selasa, hingga Hari Minggu. Bertemu dengan orang berwajah sama tetapi berbeda nama di setiap pulau."</p>
					</div>
				</div>
			</div>

		</div>

			
	</div>
	<!-- akhir Book section-->


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