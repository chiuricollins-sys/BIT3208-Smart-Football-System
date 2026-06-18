<?php

include 'includes/db.php';

if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $employee_id = $_POST['employee_id'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO employees
    (fullname,email,employee_id,password)
    VALUES
    ('$fullname','$email','$employee_id','$password')";

    if(mysqli_query($conn,$sql)){
        echo "Registration Successful!";
    }else{
        echo "Error!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">

<h2>Employee Registration</h2>

<form method="POST">

<input type="text"
name="fullname"
placeholder="Full Name"
required>

<input type="email"
name="email"
placeholder="Email"
required>

<input type="text"
name="employee_id"
placeholder="Employee ID"
required>

<input type="password"
name="password"
placeholder="Password"
required>

<button type="submit" name="register">
Register
</button>

</form>

<a href="login.php">Already Registered?</a>

</div>

</body>
</html>