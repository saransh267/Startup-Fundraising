<?php  
include('header.php');?>
<?php
if(empty($_SESSION["username"]))
{
   
  echo '<script>alert("Log in to create your project!")</script>';
  echo "<script> location.href='login.php'; </script>";
       exit;
}
?>
<?php  
#error_reporting(E_ALL ^ E_WARNING);
 $connect = mysqli_connect("localhost", "root", "", "startup_plat");  
 if(isset($_POST["submit"]))  
 {  
      $name = $_POST["pname"];
      $about = $_POST["about"];
      $date = date("Y-m-d");
      $deadline = $_POST["deadline"];
      $goal = $_POST["goal"];
      $category = $_POST["category"];
      $amount = 0;
      if( empty($name) or empty($about) or empty($deadline) or empty($goal) or empty($category)){
        echo '<script>alert("Fill out all the details!")</script>'; 
      }
      else{
        $query = "INSERT INTO startup(name,start_date,deadline,goal,category,amount,about) VALUES ('$name','$date','$deadline','$goal','$category','$amount','$about')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Success")</script>';  
      }  
      else
      {
          echo '<script>alert("Error")</script>'; 
      }
      }
      
 }  
 ?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap-grid.min.css">

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <!--  Always Download latest version of Boostrap and add here-->
  <script src="bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
</head>

<body style="background-color: #f9fbff;">
  <div class="container-fluid">
    <br>
    <div class="row">
      <div class="col"></div>

      <div class="col-10-md">

        <div class="jumbotron jumbotron-fluid" style="background-color: #f9fbff; padding-bottom: 10px; padding-top: 30px;">
          <div class="container">
            <br>
            <h1 class="display-4">Get Funding for your dream projects with us</h1>
            <br>
            <h2>Let's get started! </h2>
          </div>
        </div>

<!--
        <form method="post" enctype="multipart/form-data" action="start_project.php">
          <div class="form-group">
            <label for="exampleFormControlFile1">Choose an image for your project</label>
            <input type="file" class="form-control-file" name="image">
          </div>
        </form>
-->

        <form method="post" action="start_project.php">
          <div class="form-group">
            <label for="exampleFormControlInput1">Project Name</label>
            <input type="text" name="pname" class="form-control" placeholder="Project">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Write a short description of your project</label>
            <textarea name="about" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="About"></textarea>
          </div>
          <div class="form-group">
            <label>Choose the category of your project</label>
            <select name="category" class="form-control">
              <option value="Action">Action</option>
              <option value="Art">Art</option>
              <option value="Comics">Comics</option>
              <option value="Crafts">Crafts</option>
              <option value="Dance">Dance</option>
              <option value="Design">Design</option>
              <option value="Fashion">Fashion</option>
              <option value="Films">Films</option>
              <option value="Food">Food</option>
              <option value="Games">Games</option>
              <option value="Journalism">Journalism</option>
              <option value="Music">Music</option>
              <option value="Photography">Photography</option>
              <option value="Publishing">Publishing</option>
              <option value="Technology">Technology</option>
              <option value="Theater">Theater</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Funding goal in &#8377;</label>
            <input type="number" name="goal" class="form-control" placeholder=&#8377;>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Deadline for the funding</label>
            <input type="date" name="deadline" class="form-control" placeholder="Project">
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

      </div>

      <div class="col"></div>
    </div>
  </div>
  <footer class="footer" style="background-color: #b4d9f7;">
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="index.php"> Crowdfundr.com</a>
    </div>
  </footer>
</body>
<!--
<script>
  $(document).ready(function() {
    $('#insert').click(function() {
      var image_name = $('#image').val();
      if (image_name == '') {
        alert("Please Select Image");
        return false;
      } else {
        var extension = $('#image').val().split('.').pop().toLowerCase();
        if (jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
          alert('Invalid Image File');
          $('#image').val('');
          return false;
        }
      }
    });
  });

</script>
-->

</html>
