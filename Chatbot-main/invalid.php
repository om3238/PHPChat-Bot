<!DOCTYPE html>
<html lang="en">
<body>
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
	<icon>
		
	</icon>
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
<body>
	<table align="center" border="1px" style=" color:white; width: 800px;line-height: 20px">
		<tr>
			<th colspan="2"><h2>Invalid</h2></th>
			<h3></h3>
		
		
		<tr>
			<th align="center">id</th>
			<th align="center">Invalid query/response</th>
			</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","youtube");
		if($conn-> connect_error){
			die("connection failed:".$conn-> connect_error);
		}
		$sql = "SELECT id,messages from invalid";
		$result= $conn-> query($sql);

		if($result-> num_rows >0){
			while ($row =$result ->fetch_assoc()) {
				echo "<tr><td>".$row["id"]."</td><td>".$row["messages"]."</td></tr>";
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
</html>
