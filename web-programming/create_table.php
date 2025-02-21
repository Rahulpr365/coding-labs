<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Table</title>
</head>
<body>
<form method="post">
    Enter Database Name: <input type="text" name="dbname" required><br>
    Enter Table Name: <input type="text" name="tbname" required><br>
    <input type="submit" name="s" value="Create Table">
</form>
<?php
if(isset($_POST["s"])){
    $dbname = $_POST['dbname'];
    $tbname = $_POST['tbname'];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $sql = "CREATE TABLE $tbname (
        Emp_id INT(5) PRIMARY KEY, 
        Emp_name VARCHAR(20), 
        Designation VARCHAR(20), 
        Organization VARCHAR(20)
    )";
    if(mysqli_query($conn, $sql)){
        echo "Table '$tbname' created successfully in database '$dbname'.";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
</body>
</html>
