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
<style>
		*{
		   font-family: 'Poppins', sans-serif;
		  
		}
</style>
<body>
	<table align="center" border="1px" style="width: 800px;line-height: 20px">
		<tr>
			<th colspan="5"><h2>User Database</h2></th>
			<h3></h3>
		
		
		<tr>
			<th align="center">user id</th>
			<th align="center">user name</th>
			<th colspan="3" align="center">isBlocked(0=no,1=yes)</th>
			</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","logindb");
		if($conn-> connect_error){
			die("connection failed:".$conn-> connect_error);
		}
		$sql = "SELECT id,username,isBlocked from userinfotable";
		$result= $conn-> query($sql);

		if($result-> num_rows >0)
		{
			while ($row =$result ->fetch_assoc()) 
			{
				echo "<tr>
				<td>".$row["id"]."</td>
				<td>".$row["username"]."</td>
				<td>".$row["isBlocked"]."</td>
				<td><a href = 'block_user.php?rn=$row[id]' >block</td>	
				<td><a href = 'unblock_user.php?rn=$row[id]' >unblock</td>
				</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "0 =result";
		}
		$conn-> close();
		?>
		

	</table>



</body>
</html>
</html>
