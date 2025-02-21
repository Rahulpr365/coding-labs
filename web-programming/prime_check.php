<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime or Not</title>
</head>
<body>
    <form method="post">
        <input type="text" name="num">
        <input type="submit" value="Check" name="s">
    </form>
    <?php
    if (isset($_POST['s'])) {
        $n = $_POST['num'];
        $count = 0;
        $i = 1;
        while ($i <= $n) {
            if ($n % $i == 0) {
                $count++;
            }
            $i++;
        }
        if ($count != 2) {
            echo "Not prime";
        } else {
            echo "Prime";
        }
    }
    ?>
</body>
</html>
