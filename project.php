<?php  
include('header.php');
error_reporting(E_ALL ^ E_WARNING);
$connect = mysqli_connect("localhost", "root", "", "startup_plat");
$id;
$query;
$name;
$start_date;
$deadline;
$goal;
$category;
$amount;
$about;
if(isset($_GET['id']))
{
if(($_GET['id']==""))
{
    echo "<br><br><br>Page Not Found";
} 
else 
{
    $id = $_GET['id'];
    $query = "SELECT * FROM startup WHERE startup_id = '$id'";
    $result = mysqli_query($connect, $query);
    $img = "images/$id.jpg";
    if(mysqli_num_rows($result)==0)
    {
        echo "<br><br><br>Project  doesn't exist.<br>";
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $name = $row['name'];
        $start_date = $row['start_date'];
        $deadline = $row['deadline'];
        $goal = $row['goal'];
        $category = $row['category'];
        $amount = $row['amount'];
        $about = $row['about'];
        $percentage = $amount/$goal*100;
    }
}
}
else
{
    echo "<br><br><br>Page Not Found";
}
?>
<?php
if(empty($_SESSION["username"]))
{
   
  echo '<script>alert("Log in to view and invest in projects")</script>';
  echo "<script> location.href='login.php'; </script>";
       exit;
}
?>
<?php
if(isset($_POST["invest"]))  
 { $usr = $_SESSION["username"];
   $amt = $_POST["investamt"];
   $query = "UPDATE startup SET amount=amount+$amt WHERE startup_id=\"$id\"";
   if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Success")</script>';  
      }  
      else
      {
          echo '<script>alert("Error")</script>'; 
      }
  $query2="SELECT investor_id FROM investors WHERE username=\"$usr\"";
  $result = mysqli_query($connect, $query2);
  $row = mysqli_fetch_array($result);
  $inv = $row["investor_id"];
  $query3 = "INSERT INTO fund_transactions(username,investor_id,startup_id,amount) VALUES ('$usr','$inv','$id','$amt') ";
  mysqli_query($connect, $query3);
    header("Refresh:0");
    $_POST["invest"] = '';
    $_POST["investamt"] = 0;
  
 }
?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="project.css">

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
    <br><br><br>

    <div class="row">
      <div class="col"></div>

      <div class="col-10">

        <div class="jumbotron jumbotron-fluid" style="background-color: #f9fbff; padding-bottom: 10px; padding-top: 30px;">
          <div class="container">
            <br>
            <h1 class="display-4" style="text-align:center;">
              <?php echo $name ?>
            </h1>
          </div>
        </div>
        <img id="product_image" src="images/pics/<?php echo $id ?>.jpg">
        <div class="row">
          <div class="col-6">
            <br><br>
            <h2>About this Project-</h2>
            <p>
              <?php echo $about ?>
            </p>
          </div>
          <div class="col-6">
            <div id='countDown'>
              <h1 id='header'>Countdown to the deadline</h1>
              <div id="clockdiv">
                <div>
                  <span class="days" id="day"></span>
                  <div class="smalltext">Days</div>
                </div>
                <div>
                  <span class="hours" id="hour"></span>
                  <div class="smalltext">Hours</div>
                </div>
                <div>
                  <span class="minutes" id="minute"></span>
                  <div class="smalltext">Minutes</div>
                </div>
                <div>
                  <span class="seconds" id="second"></span>
                  <div class="smalltext">Seconds</div>
                </div>
              </div>

              <p id="demo"></p>
            </div>

            <script>
              var deadline = new Date("<?php echo $deadline ?>T12:00:00").getTime();

              var x = setInterval(function() {

                var now = new Date().getTime();
                var t = deadline - now;
                var days = Math.floor(t / (1000 * 60 * 60 * 24));
                var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((t % (1000 * 60)) / 1000);
                document.getElementById("day").innerHTML = days;
                document.getElementById("hour").innerHTML = hours;
                document.getElementById("minute").innerHTML = minutes;
                document.getElementById("second").innerHTML = seconds;
                if (t < 0) {
                  clearInterval(x);
                  document.getElementById("demo").innerHTML = "TIME UP";
                  document.getElementById("day").innerHTML = '0';
                  document.getElementById("hour").innerHTML = '0';
                  document.getElementById("minute").innerHTML = '0';
                  document.getElementById("second").innerHTML = '0';
                }
              }, 1000);

            </script>
          </div>
        </div>

        <div class="row">
          <div class="col-6">
            <h3>&#8377;
              <?php echo $amount ?> raised of &#8377;
              <?php echo $goal ?>
            </h3>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: <?php echo $percentage ?>%;" aria-valuenow="<?php echo $percentage ?>" aria-valuemin="0" aria-valuemax="100">
                <?php echo $percentage ?>%</div>
            </div>
          </div>
          <div class="col-6">
            <form action="project.php?id=<?php echo($id)?>" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Invest now</label>
                <input type="number" class="form-control" name="investamt" placeholder="&#8377;">
              </div>
              <button name="invest" class="btn btn-primary">Invest</button>
            </form>
            
            
          </div>
        </div>

      </div>
      <div class="col"></div>
    </div>
  </div>

  <footer class="footer " style="background-color: #b4d9f7;">
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="index.php"> Crowdfundr.com</a>
    </div>
  </footer>
</body>
