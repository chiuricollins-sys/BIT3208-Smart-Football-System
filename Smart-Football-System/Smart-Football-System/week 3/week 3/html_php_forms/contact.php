<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
</head>
<body>

<h2>Contact Form</h2>

<form method="GET">
    Full Name:
    <input type="text" name="fullname" required><br><br>

    Message:
    <textarea name="message" required></textarea><br><br>

    <input type="submit" value="Send Message">
</form>

<?php
if(isset($_GET["fullname"])) {

    $fullname = htmlspecialchars($_GET["fullname"]);
    $message = htmlspecialchars($_GET["message"]);

    echo "<h3>Message Received</h3>";
    echo "Name: $fullname <br>";
    echo "Message: $message";
}
?>

</body>
</html>