<?php
    include("dataconnection.php");
    
	$id=$_GET['id'];
	$email = $_GET['email'];
	mysqli_query($conn,"DELETE from `location detail` where id='$id'");
	header("location: adminmanagelocation.php?email=".$email)
?>