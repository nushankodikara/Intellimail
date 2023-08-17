<?php

include '../components/server.php';
include '../components/authCheck.php';

// Get form data
$subject = $_POST['subject'];
$department = $_POST['department'];
$priority = $_POST['priority'];
$description = "You: " . $_POST['description'];

// Get user id
$email = $_COOKIE['email'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$userid = $row['id'];

// Create ticket
$sql = "INSERT INTO tickets (subject, department, priority, description, userid) VALUES ('$subject', '$department', '$priority', '$description', '$userid')";

if (mysqli_query($conn, $sql)) {
    header('Location: ../mytickets.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>