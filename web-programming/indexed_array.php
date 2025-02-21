<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array - Student Names</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        fieldset {
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <fieldset>
        <h2>Student Names</h2>
        <ol>
            <?php
            $students = array("Ayyoob", "Favaz", "Nasik", "Alfi", "Irfan");
            foreach ($students as $name) {
                echo "<li>$name</li>";
            }
            ?>
        </ol>
    </fieldset>

</body>
</html>
