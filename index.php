<?php  
include('header.php');?>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="index_css.css">
</head>

<body style="background-color: #f9fbff;">
  <!-- Navigation -->


  <header>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active" style="background-image:url(assets/startup_carousel.png)">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">We crowdfund amazing inventions</h2>
            <a href="start_project.php" class="btn btn-outline-success" style="color: white;" >Start your project</a>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url(assets/investor2.jpg)">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">Fund campaigns you love</h2>
            <a href="explore.php" class="btn btn-outline-success" style="color: white;" >Become an investor</a>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item" style="background-image: url(assets/mentor2.jpg)">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">Help upcoming startups</h2>
            <p class="lead">Become a mentor</p>
            <p class="lead">Join the engineering team</p>
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
  </header>

  <footer class="footer" style="background-color: #b4d9f7;">
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="index.php"> Crowdfundr.com</a>
    </div>
  </footer>



  <!-- Page Content -->



  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <!--  Always Download latest version of Boostrap and add here-->
  <script src="bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</body>


</html>
