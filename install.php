<?php

// ID Auto Increment SQL Table for users (id,first name, last name, email, password)
include 'components/server.php';

$sql = "CREATE TABLE IF NOT EXISTS users ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    passhash VARCHAR(255) NOT NULL,
    token VARCHAR(255),
    tokenexpiry DATETIME
)";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

mysqli_close($conn);

?>