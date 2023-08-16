<?php

include '../components/server.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if (empty($name) || empty($email) || empty($message)) {
    header("Location: ../contact-us.php?error=emptyfields");
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../contact-us.php?error=invalidemail");
    exit();
}

$conn = new mysqli($server, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed.");
}

$sql = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

if (mysqli_query($conn, $sql)) {
} else {
    header("Location: ../contact-us.php?error=sqlerror");
}

mysqli_close($conn);

header("Location: ../contact-us.php?error=success");

?>