<?php
    include 'dataconnection.php';
    $status = $_GET['status'];
    $id=$_GET['id'];
    $email=$_GET['email'];
    if($status ==1)
    {
        $status=0;
        $q = "UPDATE `login` set status='$status' where ID = '$id'";
        mysqli_query($conn,$q);
    }
    else if($status ==0)
    {
        $status =1;
        $q = "UPDATE `login` set status='$status' where ID = '$id'";
        mysqli_query($conn,$q);
    }
    
    header("Location: adminmanageuser.php?email=".$email);
?>