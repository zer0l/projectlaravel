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
    <a href="profile.php">Профиль</a>
    <a href="addzone.php">Добавить зону</a>
    <a href="vendor/logout.php">Выйти</a>
    <form action="vendor/zone-submit.php" method="post">
        <input type="text" name="name_zone" id="name_zone" placeholder="Название зоны">
        <input type="submit" value="Добавить">
    </form>
</body>

</html>