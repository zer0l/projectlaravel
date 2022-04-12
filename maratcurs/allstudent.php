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
    <?php 
        $oplata = "SELECT * FROM  oplata
        JOIN rooms ON rooms.id=oplata.room_id
        JOIN users ON users.id=oplata.user_id ";
        if($result = $connect->query($oplata)){
            foreach($result as $row){
                $corpus = $row['corpus'];
                $floor = $row['floor'];
                $room = $row['room'];
                $fio = $row['fio'];
                $kolvom = $row['kolvom'];
                $total_price = $row['total_price'];
                echo "
                <div class='profile'>
                <div class></div> ФИО: $fio
                <div class> Корпус: $corpus</div>
                <div class>Этаж: $floor </div>
                <div class>Комната: $room </div>
               <div class>Количество месяцев: $kolvom</div>
                <div class>Оплачено: $total_price Rub.</div>
                </div>";
                echo "<br>";
            }}

    ?>
</body>
</html>