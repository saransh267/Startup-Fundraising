<?php 
if(empty($_SESSION))
{
	session_start();
}
$username="";
$email="";
$errors= array();
//connect to the database
$db=mysqli_connect('localhost','root','','startup_plat');

//if signup button is clicked 
if(isset($_POST['signup'])){
	$username=$_POST['uname'];
	$email=$_POST['email'];
	$password_1=$_POST['pass1'];
	$password_2=$_POST['pass2'];
  $age=$_POST['age'];
  $phno=$_POST['phno'];
  $address=$_POST['address'];
  $name=$_POST['name'];

	$sql_u="SELECT * FROM reg_info WHERE username='$username'";
	$sql_e="SELECT * FROM reg_info WHERE email_id='$email'";
	
	if(empty($username)){
		array_push($errors, "username is required");

	}
	else{
		$res_u=mysqli_query($db,$sql_u) or die(mysqli_error($db));
		if  (mysqli_num_rows($res_u)>0) 
		{
			array_push($errors, "Sorry...Username already takken");
		}
	}	
	if(empty($email)){
		array_push($errors, "email is required");

	}
	else{
		$res_e=mysqli_query($db,$sql_e) or die(mysqli_error($db));
		if (mysqli_num_rows($res_e)>0) {
			array_push($errors, "Sorry...Email already taken");
		}
	} 
	if(empty($password_1)){
		array_push($errors, "password is required");

	}
	if($password_1 != $password_2){
		array_push($errors, "The two passwords do not match");
	} 

	//if no errors
	if(count($errors)==0){
		#$password = md5($password_1); //encrypt password
    $password=$password_1;
    $sql2="INSERT INTO investors (name,email_id,username,age,address,phone_no) VALUES ('$name','$email','$username','$age','$address','$phno')";
    mysqli_query($db, $sql2);
		$sql="INSERT INTO reg_info (name,email_id,username,password,age,address,phone_number) VALUES ('$name','$email','$username','$password','$age','$address','$phno')";
		if(mysqli_query($db, $sql))  
      {  
           echo '<script>alert("Success")</script>';  
      }  
      else
      {
          echo '<script>alert("Error")</script>'; 
      }
    
	}

}

//login user from login page
if (isset($_POST['login'])) {
	# code...
	$username=$_POST['username'];
	$password=$_POST['password'];
	if(empty($username)){
		array_push($errors, "username is required");

	} 
	if(empty($password)){
		array_push($errors, "Password is required");

	}
	if (count($errors)==0) {
	 	# code...
	 	#$password=md5($password); //encrypt
	 	$query="SELECT * FROM reg_info WHERE username='$username' AND password='$password' ";
	 	$result=mysqli_query($db,$query);
	 	if(mysqli_num_rows($result)>0) {
	 		# code...
	 		//logging in the user
	 		$_SESSION['username'] = $username;
			$_SESSION['success']= "you are now logged in";
      header('location: index.php');

	 	}
	 	else{
	 		array_push($errors,"Invalid username/password");
	 	}
	 } 

}





//logout
if (isset($_POST['logout'])) {
	# code...
	session_destroy();
	unset($_SESSION['username']);
  header('location: index.php');
	
}

?>