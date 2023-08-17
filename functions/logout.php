<?php

include '../components/server.php';
include 'authCheck.php';

// Remove token from database
$email = $_COOKIE['email'];
$sql = "UPDATE users SET token='' WHERE email='$email'";
mysqli_query($conn, $sql);

// Remove cookies
setcookie('email', '', time() - 3600, '/');
setcookie('token', '', time() - 3600, '/');

mysqli_close($conn);

header('Location: ../login.php');

?>