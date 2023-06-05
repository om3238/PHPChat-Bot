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
		<button onclick="window.location.href ='insert.php';">Insert/Add</button>

		</ul>
	</nav>
	<?php
			if(isset($_POST['logout']))
			{
				session_destroy();
				header('location:index.php');
			}
		?>
</header>

<!--
<div id="main-wrapper">
		<center>
			<h2><strong>Admin</strong></h2>
			<div class="imgcontainer">
			<img src="imgs/dc.jpg" class="avatar"/>
		</center>
	
	</div>
-->
<style>
	
	input{
			padding: 2px;
			margin-left: 1255px;
			margin-top: 35px;
			height: 20px;
			width: 90px;
			color: #fff;
			background-color: #000;	
	}
</style>


<body>
	<table  cellspacing="5" align="center" border="1px" style=" color:white; width: 800px;line-height: 40px">
		<tr>
			<th colspan="5"><h2>Chatbot Dataset</h2></th>
			<h3></h3>
		
		
		<tr>
			<th width="20px">id</th>
			<th align="center">Query</th>
			<th align="center">Reply</th>
			<th colspan="2" align="center" >Operation</th>
			
		</tr>
		<?php
		$conn=mysqli_connect("localhost","root","","youtube");
		if($conn-> connect_error){
			die("connection failed:".$conn-> connect_error);
		}
		$sql = "SELECT id,question,reply from chatbot_hints";
		$result= $conn-> query($sql);

		if($result-> num_rows >0){
			while ($row =$result ->fetch_assoc()) {
				echo "<tr>
				<td>".$row["id"]."</td>
				<td>".$row["question"]." </td>
				<td> ".$row["reply"]." </td>
				<td><a href='update.php?rn=$row[id]&ques=$row[question]&rep=$row[reply]'>Edit/Update</td>
				<td><a href='delete.php?rn=$row[id] onclick='return checkdelete()'>Delete</td></tr> ";
					
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
<script>
		function checkdelete()
		 {
			return Confirm('Are you Sure you want to delete this record ?');
		}


</script>
</body>
</html>