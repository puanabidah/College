<?php
    require_once( "sparqllib.php" );

    $db = sparql_connect( "http://localhost:3030/uaslab_" );
    if( !$db ) { print sparql_errno() . ": " . sparql_error(). "\n"; exit; }

    sparql_ns("rdf", "http://www.w3.org/1999/02/22-rdf-syntax-ns#");
    sparql_ns("rdfs", "http://www.w3.org/2000/01/rdf-schema#");
    sparql_ns("dbo", "http://dbpedia.org/ontology/");
    sparql_ns("dc", "http://purl.org/dc/elements/1.1/");
    sparql_ns("wiki", "https://en.wikipedia.org/wiki/");
    sparql_ns("schema", "http://schema.org/");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- sosmed icons dari awesome fonts web-->
    <link rel="stylesheet" href="css-icon/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700&family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    
    <link rel="shortcut icon" type="x-icon" href="images/image3.svg">
    <title>Taylor Swift</title>
    <!-- <style>
        .nav-tabs .nav-link .active {
          back
        }
    </style> -->
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
      <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand " href="#homepage" style="font-style: italic;">TAYLOR SWIFT</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav" style="font-style: italic; font-size: 21px;">
          <li class="nav-item active">
            <a class="nav-link anchor" href="#about1">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link anchor" href="#video">VIDEOS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link anchor" href="#music">MUSICS</a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto" style="font-size: 21px;">
          <li><a href="https://www.facebook.com/TaylorSwift" class="fab fa-facebook nav-link" target="_blank"></a></li>
          <li><a href="https://twitter.com/taylorswift13" class="fab fa-twitter nav-link" target="_blank"></a></li>
          <li><a href="https://www.instagram.com/taylorswift" class="fab fa-instagram nav-link" target="_blank"></a></li>
          <li><a href="https://www.youtube.com/taylorswift" class="fab fa-youtube nav-link" target="_blank"></a></li>
          <li><a href="https://www.snapchat.com/add/taylorswift" class="fab fa-snapchat nav-link" target="_blank"></a></li>
          <li><a href="https://taylorswift.tumblr.com/" class="fab fa-tumblr nav-link" target="_blank"></a></li>
        </ul>
      </div>
    </nav>

    <div class="container-fluid" id="homepage">
        <img class="image1" src="images/red-desktop-v8.jpg" alt="Taylor" width="100%">
    </div>

       
      <div class="container">
          <ul class="nav nav-tabs" id="about1">
            <li class="nav-item">
              <a href="#about" class="nav-link active" role="tab" data-toggle="tab" >About</a>
            </li>   
            <li class="nav-item">
              <a href="#bio" class="nav-link" role="tab" data-toggle="tab">Biography</a>
            </li>
            <li class="nav-item">
              <a href="#album" class="nav-link" role="tab" data-toggle="tab">Album</a>
            </li>
          </ul>  
          
          <div class="tab-content">
              <!-- Awal About -->
              <div role="tabpanel2" class="tab-pane active" id="about">
                  <div class="row border g-0 border-danger rounded shadow-sm p-3 mb-5">
                      <div class="col p-4">
                        <h1 class="display-4">Hello Swifties!</h1>
                        <p class="lead text-justify">This is an unofficial website from Fans of Taylor Swift. We give you some information about the biography, musics, and other informations that related to Taylor. Don't forget always support Taylor and Keep streaming guys!</p>
                      </div>
                      <div class="col-auto">
                        <img src="images/imagee1.png" alt="taylor" class="img-thumbnail">
                      </div>
                  </div>
              </div>
              <!-- Akhir About -->

              <!--  Awal Table Biography -->
              <div role="tabpanel1" class="tab-pane" id="bio">
                <div class="row border g-0 border-danger rounded shadow-sm p-3 mb-5">
                    <div class="col p-4">
                    <table class="table text-center">
                            <thead>
                              <tr>
                                <th class="col-sm-2">Name</th>
                                <th class="col-sm-2">Birth Date</th>
                                <th class="col-sm-2">Birth Place</th>
                                <th class="col-sm-1">Nationality</th>
                                <th class="col-sm-1">Profession</th>
                                <th class="col-sm-2">Genre Music</th>
                                <th class="col-sm-2">Albums</th>
                              </tr>
                            </thead>
                          <?php $sparql = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                                          PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                                          prefix dbo: <http://dbpedia.org/ontology/>
                                          prefix schema: <http://schema.org/>
                                          prefix wiki: <http://en.wikipedia.org/wiki/>
                                          prefix dc: <http://purl.org/dc/elements/1.1/>

                                          SELECT ?Name ?birthDate ?birthPlace ?nationality ?profession ?type ?Album
                                          WHERE {
                                            <https://en.wikipedia.org/wiki/Taylor_Swift>  rdfs:label ?Name ;
                                                                                          schema:birthDate ?birthDate ;
                                                                                          dbo:birthPlace ?birthPlace ;
                                                                                          wiki:nationality ?nationality ;
                                                                                          wiki:profession ?profession ;
                                                                                          dc:type ?type ;
                                                                                          schema:MusicAlbum ?Album .
                                                                                          
                                          } "; 
                          $result = sparql_query( $sparql ); 
                          $fields = sparql_field_array( $result );
                          while( $row = sparql_fetch_array( $result ) ) 
                              {
                          ?>
                          <tbody>
                            <tr class="text-justify">
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
                </div>
                
              </div>
              <!--  Akhir Table Biography -->

              <!-- Awal Table Album -->
              <div role="tabpanel2" class="tab-pane" id="album">
                  <div class="row border g-0 border-danger rounded shadow-sm p-3 mb-5">
                      <div class="col p-4">
                            <table class="table text-center">
                                <thead>
                                  <tr>
                                    <th class="col-sm-1">No</th>
                                    <th class="col-sm-3">Name of Album</th>
                                    <th class="col-sm-2">Date Realease</th>
                                    <th class="col-sm-1">Publisher</th>
                                    <th class="col-sm-2">Genre Album</th>
                                    <th class="col-sm-3">Single</th>
                                  </tr>
                                </thead>

                              <?php $sparql = "PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>
                                              PREFIX rdfs: <http://www.w3.org/2000/01/rdf-schema#>
                                              prefix dbo: <http://dbpedia.org/ontology/>
                                              prefix schema: <http://schema.org/>
                                              prefix wiki: <http://en.wikipedia.org/wiki/>
                                              prefix dc: <http://purl.org/dc/elements/1.1/>

                                              SELECT ?Name ?Date ?Publisher ?type ?Single
                                              WHERE {
                                              ?s  rdfs:label ?Name ;
                                                  dc:date ?Date ;
                                                  dc:publisher ?Publisher ;
                                                  dc:type ?type ;
                                                  dbo:single ?Single .                                               
                                              }  "; 
                              $nomor = 1;
                              $result = sparql_query( $sparql ); 
                              $fields = sparql_field_array( $result );
                              while( $row = sparql_fetch_array( $result ) ) 
                                  {
                              ?>

                            
                                <tbody>
                                  <tr>
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
                  </div>
              </div>
              <!--  Akhir Table Albun -->
          </div>
      </div>

      <!-- Awal Carousel -->
      <div class="container formargin">
        <h1 class="display-4 text-center " id="video">Enjoy The videos!</h1>
        <div id="carouselExampleIndicators" class="carousel slide formargin2" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
            <div class="embed-responsive embed-responsive-21by9">
                    <iframe width="500" height="430" class="embed-responsive-item d-block w-100" src="https://www.youtube.com/embed/tollGa3S0o8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="First slide"></iframe>
                </div>
            </div>
            <div class="carousel-item">
            <div class="embed-responsive embed-responsive-21by9">
                        <iframe width="500" height="315" class="embed-responsive-item d-block w-100" src="https://www.youtube.com/embed/gRo0ZtgB2io" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="Second slide"></iframe>
                </div>
            </div>
            <div class="carousel-item">
            <div class="embed-responsive embed-responsive-21by9">
                        <iframe width="500" height="315" class="embed-responsive-item d-block w-100" src="https://www.youtube.com/embed/pPrdGE4w9ZM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"  allowfullscreen alt="Second slide"></iframe>
                </div>
            </div>
            <div class="carousel-item">
            <div class="embed-responsive embed-responsive-21by9">
                        <iframe width="500" height="315" class="embed-responsive-item d-block w-100" src="https://www.youtube.com/embed/r0yq_yXFQhg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="Second slide"></iframe>
                </div>
            </div>
            <div class="carousel-item">
            <div class="embed-responsive embed-responsive-21by9">
                        <iframe width="500" height="315" class="embed-responsive-item d-block w-100" src="https://www.youtube.com/embed/UDzPTerKZn8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen alt="Second slide"></iframe>
                </div>
            </div>
            
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
</div>
       <!-- Akhir Carousel -->
    
       <!-- Awal Card -->
       <div class="container formargin" id="music">    
        <h1 class="display-4 text-center">Latest Realeses</h1>
       </div>
       <div class="d-flex justify-content-center">
         <div class="row formargin2">
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-color: red;">
                  <img class="card-img-top" src="images/fearless.png" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title text-center">Fearless (Taylor's Version)</h4>
                    <p class="card-text text-justify">This is re-recorded album, released on April 9, 2021, through Republic Records</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalFearless">Listen Now</button>
                  </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-color: red;">
                  <img class="card-img-top" src="images/evermore.png" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title text-center">Evermore</h4>
                    <p class="card-text text-justify">This is her ninth studio album. It was released on December 11, 2020, through Republic Records</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalEvermore">Listen Now</button>
                  </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card" style="width: 18rem; border-color: red;">
                  <img class="card-img-top" src="images/folklore.png" alt="Card image cap">
                  <div class="card-body">
                    <h4 class="card-title text-center">Folklore</h4>
                    <p class="card-text text-justify">This is her eighth studio album. It was a surprise album, released on July 24 2020, via Republic Records</p>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#ModalFolklore">Listen Now</button>
                  </div>
                </div>
            </div>

         </div>
       </div>      
       <!-- Akhir Card -->


      <!-- Awal Modal untuk Card Pertama -->
      <div class="modal fade" id="ModalFearless" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Choose music server</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row pt-4 pb-4 pl-5 pr-5">
                <div class="col">
                  <img src="images/spotify.png" alt="spotify" style="width:100px; height:30px;">
                </div>
                <div class="col-2">
                <a href="https://open.spotify.com/album/4hDok0OAJd57SGIT8xuWJH" class="btn btn-outline-dark" target="_blank">Play</a>
                </div>
              </div>

              <div class="row pt-4 pb-4 pl-5 pr-5">
                <div class="col">
                  <img src="images/joox.png" alt="joox" style="width:100px; height:30px;">
                </div>
                <div class="col-2">
                <a href="https://www.joox.com/id/album/FayRf_2yEGm30pa5Y6mHJA==" class="btn btn-outline-dark" target="_blank">Play</a>
                </div>
              </div>

              <div class="row pt-4 pb-4 pl-5 pr-5">
                <div class="col">
                  <img src="images/apple.png" alt="apple" style="width:50px; height:50px;">
                </div>
                <div class="col-2">
                <a href="https://music.apple.com/id/album/1552791073?uo=4&app=music&at=11l5V7&lId=22822580&cId=WE&sr=3&src=Linkfire&itscg=30440&itsct=catchall_p3&ct=LFV_441fb24f29303026a15b016a2c6f34ce&ls=1" class="btn btn-outline-dark" target="_blank">Play</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Modal untuk Card Pertama -->

      <!-- Awal Modal untuk Card Kedua -->
      <div class="modal fade" id="ModalEvermore" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Choose music server</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row pt-4 pb-4 pl-5 pr-5">
                <div class="col">
                  <img src="images/spotify.png" alt="spotify" style="width:100px; height:30px;">
                </div>
                <div class="col-2">
                <a href="https://open.spotify.com/album/6AORtDjduMM3bupSWzbTSG" class="btn btn-outline-dark" target="_blank">Play</a>
                </div>
              </div>

              <div class="row pt-4 pb-4 pl-5 pr-5">
                <div class="col">
                  <img src="images/joox.png" alt="joox" style="width:100px; height:30px;">
                </div>
                <div class="col-2">
                <a href="https://www.joox.com/id/album/SL3ZMzcGm+EvvmYrJuwdiw==" class="btn btn-outline-dark" target="_blank">Play</a>
                </div>
              </div>

              <div class="row pt-4 pb-4 pl-5 pr-5">
                <div class="col">
                  <img src="images/apple.png" alt="apple" style="width:50px; height:50px;">
                </div>
                <div class="col-2">
                <a href="https://music.apple.com/id/album/1547315522?uo=4&app=music&at=11l5V7&lId=22729963&cId=WE&sr=1&src=Linkfire&itscg=30440&itsct=catchall_p1&ct=LFV_5671625835b274ac0e48c4a5edaf0ba6&ls=1" class="btn btn-outline-dark" target="_blank">Play</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Modal untuk Card Kedua -->

      <!-- Awal Modal untuk Card Ketiga -->
      <div class="modal fade" id="ModalFolklore" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Choose music server</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row pt-4 pb-4 pl-5 pr-5">
                <div class="col">
                  <img src="images/spotify.png" alt="spotify" style="width:100px; height:30px;">
                </div>
                <div class="col-2">
                <a href="https://open.spotify.com/album/2fenSS68JI1h4Fo296JfGr" class="btn btn-outline-dark" target="_blank">Play</a>
                </div>
              </div>

              <div class="row pt-4 pb-4 pl-5 pr-5">
                <div class="col">
                  <img src="images/yt.png" alt="youtube" style="width:100px; height:30px;">
                </div>
                <div class="col-2">
                <a href="https://www.youtube.com/watch?v=K-a8s8OLBSE&list=PLINj2JJM1jxNNBnGb3WvHmcyCyfl0VlJX" class="btn btn-outline-dark" target="_blank">Play</a>
                </div>
              </div>

              <div class="row pt-4 pb-4 pl-5 pr-5">
                <div class="col">
                  <img src="images/apple.png" alt="apple" style="width:50px; height:50px;">
                </div>
                <div class="col-2">
                <a href="https://music.apple.com/us/album/1524801260?ign-itscg=30440&ign-itsct=catchall_p2" class="btn btn-outline-dark" target="_blank">Play</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
      <!-- Akhir Modal untuk Card Ketiga -->
    
    <!-- Awal footer -->
    <footer class="bg-light text-center text-lg-start formargin">
      <div class="text-center p-3" style="background-color: #982b2e; color:#c9bcb2">
        © 2020 Copyright :
        <a  href="https://www.instagram.com/puanarash/?hl=en" target="_blank">Puan Abidah</a>
      </div>
    </footer>
    <!-- Akhir footer -->
      



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>