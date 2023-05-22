<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: userregistrationlogin.php");
    exit();
}
?>
