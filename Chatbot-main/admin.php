<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>


<title>Admin Login</title>
<link rel="stylesheet" href="css/stylex.css">
<style>
	
body 
{
  background-image: url('image/background.jpg' );
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>



</head>

<br>
<br>
<br>
<br>
<br>
<br>


<body>
	
	<div>
		<center>
			<div class="imgcontainer">
			<img src="image/admin.png">
		</center>
	
		<form class="myform" action="adminpage.php" method="post">

			<div class="inner_container">

			<label><b id="adminp">Password:</b></label><br>
			<input name="password" type="password" class="inputvalues" id="adminpass" placeholder="Type your password" required/><br>
			
		

						<a href="adminlogin.php"><input  type="button" id="admin_btn" value="LogIn"/></a><br>
			<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>

		
			
		
		</div>

		</form>
		
	</div>
</body>
</html>