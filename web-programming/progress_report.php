<!DOCTYPE html>
<html>
<body>
    <form method="get">
        Enter Name: <input type="text" name="na"><br>
        Enter Reg no: <input type="text" name="n"><br>
        Enter Mark1: <input type="text" name="m1"><br>
        Enter Mark2: <input type="text" name="m2"><br>
        Enter Mark3: <input type="text" name="m3"><br>
        <input type="submit" value="total" name="t">
    </form>
    <?php
    if (isset($_GET['t'])) {
        $na = $_GET['na'];
        $n = $_GET['n'];
        $m1 = $_GET['m1'];
        $m2 = $_GET['m2'];
        $m3 = $_GET['m3'];

        $tot = $m1 + $m2 + $m3;
        $p = ($tot / 300) * 100;

        if ($p >= 90) {
            $g = 'S';
        } elseif ($p >= 75) {
            $g = 'A';
        } elseif ($p >= 60) {
            $g = 'B';
        } elseif ($p >= 45) {
            $g = 'C';
        } else {
            $g = 'F';
        }
        echo "<h2>Student Details</h2>";
        echo "<p>Name: " . $na . "</p>";
        echo "<p>Reg no: " . $n . "</p>";
        echo "<p>Total Marks: " . $tot . "</p>";
        echo "<p>Percentage: " . $p . "%</p>";
        echo "<p>Grade: " . $g . "</p>";
    }
    ?>
</body>
</html>
