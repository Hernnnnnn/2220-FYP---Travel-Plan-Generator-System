<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['email']) || empty($_SESSION['email'])) {
    header("Location: userregistrationlogin.php");
    exit();
}
?>