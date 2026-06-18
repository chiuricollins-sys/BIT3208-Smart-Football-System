<?php
include 'includes/db.php';

if(isset($_POST['register'])){

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO users(fullname,email,username,password)
            VALUES('$fullname','$email','$username','$password')";

    if(mysqli_query($conn,$sql)){
        echo "Registration Successful!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
</head>
<body>

<h2>Student Registration</h2>

<form method="POST">

    <input type="text" name="fullname" placeholder="Full Name" required>
    <br><br>

    <input type="email" name="email" placeholder="Email" required>
    <br><br>

    <input type="text" name="username" placeholder="Username" required>
    <br><br>

    <input type="password" name="password" placeholder="Password" required>
    <br><br>

    <button type="submit" name="register">Register</button>

</form>

<br>

<a href="login.php">Already have an account? Login</a>

</body>
</html>