<?php

session_start();
include 'includes/db.php';

if(isset($_POST['login'])){

    $employee_id = $_POST['employee_id'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM employees
            WHERE employee_id='$employee_id'
            AND password='$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){

        $_SESSION['employee_id']=$employee_id;

        header("Location: dashboard.php");
        exit();

    }else{
        echo "Invalid Login Details!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Employee Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<h2>Employee Login</h2>

<form method="POST">

<input type="text"
name="employee_id"
placeholder="Employee ID"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button type="submit" name="login">
Login
</button>

</form>

<a href="register.php">Create Account</a>

</div>

</body>
</html>