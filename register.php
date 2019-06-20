<?php
 require 'dbconfi/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<link rel="stylesheet" href="css/Style.css" />

</head>
<body style="background-color:#b2bec3">

    <div   id="main-wrapper">
	<center>   
	    <h2>Registration Form </h2>
	    <img src="img/images.png" class="avatar" />
	</center>

<form class="myform" action="register.php" method="post" >
     <label><b>Username:</label><br>
	 <input name="username" type="text" class="inputvalues" placeholder="Type your username" required/><br>
	 <label><b>Passward:</label><br>
	 <input name="passward" type="passward" class="inputvalues" placeholder="Your passward" required/><br>
	 <label><b>Confirm Passward:</label><br>
	 <input name="cpassward" type="passward" class="inputvalues" placeholder="Confirm passward" required/><br>
	 <input name="submit_btn" type="submit" id="sign_btn" value="Sign up"/><br>
	 <a href="index.php">  <input type="button" id="back_btn" value="back" /></a>
	 
 </form>
 <?php
    if(isset($_POST['submit_btn']))
	{
		//echo '<script type="text/javascript"> alert("Sign up button clicked")</script>';
		$username = $_POST['username'];
		$username = $_POST['passward'];
		$username = $_POST['cpassward'];
		
		if($passward==$cpassward)
		{
			$query="select * from user WHERE username= '$username' ";
			
			$query_run= mysqli_query($con,$query);
			
			if(mysqli_num_rows($query_run)>0)
			{
				//there is already a user with the same username
				echo '<script type="text/javascript"> alert("User already exist.. try another username")</script>';
			}
			{
				$query="insert into user values('$username','$passward')";
				$query_run= mysqli_query($con,$query);
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("User registedr.. go to login page")</script>';
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error")</script>';
				}
			}
		}
		else{
			echo '<script type="text/javascript"> alert("Passward and confirm passward does not match")</script>';
		}
		
		
	}
 ?>
 </div>

</body>
</html>