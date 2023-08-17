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
    name VARCHAR(255) NOT NULL UNIQUE,
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

// Team Members
$sql = "CREATE TABLE IF NOT EXISTS team ( 
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL UNIQUE,
    position VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image VARCHAR(255) NOT NULL,
    github VARCHAR(255) NOT NULL,
    linkedin VARCHAR(255) NOT NULL
)";

if (mysqli_query($conn, $sql)) {
    echo "Table team created successfully. <br/>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Nushan Kodikara, Team Leader
$sql = "INSERT INTO team (name, position, description, image, github, linkedin) VALUES ('Nushan Kodikara', 'Team Leader, Backend Team Leader', 'Gathered the whole team and guided everyone.', '/team/nushan.jpg', 'https://github.com/nushankodikara', 'https://linkedin.com/in/nushan-knodikara')";
if (mysqli_query($conn, $sql)) {
    echo "Nushan added successfully. <br/>";
} else {
    echo "Error adding Nushan: " . $conn->error;
}

// Ashan Kankanige, UI Team Leader
$sql = "INSERT INTO team (name, position, description, image, github, linkedin) VALUES ('Ashan Kankanige', 'UI Team Leader', 'Designed the UI and guided the UI team.', '/team/ashan.jpg', 'https://github.com/ashanchinthana', 'https://www.instagram.com/_ashan_c_/' )";
if (mysqli_query($conn, $sql)) {
    echo "Ashan added successfully. <br/>";
} else {
    echo "Error adding Ashan: " . $conn->error;
}

// Isuru Silva
$sql = "INSERT INTO team (name, position, description, image, github, linkedin) VALUES ('Isuru Silva', 'UI Team', 'Designed the UI and helped the UI team.', '/team/isuru.jpg', 'https://github.com/inpsilva', 'https://instagram.com/__i_s_u_r_u_____?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D' )";
if (mysqli_query($conn, $sql)) {
    echo "Isuru added successfully. <br/>";
} else {
    echo "Error adding Isuru: " . $conn->error;
}

// Dasun Charuka
$sql = "INSERT INTO team (name, position, description, image, github, linkedin) VALUES ('Dasun Charuka', 'UI Team', 'Designed the UI and helped the UI team.', '/team/dasun.jpg', '#','#' )";
if (mysqli_query($conn, $sql)) {
    echo "Dasun added successfully. <br/>";
} else {
    echo "Error adding Dasun: " . $conn->error;
}

// Sandalu Buddima, Backend Team
$sql = "INSERT INTO team (name, position, description, image, github, linkedin) VALUES ('Sandalu Buddima', 'Backend Team', 'Developed the backend and helped the backend team.', '/team/sandalu.jpg', 'https://github.com/Sandalubuddima','https://www.instagram.com/_sandalu_buddima_3/' )";
if (mysqli_query($conn, $sql)) {
    echo "Sandalu added successfully. <br/>";
} else {
    echo "Error adding Sandalu: " . $conn->error;
}

// Namodya Chathurani, QA Team
$sql = "INSERT INTO team (name, position, description, image, github, linkedin) VALUES ('Namodya Chathurani', 'QA Team', 'Tested the application and helped the QA team.', '/team/namodya.jpg', '#','#' )";
if (mysqli_query($conn, $sql)) {
    echo "Namodya added successfully. <br/>";
} else {
    echo "Error adding Namodya: " . $conn->error;
}

// Lakshani Tharangika, QA Team
$sql = "INSERT INTO team (name, position, description, image, github, linkedin) VALUES ('Lakshani Tharangika', 'QA Team', 'Tested the application and helped the QA team.', '/team/lakshani.jpg', '#','#' )";
if (mysqli_query($conn, $sql)) {
    echo "Lakshani added successfully. <br/>";
} else {
    echo "Error adding Lakshani: " . $conn->error;
}



mysqli_close($conn);

?>