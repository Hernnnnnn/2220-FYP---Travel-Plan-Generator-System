<?php
session_start();
    include("dataconnection.php");
    
	$id=$_GET['id'];
	$email = $_GET['email'];
    $empty ="";
    $day = $_GET['num_days'];
	$loc=$_GET['destination'];
    
	mysqli_query($conn,"UPDATE `generator` set destination='$empty' where id =  $id");
	header("location: usergenerator.php?email=".$email."&destination=".$loc."&num_days=".$day)
?>