<?php
session_start();

if(!isset($_SESSION['username'])){
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<h1>Student Dashboard</h1>

<h3>Welcome, <?php echo $_SESSION['username']; ?></h3>

<hr>

<h4>Menu</h4>

<ul>
    <li>My Profile</li>
    <li>My Courses</li>
    <li>Results</li>
</ul>

<br>

<a href="logout.php">Logout</a>

</body>
</html>