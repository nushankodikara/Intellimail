<?php

// Production
$server = "localhost";
$username = "nushanko_intelliuser";
$password = "IntelliMail2023";
$dbname = "nushanko_intellimail";

// Development
// $server = "localhost";
// $username = "root";
// $password = "";
// $dbname = "nushanko_intellimail";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
    die("Database Connection Failed.");
}

?>