<?php

$students = [
    [
        "firstname" => "Aung Kyaw",
        "lastname" => "Kyaw",
    ],
    [
        "firstname" => "Tun Tun",
        "lastname" => "Aung",
    ],
    [
        "firstname" => "Kyaw Kyaw",
        "lastname" => "Htay Lwin",
    ],
    [
        "firstname" => "Hsu Hsu",
        "lastname" => "Tun",
    ],
    [
        "firstname" => "Thura Tun",
        "lastname" => "Kyaw",
    ],
]; ?>

<!-- <!DOCTYPE html>
<html>
    <head>
        <title>Working with HTML</title>
    </head>

    <body>
        <h1>Data Land <?php echo "Students List"; ?></h1>

        <ul>
            <li>Nu Nu <?php echo "Htway"; ?></li>
            <li>Su Su <?php echo "Aye"; ?></li>
            <li>Zaw Zaw <?php echo "Aung"; ?></li>
            <li>Aung Aung <?php echo "Oo"; ?></li>
            <li>Maung Maung <?php echo "Kyaw"; ?></li>
        </ul>
    </body>
</html> -->

<!DOCTYPE html>
<html>
    <head>
        <title>Working with HTML</title>
    </head>

    <body>
        <h1>Data Land <?php echo "Students List"; ?></h1>

        <ul>
            <li><?php echo $students[0]["firstname"] .
                " " .
                $students[0]["lastname"]; ?></li>
            <li><?php echo $students[1]["firstname"] .
                " " .
                $students[1]["lastname"]; ?></li>
            <li><?php echo $students[2]["firstname"] .
                " " .
                $students[2]["lastname"]; ?></li>
            <li><?php echo $students[3]["firstname"] .
                " " .
                $students[3]["lastname"]; ?></li>
            <li><?php echo $students[4]["firstname"] .
                " " .
                $students[4]["lastname"]; ?></li>
        </ul>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Working with HTML</title>
    </head>

    <body>
        <h1>Data Land <?php echo "Students List"; ?></h1>

        <ul>
            <?php foreach ($students as $student): ?>
            <li><?php echo $student["firstname"] .
                " " .
                $student["lastname"]; ?></li>
            <?php endforeach; ?>
        </ul>

        <hr/>

        <ul>
            <?php foreach ($students as $student): ?>
            <li><?php echo "{$student["firstname"]} {$student["lastname"]}"; ?></li>
            <?php endforeach; ?>
        </ul>

        <hr/>

        <ul>
            <?php foreach ($students as $student): ?>
            <li><?= "{$student["firstname"]} {$student["lastname"]}" ?></li>
            <?php endforeach; ?>
        </ul>

    </body>
</html>
