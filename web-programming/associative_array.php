<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Associative Array</title>
</head>
<body style="display: flex;justify-content: center;align-items: center;">
    <center>
        <fieldset>
            <h2>Students Name and Marks</h2>
            <?php
            $stud = array("Ayyoob" => 85, "Favaz" => 79, "Nasik" => 81, "Alfi" => 90, "Irfan" => 87);
            echo '<ol>';
            foreach ($stud as $key => $value) {
                echo '<li>' . " $key:$value " . '</li>';
            }
            echo '</ol>';
            ?>
        </fieldset>
    </center>
</body>
</html>
