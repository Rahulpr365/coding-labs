<!DOCTYPE html>
<html>
<body>
    <form method="post">
        Name: <input type="text" name="name" id="name"><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $name = $_POST['name'];
        setcookie('name', $name, time() + (86400 * 30), '/'); // Cookie valid for 30 days
        echo "Cookie set. Please refresh the page to see the stored value.";
    }

    if (isset($_COOKIE['name'])) {
        echo "<br>Hello " . $_COOKIE['name'] . "!";
    } else {
        echo "<br>Welcome, guest!";
    }
    ?>
</body>
</html>
