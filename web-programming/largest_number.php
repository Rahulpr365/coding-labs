<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the Largest Number</title>
</head>
<body>

    <h2>Enter Three Numbers</h2>
    <form method="post">
        <input type="text" name="num1" placeholder="Number 1" required><br><br>
        <input type="text" name="num2" placeholder="Number 2" required><br><br>
        <input type="text" name="num3" placeholder="Number 3" required><br><br>
        <input type="submit" value="Find Largest">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];

        // Check if inputs are numeric
        if (is_numeric($num1) && is_numeric($num2) && is_numeric($num3)) {
            $largest = max($num1, $num2, $num3);
            echo "<h3>The largest number is: $largest</h3>";
        } else {
            echo "<h3>Please enter valid numeric values.</h3>";
        }
    }
    ?>

</body>
</html>
