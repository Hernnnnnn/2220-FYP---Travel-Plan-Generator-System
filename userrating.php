<?php
session_start();
include('dataconnection.php');
include "usernavbar.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];
    $username = $_SESSION['username'];

    $checkQuery = "SELECT * FROM login WHERE username = '$username'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($checkResult) > 0) {
        $updateQuery = "UPDATE login SET rating = '$rating', feedback = '$feedback' WHERE username = '$username'";
        if (mysqli_query($conn, $updateQuery)) {
            echo "Rating and feedback updated successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        $insertQuery = "INSERT INTO login (username, rating, feedback) VALUES ('$username', '$rating', '$feedback')";
        if (mysqli_query($conn, $insertQuery)) {
            echo "Rating and feedback added successfully.";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
}
?>
