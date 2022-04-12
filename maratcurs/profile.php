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
    <div class="profile">
        <div class="">ФИО: <?= $_SESSION['user']['fio'] ?></div>
        <div class="">Телефон: <?= $_SESSION['user']['phone'] ?></div>
        <div class="">Статус: <?= $_SESSION['user']['role'] ?></div>
    </div>
</body>
</html>