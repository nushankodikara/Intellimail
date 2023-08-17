<?php

include '../components/server.php';
include '../components/authCheck.php';

// Get data
$planId = $_GET['planId'];

if ($planId == 'paypal-button-starter') {
    $planId = 1;
} else if ($planId == 'paypal-button-company') {
    $planId = 2;
} else if ($planId == 'paypal-button-enterprise') {
    $planId = 3;
}

// Get user id
$email = $_COOKIE['email'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$userid = $row['id'];

// add plan to user
$sql = "UPDATE users SET plan='$planId' WHERE id='$userid'";

if (mysqli_query($conn, $sql)) {
    // Get plan details
    $sql = "SELECT * FROM plans WHERE id='$planId'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $planName = $row['name'];
    $planPrice = $row['price'];

    // Create ticket
    $subject = "Payment Successful";
    $department = "Billing";
    $priority = "1";
    $description = "You have successfully subscribed to the " . $planName . " plan for $" . $planPrice . ".";

    // Create ticket
    $sql = "INSERT INTO tickets (subject, department, priority, description, userid) VALUES ('$subject', '$department', '$priority', '$description', '$userid')";

    if (mysqli_query($conn, $sql)) {
        header('Location: ../mytickets.php');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>