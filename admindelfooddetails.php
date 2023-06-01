<?php
session_start();
    include("dataconnection.php");
    
	$id=$_GET['id'];
	$email = $_GET['email'];
    $loc = $_GET['localname'];
	mysqli_query($conn,"DELETE from `".$loc."food` where id='$id'");
	header("location: adminlocatmoredetailsfood.php?email=".$email."&&localname=".$loc);
?>