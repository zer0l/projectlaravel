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
    <title>Главная</title>
</head>
<body>
    <div class="conteiner">
    <div class="menu">
        <ul>
            <?php
            if($_SESSION['user']){echo'<li><a href="profile.php">Профиль</a></li>';}
            else{echo'  <li><a href="signin.php">Войти</a></li>
                <li> <a href="signup.php">Регистрация</a></li>';}
            ?>
        </ul>
    </div>
    <div class="title">
        Добро пожаловать на сайт нашего уютного общежития
    </div>
    </div>
</body>
</html>