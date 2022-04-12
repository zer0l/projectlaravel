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
    <form method="post" action="vendor/addstudentroom-submit.php" class="form-sub">
        <select name="room_id" id="room_id" class="inps">
            <?php 
                $rooms = "SELECT * FROM  rooms";
                if($result = $connect->query($rooms)){
                    foreach($result as $row){
                        $id = $row['id'];
                        $corpus = $row['corpus'];
                        $floor = $row['floor'];
                        $room = $row['room'];
                        $price = $row['price'];
                        $status = $row['status'];
                        if($status == "Свободна"){
                        echo "<option value = '$id'> Корпус: $corpus Этаж: $floor Комната: $room </option>";
                        }
                    }
                }
            ?>
        </select>
        <select name="user_id" id="user_id" class="inps">
            <?php 
                $rooms = "SELECT * FROM  users";
                if($result = $connect->query($rooms)){
                    foreach($result as $row){
                        $id = $row['id'];
                        $fio = $row['fio'];
                        $role = $row['role'];
                        if ($role == 'student') {
                            echo "<option value = '$id'> ФИО: $fio </option>";
                        }
                    }
                }
            ?>
        </select>
        <input type='text' name='kolvom' id='kolvom' required class="inps" placeholder="Количество месяцев">
        <input type="submit" value="Заселить" class="btn">
    </form>
    </div>
</body>
</html>