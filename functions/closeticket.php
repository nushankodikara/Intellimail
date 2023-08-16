<?php

include '../components/server.php';

// Auth Check
include '../components/authCheck.php';

// Get ticket id
$ticketid = $_GET['id'];

// Get user id
$email = $_COOKIE['email'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$userid = $row['id'];

// close ticket

$sql = "UPDATE tickets SET status='Closed' WHERE id='$ticketid' AND userid='$userid'";
if (mysqli_query($conn, $sql)) {
    header('Location: ../mytickets.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>