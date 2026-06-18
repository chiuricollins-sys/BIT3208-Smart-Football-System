<?php
session_start();
include 'includes/db.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users
            WHERE username='$username'
            AND password='$password'";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit();

    } else {
        echo "Invalid Username or Password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Login</title>
</head>
<body>

<h2>Student Login</h2>

<form method="POST">

    <input type="text"
           name="username"
           placeholder="Username"
           required>
    <br><br>

    <input type="password"
           name="password"
           placeholder="Password"
           required>
    <br><br>

    <button type="submit" name="login">
        Login
    </button>

</form>

<br>

<a href="register.php">Create Account</a>

</body>
</html>