<?php

$servername = "localhost";
$username = "root";
$password = "testtest";
$database = "creation31";


// $username = "caita_user31";
// $password = "testtest123creation31";
// $database = "caita_creation31";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
