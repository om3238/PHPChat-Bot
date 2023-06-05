<!DOCTYPE html>
<html lang="en">
<head>
<style>
th, td {
  background-color: rgba(7,250,108,0.5);
}
body 
{
  background-image: url('image/background.jpg' );
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
	<meta charset="utf-8"> 
	<title>Admin Portal</title>
	<link rel="stylesheet" href="navbar.css">
	<!--<link href="https://fonts.googleapis.com/css?family=Alfa+Slab+One|Open+Sans" rel="stylesheet">-->
</head>
<header>
	<h1>CHAT<span>BOT</span></h1>
	<nav>
		<ul>
			<button onclick="window.location.href ='users.php';">User Database</button>
			<button onclick="window.location.href ='adminlogin.php';">Chats</button>
			<button onclick="window.location.href ='qna.php';">Dataset</button>
			<button onclick="window.location.href ='invalid.php';">Invalid</button>
			<button onclick="window.location.href ='index.php';">Sign Out</button>	
		</ul>
	</nav>
</header>
<br>
<br>


<body>
<center>
	<h3 style ="color : white; font-size:50px; "> ADMIN </h3>
</center>
<br>

	<table align="center" border="1px" border-color="white" style="color:white; width: 800px; line-height: 20px">
		<tr>
			<th colspan="4"><h2>Chat record</h2></th>
			<h3></h3>
		
		
		<tr>
			<th align="center">id</th>
			<th align="center">message</th>
			<th align="center">Added on</th>
			<th align="center">Type</th>
		</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","youtube");
		if($conn-> connect_error){
			die("connection failed:".$conn-> connect_error);
		}
		$sql = "SELECT id,message,added_on,type from message";
		$result= $conn-> query($sql);

		if($result-> num_rows >0){
			while ($row =$result ->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["message"]." </td><td> ".$row["added_on"]." </td><td> ".$row['type']."</td></tr>";
				# code...
			}
			echo "</table>";
		}
		else{
			echo "0 result";
		}
		$conn-> close();
		?>

	</table>

</body>
</html>