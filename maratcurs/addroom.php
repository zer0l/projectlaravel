<?php 
session_start();
require_once('vendor/connect.php');

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
<div class="menu1">
        <ul>
        <li><a href="index.php">Главная</a></li>
        <li><a href="profile.php">Личный кабинет</a></li>
        <?php
            if($_SESSION['user']['role'] == 'comendant'){echo'<li><a href="addroom.php">Добавить комнату</a></li>
                <li><a href="addstudentroom.php">Заселить студента</a></li>
                <li><a href="allstudent.php">Данные об оплате</a></li>';}
            ?>
            <li><a href="allrooms.php">Все комнаты</a></li>
            <li><a href="vendor/logout.php">Выход</a></li>
        </ul>
    </div>
    <div class="form">
    <form method="post" action = "vendor/addroom-submit.php" class="form-sub">
    <h2>Добавление комнаты</h2>
        <input type="text" name="corpus" id="corpus" required placeholder="Номер корпуса" class="inps">
        <input type="text" name="floor" id="floor" required placeholder="Этаж" class="inps">
        <input type="text" name="room" id="room" required placeholder="Комната" class="inps">
        <input type="text" name="mest" id="mest" required placeholder="Количество мест" class="inps">
        <input type="text" name="price" id="price" required placeholder="Цена за месяц" class="inps">
        <input type="submit" value="Добавить комнату" class="btn">
    </form>
    </div>
</body>
</html>