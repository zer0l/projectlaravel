<?php 
session_start();
require_once('vendor/connect.php');

$id = $_POST['gg'];
$rel = "UPDATE `rooms` SET `status` = 'Заселена' WHERE `id` = $id";
$connect->query($rel);

$id1 = $_POST['gg1'];
$rel = "UPDATE `rooms` SET `status` = 'Свободна' WHERE `id` = $id1";
$connect->query($rel);
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
    <?php 
        $rooms = "SELECT * FROM  rooms";
        if($result = $connect->query($rooms)){
            echo "<div class='profile'><h2>Свободны</h2></div>
            <br>";
            foreach($result as $row){
                $id = $row['id'];
                $corpus = $row['corpus'];
                $floor = $row['floor'];
                $room = $row['room'];
                $price = $row['price'];
                $status = $row['status'];
                $mest = $row['mest'];
                if($status == "Свободна"){
                echo "
                <div class='profile'>
                Корпус: $corpus
                Этаж: $floor 
                Комната: $room 
                Цена: $price Rub.
                Количесвто мест: $mest
                Статус: $status
                </div>";
                }
            }
            echo "<div class='profile'><h2>Заняты</h2></div>
            <br>";
            foreach($result as $row){
                $id = $row['id'];
                $corpus = $row['corpus'];
                $floor = $row['floor'];
                $room = $row['room'];
                $price = $row['price'];
                $status = $row['status'];
                $mest = $row['mest'];
                if($status == "Заселена"){
                echo "
                <div class='profile'>
                Корпус: $corpus
                Этаж: $floor 
                Комната: $room 
                Цена: $price Rub.
                Количесвто мест: $mest
                Статус: $status
                </div>";
                }
            }

        }
    ?>



</body>
</html>