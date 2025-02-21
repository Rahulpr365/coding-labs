<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Finder</title>
</head>
<body>
    <h2>Find the Factorial of a Number</h2>
    <form method="post">
        <input type="text" name="n" placeholder="Enter a number" required><br><br>
        <input type="submit" value="Find Factorial" name="fact">
    </form>

    <?php
    if (isset($_POST['fact'])) {
        $num = $_POST['n'];
        if (is_numeric($num) && $num >= 0 && floor($num) == $num) {
            $f = 1;
            for ($i = $num; $i > 0; $i--) {
                $f *= $i;
            }
            echo "<h3>Factorial of $num is: $f</h3>";
        } else {
            echo "<h3>Please enter a valid non-negative integer.</h3>";
        }
    }
    ?>
</body>
</html>