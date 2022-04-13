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
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <div class="menu">
        <ul>
            <li><a href="index.php">Главная</a></li>
            <li><a href="profile.php">Профиль</a></li>
            <li><a href="addzone.php">Добавить зону</a></li>
            <li><a href="addpropusk.php">Создать пропуск</a></li>
            <li><a href="vendor/logout.php">Выйти</a></li>
        </ul>
    </div>
    <div class="form">
        <form action="vendor/zone-submit.php" method="post" class="form-sub">
            <h2>Добавления зоны</h2>
            <input type="text" name="name_zone" id="name_zone" placeholder="Название зоны" class="inps">
            <input type="submit" value="Добавить" class="btn">
        </form>
    </div>
</body>

</html>