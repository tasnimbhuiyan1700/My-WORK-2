<?php
 session_start();
 require 'dbconfi/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" href="css/Style.css" />

</head>
<body style="background-color:#b2bec3">

    <div   id="main-wrapper">
	<center>   
	    <h2>Login Form </h2>
	    <img src="img/images.png" class="avatar" />
	</center>

<form class="myform" action="index.php" method="post" >
     <label><b>Username:</label><br>
	 <input name="username" type="text" class="inputvalues" placeholder="Type your username" requried/><br>
	 <label><b>Passward:</label><br>
	 <input name="username"type="passward" class="inputvalues" placeholder="Type your passward" requried/><br>
	 <input name="login" type="submit" id="login_btn" value="login"/><br>
	  <a href="register.php"> <input type="button" id="register_btn" value="register" /> </a>
	 
 </form>
 <?php
  if(isset($_POST['login']))
  {    
      $username=$_POST['username'];
	  $passward=$_POST['passward'];
	  
	  $query="select * from user WHERE username= '$username' and passward='$passward'";
	  
	  $query_run = mysqli_query($con,$query);
	  if(mysqli_num_rows($query_run)>0)
	  {
		  //valid
		  $_SESSION['username']=$username;
		  header('location:homepage.php');
		  
	  }
	  else
	  {
		  //invalid
		  echo '<script type="text/javascript"> alert("invalid crediantial") </script>';
		  
	  }
	  
  }
 ?>
 </div>

</body>
</html>