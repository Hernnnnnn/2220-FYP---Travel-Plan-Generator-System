<?php
    include 'dataconnection.php';

    $email = $_GET['email'];
    $loc = $_GET['destination'];
    $day = $_GET['num_days'];

    $q = "SELECT * from `generator`";
    $p = mysqli_query($conn,$q);
    $r = "DELETE FROM generator WHERE id = '$day'";
    mysqli_query($conn,$r);
    header("location: usergenerator.php?email=".$email."&destination=".$loc."&num_days=".$day-1);

?>