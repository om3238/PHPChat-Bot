<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>


<title>Login Page</title>
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

<body>
	
	<div>
		<center>
			<h2 style ="color : white; font-size:50px; " > Login </h2>
			<img src="image/bot_avatar.png">
		</center>
	</div>
	
		<form class="myform" action="index.php" method="post">

			<div class="inner_container">
	
			<label><b id="un">Username:</b></label><br>
			<input name="username" id="us" type="text" class="inputvalues" placeholder="Enter Username here..." required/><br>
			<label><b id="pas">Password:</b></label><br>
			<input name="password" id="pass" type="password" class="inputvalues" placeholder="Your Password..." required/><br>
			
			<input name="login" type="submit" id="login_btn" value="Login"/><br>
			

			<a href="register.php"><input type="button" id="register_btn" value="Register"/></a> <br>
			
			<a href="admin.php"><input type="button" id="admin_btn" value=" Login as Admin"/></a>
		
		</div>

		</form>
		<?php
		if(isset($_POST['login']))
		{
			$username=$_POST['username'];
			$password=$_POST['password'];
			
			$query="select * from userinfotable WHERE username='$username' AND password='$password';";
			$sql="select isBlocked from userinfotable WHERE username='$username' AND password='$password';";
			$result= mysqli_query($con,$sql);
			$row = mysqli_fetch_assoc($result);
			
			$query_run = mysqli_query($con,$query);
			if(mysqli_num_rows($query_run)>0)
			
			{
				if($row['isBlocked'] == '0')
				{
					$_SESSION['username']= $username;
					header('location:homepage.php');
				}
				else
				{
					echo '<script type="text/javascript"> alert("Blocked User!!!") </script>';
				}
			}
			else
			{
				// invalid
				echo '<script type="text/javascript"> alert("Invalid credentials") </script>';
			}
			
		}
		
		
		?>
		
	</div>
</body>
</html>