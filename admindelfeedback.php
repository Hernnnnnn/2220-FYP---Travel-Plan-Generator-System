<?php
session_start();
    include("dataconnection.php");
    
	$id=$_GET['id'];
	$email = $_GET['email'];
	// $loc=$_GET['localname'];
	mysqli_query($conn,"DELETE from `userfeedback` where id='$id'");
	header("location: adminfeedback.php?email=".$email)
?>