<?php include('header.php') ?>
<html>

<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-color: #f9fbff;">
  <br><br><br>
  <div class="container-fluid">
    <div class="row">
      <div class="col"></div>
      <div class="col-lg-9">
        <div class="card">
          <div class="card-header">
            Sign Up
          </div>
          <div class="card-body">
            <form method="post" action="signup.php">
              <?php include('errors.php'); ?>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label >Name</label>
                  <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group col-md-6">
                  <label >Email</label>
                  <input type="email" name="email" class="form-control"  placeholder="Email">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label >Username</label>
                  <input type="text" name="uname" class="form-control" placeholder="Username">
                </div>
                <div class="form-group col-md-4">
                  <label>Password</label>
                  <input type="password" name="pass1" class="form-control" placeholder="Password">
                </div>
                <div class="form-group col-md-4">
                  <label >Confirm Password</label>
                  <input type="password" name="pass2" class="form-control" placeholder="Confirm Password">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-4">
                  <label >Age</label>
                  <input type="number" name="age" class="form-control">
                </div>
                <div class="form-group col-md-8">
                  <label >Phone Number</label>
                  <input type="tel" name="phno" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label >Address</label>
                <input type="text" name="address" class="form-control" placeholder="City, State">
              </div>
              <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
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
