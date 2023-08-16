<?php

include 'components/server.php';

$sql = "CREATE TABLE IF NOT EXISTS users ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL UNIQUE,
    passhash VARCHAR(255) NOT NULL,
    token VARCHAR(255),
    plan VARCHAR(10),
    role VARCHAR(10) DEFAULT 'user',
    tokenexpiry DATETIME
)";

if (mysqli_query($conn, $sql)) {
    echo "Table users created successfully. <br/>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO users (firstname, lastname, email, passhash, role) VALUES ('John', 'Doe', 'admin@intellimail.site', '$2y$10\$xV8TXVcvtQ0UJ1CeuVIFguhcNp78GyeK8FY35gFlFTx8lN71XWnKe', 'admin')";

if (mysqli_query($conn, $sql)) {
    echo "Admin added successfully. <br/>";
} else {
    echo "Error adding admin: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS contact ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table contact created successfully. <br/>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS tickets ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(255) NOT NULL,
    department VARCHAR(255) NOT NULL,
    priority VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    userid INT(6) NOT NULL,
    status VARCHAR(255) NOT NULL DEFAULT 'Open'
)";

if (mysqli_query($conn, $sql)) {
    echo "Table tickets created successfully. <br/>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE IF NOT EXISTS plans ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price VARCHAR(255) NOT NULL,
    description TEXT NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table plans created successfully. <br/>";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "INSERT INTO plans (name, price, description) VALUES ('Starter', '29', 'Ideal for personal use and small projects.')";
if (mysqli_query($conn, $sql)) {
    echo "Starter plan added successfully. <br/>";
} else {
    echo "Error adding Starter plan: " . $conn->error;
}

$sql = "INSERT INTO plans (name, price, description) VALUES ('Company', '99', 'Perfect for multiple users and extended support.')";
if (mysqli_query($conn, $sql)) {
    echo "Company plan added successfully. <br/>";
} else {
    echo "Error adding Company plan: " . $conn->error;
}

$sql = "INSERT INTO plans (name, price, description) VALUES ('Enterprise', '499', 'Tailored for large-scale usage and extended redistribution rights.')";
if (mysqli_query($conn, $sql)) {
    echo "Enterprise plan added successfully. <br/>";
} else {
    echo "Error adding Enterprise plan: " . $conn->error;
}

mysqli_close($conn);

?>