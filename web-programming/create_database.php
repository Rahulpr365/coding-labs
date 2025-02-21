<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Database</title>
</head>
<body>
<form method="post">
    Enter Database Name: <input type="text" name="dbname" required><br>
    <input type="submit" name="s" value="Create Database">
</form>
<?php
if(isset($_POST["s"])){
    // Retrieving the database name from input
    $dbname = $_POST['dbname'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "CREATE DATABASE $dbname";
    if (mysqli_query($conn, $sql)) {
        echo "Database '$dbname' created successfully.";
    } else {
        echo "Error creating database: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
</body>
</html>
