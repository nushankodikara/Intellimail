<?php

include 'server.php';

// if user is not admin, redirect to login
$email = $_COOKIE['email'];

$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if ($row['role'] !== 'user') {
    header('Location: ../functions/logout.php');
}

?>