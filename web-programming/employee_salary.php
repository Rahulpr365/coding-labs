<!DOCTYPE html>
<html>
<body>
<form method="post">
    <h2>Employee Salary Statement</h2>
    <input type="text" placeholder="Name" name="n" required><br>
    <input type="text" placeholder="Designation" name="d" required><br>
    <input type="text" placeholder="Organisation" name="o" required><br>
    <input type="number" placeholder="Basic Salary" name="b" required><br>
    <input type="submit" value="Submit" name="s"><br>
</form>
<?php
if (isset($_POST['s'])) {
    // Getting form data
    $na = $_POST['n'];
    $de = $_POST['d'];
    $org = $_POST['o'];
    $ba = $_POST['b'];
    $da = 0.3 * $ba;
    $hra = 0.1 * $ba;
    $gs = $ba + $da + $hra; // Gross Salary
    $it = 0.05 * $gs; // Income Tax (5%)
    $ns = $gs - $it; // Net Salary
    $qn11 = "Name: $na\nDesignation: $de\nOrganisation: $org\nBasic Salary: $ba\nDA: $da\nHRA: $hra\nGross Salary: $gs\nIncome Tax: $it\nNet Salary: $ns\n\n";
    $file = fopen("qn11.txt", "a");
    fwrite($file, $qn11);
    fclose($file);
    echo "<h3>Employee Salary Statement</h3>";
    echo nl2br($qn11);
}
if (file_exists("qn11.txt")) {
    echo "<h3>Previous Records</h3>";
    echo nl2br(file_get_contents("qn11.txt"));
}
?>
</body>
</html>
