<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "employee_portal"
);

if(!$conn){
    die("Connection Failed: " . mysqli_connect_error());
}

?>