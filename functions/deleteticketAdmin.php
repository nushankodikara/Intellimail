<?php

include '../components/server.php';

// Auth Check
include '../components/authCheck.php';

// Get ticket id
$ticketid = $_GET['id'];

// delete ticket

$sql = "DELETE FROM tickets WHERE id='$ticketid'";

if (mysqli_query($conn, $sql)) {
    header('Location: ../adminarea.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>