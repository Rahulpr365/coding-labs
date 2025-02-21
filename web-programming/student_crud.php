<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
</head>
<body>
<form method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="na" required>
    <br><br>
    <label for="email">Email:</label>
    <input type="email" id="email" name="em" required>
    <br><br>
    <input type="submit" value="Insert" name="insert">
    <input type="submit" value="Update" name="update">
    <input type="submit" value="Delete" name="delete">
</form>
<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "student";
$conn = new mysqli($server, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['na'];
    $email = $_POST['em'];
    if (isset($_POST['insert'])) {
        $sql = "INSERT INTO dboperation (name, email) VALUES ('$name', '$email')";
    } elseif (isset($_POST['update'])) {
        $sql = "UPDATE dboperation SET email='$email' WHERE name='$name'";
    } elseif (isset($_POST['delete'])) {
        $sql = "DELETE FROM dboperation WHERE name='$name'";
    }
    if ($conn->query($sql) === TRUE) {
        echo "Operation successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
</body>
</html>
