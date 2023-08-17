<?php

include '../components/server.php';
include '../components/authCheck.php';

// Get ticket id
$ticketid = $_POST['ticketid'];
$description = "Admin: " . $_POST['reply'];

// Get ticket details
$sql = "SELECT * FROM tickets WHERE id='$ticketid'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$olddescription = $row['description'];
$newdescription = $olddescription . "<br/>" . $description;

// Update ticket and set status to open
$sql = "UPDATE tickets SET description='$newdescription', status='Answered' WHERE id='$ticketid'";

if (mysqli_query($conn, $sql)) {
    header('Location: ../viewticketAdmin.php?id=' . $ticketid);
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>