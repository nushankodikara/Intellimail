<?php

include 'server.php';

// Auth Check
if (!isset($_COOKIE['email'])) {
    header('Location: login.php');
} else {
    $email = $_COOKIE['email'];
    $token = $_COOKIE['token'];
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if ($token !== $row['token']) {
        // Remove cookies
        setcookie('email', '', time() - 3600, '/');
        setcookie('token', '', time() - 3600, '/');

        // Remove token from database
        $sql = "UPDATE users SET token='' WHERE email='$email'";
        mysqli_query($conn, $sql);
        header('Location: login.php');
    }
    // Check if token has expired
    $tokenexpiry = $row['tokenexpiry'];
    $now = date('Y-m-d H:i:s');
    if ($now > $tokenexpiry) {
        // Remove cookies
        setcookie('email', '', time() - 3600, '/');
        setcookie('token', '', time() - 3600, '/');

        // Remove token from database
        $sql = "UPDATE users SET token='' WHERE email='$email'";
        mysqli_query($conn, $sql);
        header('Location: ../functions/logout.php');
    }
}

?>