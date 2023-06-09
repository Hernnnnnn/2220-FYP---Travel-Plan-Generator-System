<?php
    include 'dataconnection.php';

    $email = $_GET['email'];
    $loc = $_GET['destination'];
    $day = $_GET['num_days'];

    $q = "SELECT * from `generator`";
    $p = mysqli_query($conn,$q);
    while($result = mysqli_fetch_array($p))
    {
        $r = "UPDATE `generator` set destination = ''";
        mysqli_query($conn,$r);
    }
    header("location: usergenerator.php?email=".$email."&destination=".$loc."&num_days=".$day);

?>