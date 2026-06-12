<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "student_db";

// Create connection
$conn = mysqli_connect(
    $servername,
    $username,
    $password,
    $database
);

// Check connection
if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

echo "<h2>Connected Successfully</h2>";

?>