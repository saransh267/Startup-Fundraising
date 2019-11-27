<?php include('server.php'); ?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap-grid.min.css">
  
</head>

<body>
  <!-- Navigation -->

  <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #b4d9f7;">

    <a class="navbar-brand" href="index.php">CrowdFundr</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="explore.php">Explore</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="start_project.php">Start a Project</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About us</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0" method="get" action="explore.php">
        <input class="form-control mr-sm-2" type="search" name="key" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" name="searchtbn" type="submit" style="margin-right: 25px;">Search</button>

      </form>
      <?php if (isset($_SESSION['username'])): ?>
            <p style='float:right;color:white;margin:5px;margin-top:10px;font-size:20px;'>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <?php endif ?>
      <?php if(isset($_SESSION['username'])): ?>
      <form method="post" action="server.php">
        <button class="btn btn-outline-danger my-2 my-sm-0" name="logout" type="submit" style="margin:5px;margin-top:20px;">Log Out</button>
      </form>
      <?php else: ?>
      <a href="login.php" class="btn btn-outline-primary" style="margin-right: 5px;" >Log in</a>
      <a href="signup.php" class="btn btn-outline-primary" style="margin-right: 5px;" >Sign Up</a>
      <?php endif; ?>
    </div>
  </nav>
  

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <!--  Always Download latest version of Boostrap and add here-->
  <script src="bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</body>


</html>
