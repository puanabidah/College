<!DOCTYPE html>
<html lang="en">
<head>

     <title>Gymso Fitness HTML Template</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/font-awesome.min.css">
     <link rel="stylesheet" href="css/aos.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="css/tooplate-gymso-style.css">
<!--
Tooplate 2119 Gymso Fitness
https://www.tooplate.com/view/2119-gymso-fitness
-->
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

    <!-- MENU BAR -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

            <a class="navbar-brand" href="index.html">Gymso Fitness</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-lg-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll">Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll">About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#class" class="nav-link smoothScroll">Schedule</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll">Contact</a>
                    </li>
                </ul>

                <ul class="social-icon ml-lg-3">
                    <li><a href="https://fb.com/tooplate" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>

        </div>
    </nav>


     <!-- HERO -->
     <section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

            <div class="bg-overlay"></div>

               <div class="container">
                    <div class="row">

                         <div class="col-lg-8 col-md-10 mx-auto col-12">
                              <div class="hero-text mt-5 text-center">

                                    <h6 data-aos="fade-up" data-aos-delay="300">Don't Forget Our Schedule!</h6>

                                    <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">Welcome To Our Schedule</h1>                      

                                    <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">learn more</a>
                                   
                              </div>
                         </div>

                    </div>
               </div>
     </section>


     


     <!-- ABOUT -->
     <section class="about section" id="about">
               <div class="container">
                    <div class="row">

                            <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                                <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Gymso</h2>

                                <p data-aos="fade-up" data-aos-delay="400">You are NOT allowed to redistribute this HTML template downloadable ZIP file on any template collection site. You are allowed to use this template for your personal or business websites.</p>

                                <p data-aos="fade-up" data-aos-delay="500">If you have any question regarding <a rel="nofollow" href="https://www.tooplate.com/view/2119-gymso-fitness" target="_parent">Gymso Fitness HTML template</a>, you can <a rel="nofollow" href="https://www.tooplate.com/contact" target="_parent">contact Tooplate</a> immediately. Thank you.</p>

                            </div>

                            <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                                <div class="team-thumb">
                                    <img src="images/team/team-image.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Mary Yan</h3>
                                        <span>Yoga Instructor</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-twitter"></a></li>
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                                <div class="team-thumb">
                                    <img src="images/team/team-image01.jpg" class="img-fluid" alt="Trainer">

                                    <div class="team-info d-flex flex-column">

                                        <h3>Catherina</h3>
                                        <span>Body trainer</span>

                                        <ul class="social-icon mt-3">
                                            <li><a href="#" class="fa fa-instagram"></a></li>
                                            <li><a href="#" class="fa fa-facebook"></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                    </div>
               </div>
     </section>


     <!-- SCHEDULE -->
     <section class="class section" id="class">
               <div class="container">
                    <div class="col-lg-12 col-12 text-center mb-5">

                                <h2 data-aos="fade-up" data-aos-delay="200">JADWAL KOM A SEMESTER GANJIL 2021</h2>
                    </div>
                    <table class="table">
                      <thead class="text-center">
                        <tr>
                          <th scope="col">No</th>
                          <th scope="col">Kode Mata Kuliah</th>
                          <th scope="col">Nama Mata Kuliah</th>
                          <th scope="col">Dosen</th>
                          <th scope="col">Hari</th>
                          <th scope="col">Jam</th>
                        </tr>
                      </thead>

                      <?php
                    require_once( "sparqllib.php" );

                    $nomor = 1;
                    $db = sparql_connect( "http://localhost:3030/tubes_sw/query" );
                    if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

                    sparql_ns( "foaf","http://xmlns.com/foaf/0.1/" );
                    sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
                    sparql_ns("rdfs", "http://www.w3.org/2000/01/rdf-schema#");


                      $sparql = "prefix dbo:<http://dbpedia.org/ontology/>
                    prefix dbd:<https://dbpedia.org/datatype/>
                    prefix dc:<http://purl.org/dc/elements/1.1/>
                    SELECT ?Code ?Title ?Teacher ?Day ?Time
                    WHERE {
                      ?s dc:subject ?Code .
                      ?s dc:title ?Title .
                      ?s dbo:name ?Teacher .
                      ?s dbd:day ?Day .
                      ?s dbo:time ?Time .
                    }";

                       $result = sparql_query( $sparql ); 
                       $fields = sparql_field_array( $result );

                       while( $row = sparql_fetch_array( $result ) )
                    {
                       ?>

                      <tbody>
                        <tr class="text-justify">
                          <th scope="row"><?php echo $nomor++ ?></th>
                          <?php foreach( $fields as $field )
                            {
                                print "<td>$row[$field]</td>";
                            } 
                          ?>
                        </tr>
                      </tbody>
                      <?php  

                        }

                       ?>
                    </table>
               </div>
     </section>




     <!-- CONTACT -->
     <section class="contact section" id="contact">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>
                    </div>

                    <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                        <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                        <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> 120-240 Rio de Janeiro - State of Rio de Janeiro, Brazil</p>
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
                        <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                           <iframe src="https://maps.google.com/maps?q=Av.+Lúcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    
               </div>
          </div>
     </section>


     <!-- FOOTER -->
     <footer class="site-footer">
          <div class="container">
               <div class="row">

                    <div class="ml-auto col-lg-4 col-md-5">
                        <p class="copyright-text">Copyright &copy; 2020 Gymso Fitness Co.
                        
                        <br>Design: <a href="https://www.tooplate.com">Tooplate</a></p>
                    </div>

                    <div class="d-flex justify-content-center mx-auto col-lg-5 col-md-7 col-12">
                        <p class="mr-4">
                            <i class="fa fa-envelope-o mr-1"></i>
                            <a href="#">hello@company.co</a>
                        </p>

                        <p><i class="fa fa-phone mr-1"></i> 010-020-0840</p>
                    </div>
                    
               </div>
          </div>
     </footer>

    <!-- Modal -->
    <div class="modal fade" id="membershipForm" tabindex="-1" role="dialog" aria-labelledby="membershipFormLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">

            <h2 class="modal-title" id="membershipFormLabel">Membership Form</h2>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>

          <div class="modal-body">
            <form class="membership-form webform" role="form">
                <input type="text" class="form-control" name="cf-name" placeholder="John Doe">

                <input type="email" class="form-control" name="cf-email" placeholder="Johndoe@gmail.com">

                <input type="tel" class="form-control" name="cf-phone" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>

                <textarea class="form-control" rows="3" name="cf-message" placeholder="Additional Message"></textarea>

                <button type="submit" class="form-control" id="submit-button" name="submit">Submit Button</button>

                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-agree">
                    <label class="custom-control-label text-small text-muted" for="signup-agree">I agree to the <a href="#">Terms &amp;Conditions</a>
                    </label>
                </div>
            </form>
          </div>

          <div class="modal-footer"></div>

        </div>
      </div>
    </div>

     <!-- SCRIPTS -->
     <script src="js/jquery.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <script src="js/aos.js"></script>
     <script src="js/smoothscroll.js"></script>
     <script src="js/custom.js"></script>

</body>
</html>
