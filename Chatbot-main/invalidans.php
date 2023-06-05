<link rel="stylesheet" href="css/stylex.css">
<?php
		$conn=mysqli_connect("localhost","root","","youtube");
		if($conn-> connect_error){
			die("connection failed:".$conn-> connect_error);
		}	
	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
<style >
	input{
		font-size: 1vw;
	}
	body 
	{
	background-image: url('image/background.jpg' );
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
	}
	#button 
	{
		background-color:rgba(0,0,0,0.6);
		color: white;
		height: 32px;
		width: 145px;
		border-radius: 25px;
		font-size: 16px;
	}
</style>


</head>
<br><br><br><br><br><br>
<br>
<br>
<center>
	<img src="image/bot_avatar.png">
</center>
<form action="" method="POST" class="myform">
	
<table border="0" align="center">
		
	
		<tr>
			<td style="color:white;">Invalid Response</td>
			<td><input type="text" value="" name="messages" placeholder="Type your query here..."required><br><br></td>
			
		</tr>
		
		</tr>
		<tr>
			<td  colspan="3" align="center"><input type="submit" id="button" name="submit" value="Report as Invalid"/></td>
		</tr>

</table>
	</form>


</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$id=$_POST['id'];
	$messages=$_POST['messages'];


$query="insert into invalid values('','$messages')";
$query_run = mysqli_query($conn,$query);


						
						if($query_run)
						{
							echo '<script type="text/javascript"> alert("Success!") </script>';						
						}
						else
						{
							echo '<script type="text/javascript"> alert("'.mysqli_error($conn).'") </script>';
						
					}
					?>

<META HTTP-EQUIV="Refresh" CONTENT="0; URL=http://localhost:8080/ChatBot-main/homepage.php">
<?php

}
?>
	