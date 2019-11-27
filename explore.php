<?php  
include('header.php');
$connect = mysqli_connect("localhost", "root", "", "startup_plat");
$key;
$q;
if(isset($_GET['key']) && ($_GET['key']!=""))
{
    $key = $_GET['key'];
    $q = "WHERE name LIKE '%$key%'";
    $pn = "Search Result";
} 
elseif(isset($_POST['cat']) && ($_POST['cat']!=""))
{
    $key = $_POST['cat'];
    $q = "WHERE category='$key'";
    $pn = $key;
    if($_POST['cat']=='All'){
      $key = "";
      $q = "";
      $pn = "All Products";  
    }  
}
else
{
    $key = "";
    $q = "";
    $pn = "All Products";
}
?>
<?php
  error_reporting(E_ALL ^ E_WARNING);
  $query = "SELECT * FROM startup $q ORDER BY name ASC";  
  $result = mysqli_query($connect, $query);
  if(mysqli_num_rows($result)==0)
    {
      echo "<script>alert(\"No matching projects found!\")</script>";
      echo "<script> location.href='index.php'; </script>";
      exit;
    }
  $i = 0;
  // Establish the output variable
  $dyn_table = "<table cellpadding=\"20\">";         
  while($row = mysqli_fetch_array($result))  
    {
      $id = $row['startup_id'];
      $img = "images/pics/".$id.".jpg";  
      $name= $row['name'];
      $goal=$row['goal'];
      $category=$row['category'];
      $div = "<div class=\"card\" style=\"width: 20rem;\">
      <img src=$img class=\"card-img-top\" alt=\"...\" height=\"150px\" width=\"150px\" >
      <div class=\"card-body\">
        <h5 class=\"card-title\">$name</h5>
        <p class=\"card-text\">Category - $category </p>
        <p class=\"card-text\">Goal - $goal </p>
        <a href=\"project.php?id=$id\" class=\"btn btn-primary\">View more</a>
      </div>
    </div>";
      if ($i % 4 == 0) { // if $i is divisible by our target number (in this case "3")
        $dyn_table .= "<tr><td>" . $div . "</td>";
      } else {
        $dyn_table .= "<td>" . $div . "</td>";
      }
      $i++;
      
      
      }
    $dyn_table .= "</tr></table>";
            ?>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-4.2.1-dist/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="explore_css.css">
  <title>
    <?php echo "$pn";?>
  </title>
</head>

<body style="background-color: #f9fbff;">
  <br><br><br><br>
  <!-- Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h2 style="text-align:center;">Fund campaigns you love</h2>
    <form method="post" action="explore.php" class="form-row">
      <div class="form-group col-md-3">
        <label>Category</label>
        <select name="cat" class="form-control" id="category">
          <option value="All">All</option>
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
        <br>
        <input class="SubmitButton btn-primary" type="submit" name="SUBMITBUTTON" value="Submit" />
      </div>
    </form>
    <script type="text/javascript">
      $('.SubmitButton').click(function() { // on submit button click

        var urldata = $('#category :selected').val(); // get the selected  option value
        location.href='explore.php?cat='+urldata; 
      });

    </script>
    <?php echo $dyn_table; ?>


  </div>


  <footer class="footer" style="background-color: #b4d9f7;">
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="index.php"> Crowdfundr.com</a>
    </div>
  </footer>
</body>

</html>
