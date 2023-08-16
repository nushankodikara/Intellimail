<?php

include '../components/server.php';
include '../components/authCheck.php';

// Get ticket id
$ticketid = $_POST['ticketid'];
$description = "You: " . $_POST['reply'];

// Get user id
$email = $_COOKIE['email'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$userid = $row['id'];

// Get ticket details
$sql = "SELECT * FROM tickets WHERE id='$ticketid' AND userid='$userid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$olddescription = $row['description'];
$newdescription = $olddescription . "<br/>" . $description;

// Update ticket and set status to open
$sql = "UPDATE tickets SET description='$newdescription', status='Replied' WHERE id='$ticketid' AND userid='$userid'";

if (mysqli_query($conn, $sql)) {
    header('Location: ../viewticket.php?id=' . $ticketid);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>