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
    <title>Document</title>
</head>
<body>
    <a href="profile.php">Профиль</a>
    <a href="index.php">Главная</a>
    <form method="post" action="vendor/addstudentroom-submit.php">
        <select name="room_id" id="room_id">
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
        <select name="user_id" id="user_id">
            <?php 
                $rooms = "SELECT * FROM  users";
                if($result = $connect->query($rooms)){
                    foreach($result as $row){
                        $id = $row['id'];
                        $fio = $row['fio'];
                        echo "<option value = '$id'> ФИО: $fio </option>";
                    }
                }
            ?>
        </select>
        <?php 
                $rooms = "SELECT * FROM  rooms";
                if($result = $connect->query($rooms)){
                    foreach($result as $row){                     
                        $price = $row['price'];                      
                        echo "<input type = 'hidden' value = '$price' name = 'price'>";
                   }
                }
        ?>
        <input type='text' name='kolvom' id='kolvom' required>
        <input type="submit" value="Зарегистрироваться">
    </form>
</body>
</html>