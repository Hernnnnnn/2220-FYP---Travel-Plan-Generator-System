<?php
    include 'dataconnection.php';
    $status=$_POST['hidden_status'];
    $id=$_GET['id'];
    if($status == 1)
        {
            $status =0;
            
        }
        else
        {
            $status =1;
        }
        $sql = "UPDATE `login` set status='$status' where ID =$id";
            mysqli_query($conn,$sql);

?>