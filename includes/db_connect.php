<?php
$servername = "db-vm1.c8fcuiqq033a.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Kedar123#";
$dbname = "quickloan_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
