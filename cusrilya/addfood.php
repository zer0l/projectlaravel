<?php
session_start();
require 'vendor/connect.php';
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
    <div class="">
        <div class="menu">
            <div class="logo"><div class="img">SF</div></div>
            <ul>
                <li><a href="index.php" class="menu-lk">Главная</a></li>
                <?php
                // if($_SESSION['user']['role'] == '1'){
                //     echo
                //     '<li><a href="index.php#main_menu" class="menu-lk">Меню</a></li>
                //     <li><a href="index.php#main_menu" class="menu-lk">Корзина</a></li>';}
                if($_SESSION['user']['role'] == '2')
                {echo
                    '<li><a href="profile.php" class="menu-lk">Личный кабинет</a></li>
                    <li><a href="index.php#main_menu" class="menu-lk">Обработка заказов</a></li>';}
                if($_SESSION['user']['role'] == '3'){
                    echo
                    '<li><a href="index.php#main_menu" class="menu-lk">Добавление категории блюда</a></li>
                    <li><a href="index.php#main_menu" class="menu-lk">Удаление категории блюда</a></li>';}
                ?>
                <li><a href="vendor/logout.php" class="menu-lk">Выход</a></li>
            </ul>
        </div>
    </div>
    <div class="main_signin">
        <div class="signin_conteiner">
           <div class="signin_tittle">Добавление блюда</div>
            <form action="vendor/food-submit.php" method="post" class="form_sign">
                <select name="category_id" id="category_id" type="text">
                    <option value="1">Супы</option>
                    <option value="2">Горячие</option>
                </select>
                <input type="text" name="name_food" id="name_food" placeholder="Введите название блюда" required>
                <input type="text" name="price" id="price" placeholder="Введите цену" required>
                <input type="submit" value="Зарегестрироваться" style="background-color: rgb(201, 182, 219);">
            </form>
        </div>
    </div>
</body>
</html>