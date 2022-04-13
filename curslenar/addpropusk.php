<?php
session_start();
require_once('vendor/connect.php');
($_SESSION['user']['login']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="vendor/propusk-submit.php" method="post">
        <select name="zone" id="zone" required>
            <?php
            $zone = "SELECT * FROM  zone";
            if ($result = $connect->query($zone)) {
                foreach ($result as $row) {
                    $id = $row['id'];
                    $name_zone = $row['name_zone'];
                    echo "<option value = '$id'> Название зоны: $name_zone</option>";
                }
            }
            ?>
        </select>
        <select name="user" id="user" required>
            <?php
            $zone = "SELECT * FROM  users";
            if ($result = $connect->query($zone)) {
                foreach ($result as $row) {
                    $id = $row['id'];
                    $fio = $row['fio'];
                    echo "<option value = '$id'> ФИО: $fio</option>";
                }
            }
            ?>
        </select>
        <input type="submit" value="Добавить">
    </form>
</body>

</html>