<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Odd or Even Checker</title>
</head>
<body>
    <h2>Check if a Number is Odd or Even</h2>
    <form method="post">
        <input type="text" name="num" placeholder="Enter a number" required><br><br>
        <input type="submit" value="Check" name="check">
    </form>
    <?php
    if (isset($_POST['check'])) {
        $n = $_POST['num'];

        // Check if the input is numeric
        if (is_numeric($n)) {
            if ($n % 2 == 0) {
                echo "<h3>$n is EVEN</h3>";
            } else {
                echo "<h3>$n is ODD</h3>";
            }
        } else {
            echo "<h3>Please enter a valid number.</h3>";
        }
    }
    ?>
</body>
</html>
