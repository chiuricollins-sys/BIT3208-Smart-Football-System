<?php

session_start();

if(!isset($_SESSION['employee_id'])){
    header("Location: login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="dashboard">

<h1>Employee Dashboard</h1>

<h3>
Welcome:
<?php echo $_SESSION['employee_id']; ?>
</h3>

<hr>

<ul class="menu">
    <li>My Profile</li>
    <li>Attendance</li>
    <li>Payroll</li>
    <li>Reports</li>
</ul>

<a href="logout.php">
<button>Logout</button>
</a>

</div>

</body>
</html>