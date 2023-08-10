<?php

include '../components/server.php';

$email = $_POST['email'];
$password = $_POST['password'];

// emptyfields
if (empty($email) || empty($password)) {
    header('Location: ../login.php?error=emptyfields&email=' . $email);
    exit();
}

// invalidemail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../login.php?error=invalidemail');
    exit();
}

// nouser
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) < 1) {
    header('Location: ../login.php?error=nouser');
    exit();
}

// passwordcheck
$row = mysqli_fetch_assoc($result);
if (!password_verify($password, $row['passhash'])) {
    header('Location: ../login.php?error=passwordcheck&email=' . $email);
    exit();
}

// Login User
setcookie('email', $row['email'], time() + (86400 * 30), "/");

// Set Token
$token = bin2hex(random_bytes(16));
$tokenexpiry = date('Y-m-d H:i:s', strtotime('+1 day'));
$sql = "UPDATE users SET token='$token', tokenexpiry='$tokenexpiry' WHERE email='$email'";
mysqli_query($conn, $sql);
setcookie('token', $token, time() + (86400 * 30), "/");

mysqli_close($conn);

sleep(2);
header('Location: ../clientarea.php');

?>