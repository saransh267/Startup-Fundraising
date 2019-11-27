<?php include('header.php') ?>

<html>

<head>
  <title>Log In</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-color: #f9fbff;">
  <br><br><br><br><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col"></div>
      <div class="col-lg-4 ">
        <div class="card">
          <div class="card-header">
            Log in
          </div>
          <div class="card-body">
            <form method="post" action="login.php">
              <?php include('errors.php'); ?>
              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="submit" class="btn btn-primary" name="login">Log in</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col"></div>
    </div>
  </div>

  <footer class="footer fixed-bottom" style="background-color: #b4d9f7;">
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="index.php"> Crowdfundr.com</a>
    </div>
  </footer>

</body>

</html>
