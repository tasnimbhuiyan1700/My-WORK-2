<?php
 session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Home Page</title>
<link rel="stylesheet" href="css/Style.css" />

</head>
<body style="background-color:#b2bec3">

    <div   id="main-wrapper">
	<center>   
	    <h2>Home Page </h2>
		<h3>Welcome
		   <?php echo $_SESSION['username'] ?>
		</h3>
	    <img src="img/images.png" class="avatar" />
	</center>

<form class="myform" action="homepage.php" method="post" >
    
	  <input type="submit" id="logout_btn" value="log out"/><br>
	   
	 
 </form>
 </div>

</body>
</html>