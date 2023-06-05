<?php
    $con = mysqli_connect("localhost","root","") or die("Unable to connect");
    mysqli_select_db($con,'logindb');
    
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];
    
    
    $url_components = parse_url($url);
    parse_str($url_components['query'], $params);
    $id = $params['rn'];

    $sql = "UPDATE `userinfotable` SET `isBlocked` = '0' WHERE `userinfotable`.`id` = $id;";
	$query_run = mysqli_query($con,$sql);
    if($query_run)
		{
			echo '<script type="text/javascript"> alert("unblocked!") </script>';
            header('Location: users.php');
		}
	else
		{
			echo '<script type="text/javascript"> alert("'.mysqli_error($conn).'") </script>';		
		}
?>