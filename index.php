<?php
session_start();
include("connection.php");
?>

<html>
    <head>
        <title>SDA Mini Project</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href=“https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css”/>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="js/smooth-scroll.js"></script>







    </head>
<body>
  
<!---------------------Navigation Bar-------------------->
<br style="font-size:5px;">
<section id="nav-bar " >
  <nav class="navbar navbar-expand-lg navbar-light"  style="background-color:skyblue; ">
      <a class="navbar-brand" href="#" Style="decorate:none;color:white;">Movie Ticket Booking System-SDA Mini Project</a>
      
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            
          <li class="nav-item active">
            <a class="nav-link" href="#slider">HOME</a>
          </li>
          <?php  if(isset($_SESSION['username'])){
            echo " <li class=\"nav-item active\"> 
              <a class=\"nav-link\" href=\"logout.php\"> LOG OUT(" .$_SESSION['username']. ") </a> 
            </li> ";
            }else{ 
             echo " <li class=\"nav-item active\">
                <a class=\"nav-link\" href=\"login.php\"> LOG IN </a>
              </li> ";
            } ?>
            <li class="nav-item active">
                  <a class="nav-link" href="#top">TOP MOVIES</a>
                </li>
          
          
        </ul>
      </div>
    </nav>
</section>
<br style="font-size:5px;">

<!-----------------corousal(image slider)------------------------------------------->
<div id="slider">
  <div id="headerSlider" class="carousel slide" data-ride="carousel"  style="border-radius:15px; border:2px solid white; margin:5px; ">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            
            <div class="carousel-item active">
              <img src="media/images/colorphoto.jpg" class="d-block w-100" alt="..."style="border-radius:15px; border:2px solid white; margin:5px; ">
              
              <div class="carousel-caption d-none d-md-block">
                <h5>Colour Photo</h5>
              
              </div>
            </div>
            <div class="carousel-item">
              <img src="media/images/alv.jpg" class="d-block w-100" alt="..."style="border-radius:15px; border:2px solid white; margin:5px; ">
              <div class="carousel-caption d-none d-md-block">
                <h5>Ala vaikuntapuramlo</h5>
               
              </div>
            </div>
            <div class="carousel-item">
              <img src="media/images/vs1.jpg" class="d-block w-100" alt="..."style="border-radius:15px; border:2px solid white; margin:5px; ">
              <div class="carousel-caption d-none d-md-block">
                <h5>VakeelSaab</h5>
                
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#headerSlide" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#headerSlide" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
  </div>
</div>

<!----------------------top movies--------------------------->
<section id="top">
  <div class="container">
    <h1>TOP MOVIES</h1>
    <br>
    <h4>PVP, Vijayawada</h4>
      <div class="row">
        <div class="col-md-3">
          <div class="single-movie">
              <div class="name">
                  <h2>Alavaikutapuramlo</h2>
                  <p>2hr:30min</p>
                </div>
                <div class="image">
                  <img src="media/images/ala.jpg" alt="">
                </div>
                <div class="button">
                  <a href="movies/alv.html" class="buy-btn" style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                </div>
          </div>
        </div>
        <div class="col-md-3">
            <div class="single-movie">
                <div class="name">
                    <h2>KGF</h2>
                    <p>2hr:30min</p>
                  </div>
                  <div class="image">
                    <img src="media/images/kgf1.jpg" alt="">
                  </div>
                  <div class="button">
                    <a href="avenger_book.php" class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                  </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>Sarileruneekavvaru</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="media/images/sln1.jpg" alt="">
                    </div>
                    <div class="button">
                      <a href="avenger_book.php" class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                    </div>
              </div>
            </div>
            <div class="col-md-3">
                <div class="single-movie">
                    <div class="name">
                        <h2>Baahubali 2</h2>
                        <p>2hr:30min</p>
                      </div>
                      <div class="image">
                        <img src="media/images/bb2.jpg" alt="">
                      </div>
                      <div class="button">
                        <a href="avenger_book.php" class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                      </div>
                </div>
              </div>
      </div>
      <br>
      <h4>PVR, Vijayawada</h4>
      <div class="row">
          <div class="col-md-3">
            <div class="single-movie">
                <div class="name">
                    <h2>Saaho</h2>
                    <p>2hr:30min</p>
                  </div>
                  <div class="image">
                    <img src="media/images/saaho.jpg" alt="">
                  </div>
                  <div class="button">
                    <a href="avenger_book.php"  class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                  </div>
            </div>
          </div>
          <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>2.0</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="media/images/robo.jpeg" alt="">
                    </div>
                    <div class="button">
                      <a href="avenger_book.php"  class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                    </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>V</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="media/images/v.jpeg" alt="">
                    </div>
                    <div class="button">
                      <a href="avenger_book.php"  class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                    </div>
              </div>
            </div>
              <div class="col-md-3">
                <div class="single-movie">
                    <div class="name">
                        <h2>Rangasthalam</h2>
                        <p>2hr:30min</p>
                      </div>
                      <div class="image">
                        <img src="media/images/rng.jpeg" alt="">
                      </div>
                      <div class="button">
                        <a href="avenger_book.php"  class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                      </div>
                </div>
              </div>
        </div>
        <br>
        <h4>Imax, Vijayawada</h4>
        <div class="row">
            <div class="col-md-3">
              <div class="single-movie">
                  <div class="name">
                      <h2>Jersey</h2>
                      <p>2hr:30min</p>
                    </div>
                    <div class="image">
                      <img src="media/images/jersey.jpeg" alt="">
                    </div>
                    <div class="button">
                      <a href="avenger_book.php"  class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                    </div>
              </div>
            </div>
            <div class="col-md-3">
                <div class="single-movie">
                    <div class="name">
                        <h2>Miss India</h2>
                        <p>2hr:30min</p>
                      </div>
                      <div class="image">
                        <img src="media/images/miss.jpeg" alt="">
                      </div>
                      <div class="button">
                        <a href="avenger_book.php"  class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                      </div>
                </div>
              </div>
              <div class="col-md-3">
                  <div class="single-movie">
                      <div class="name">
                          <h2>Nishabdham</h2>
                          <p>2hr:30min</p>
                        </div>
                        <div class="image">
                          <img src="media/images/nis.jpeg" alt="">
                        </div>
                        <div class="button">
                          <a href="avenger_book.php"  class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                        </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="single-movie">
                      <div class="name">
                          <h2>Maharshi</h2>
                          <p>2hr:30min</p>
                        </div>
                        <div class="image">
                          <img src="media/images/mah.jpeg" alt="">
                        </div>
                        <div class="button">
                          <a href="avenger_book.php"  class="buy-btn"style="background-color:skyblue; color:black; border:2px solid skyblue; border-radius:15px;text-decoration : none; ">BOOK NOW</a>
                        </div>
                  </div>
                </div>
          </div>
  </div>
</section>

<div align="center">
          <h3>Movie Ticket Booking System-SDA Mini Project</h3>
        </div>

<script>
    var scroll = new SmoothScroll('a[href*="#"]');
  </script>

</body>
</html>
