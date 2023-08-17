<?php

include '../components/server.php';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['cpassword'];

// emptyfields
if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmPassword)) {
    header('Location: ../register.php?error=emptyfields&firstname=' . $firstname . '&lastname=' . $lastname . '&email=' . $email);
    exit();
}

// invalidemail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header('Location: ../register.php?error=invalidemail&firstname=' . $firstname . '&lastname=' . $lastname);
    exit();
}

// passwordcheck
if ($password !== $confirmPassword) {
    header('Location: ../register.php?error=passwordcheck&firstname=' . $firstname . '&lastname=' . $lastname . '&email=' . $email);
    exit();
}

// emailtaken
$sql = "SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    header('Location: ../register.php?error=emailtaken&firstname=' . $firstname . '&lastname=' . $lastname);
    exit();
}

// Register User
$passhash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (firstname, lastname, email, passhash) VALUES ('$firstname', '$lastname', '$email', '$passhash')";

if (mysqli_query($conn, $sql)) {
    header('Location: ../login.php?success=registered');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>