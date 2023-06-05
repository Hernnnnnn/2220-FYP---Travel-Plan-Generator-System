<?php
session_start();
    include("dataconnection.php");
    
	$id=$_GET['id'];
	$email = $_GET['email'];
	$loc=$_GET['localname'];
	mysqli_query($conn,"DELETE from `locations` where id='$id'");
	$s="DROP TABLE `".$loc."location`";
	$s1="DROP TABLE `".$loc."restaurant`";
	mysqli_query($conn,$s);
	mysqli_query($conn,$s1);
	header("location: adminmanagelocation.php?email=".$email)
?>