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
    <title>Document</title>
</head>
<body>
    <a href="profile.php">Профиль</a>
    <a href="index.php">Главная</a>
   
<br>
    <?php 
        $rooms = "SELECT * FROM  rooms";
        if($result = $connect->query($rooms)){
            echo "Свободны
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
                Свободные 
                Корпус: $corpus
                Этаж: $floor 
                Комната: $room 
                Цена: $price 
                Количесвто мест: $mest
                Статус: $status  
                <form method='post'><input type ='hidden' value='$id' name='gg'>
                <button type='submit'>Заселена</button>
                </form>";
                echo "<br>";
                }
            }
            echo "ЗАНЯТЫ
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
                Корпус: $corpus
                Этаж: $floor 
                Комната: $room 
                Цена: $price 
                Количесвто мест: $mest
                Статус: $status
                <form method='post'><input type ='hidden' value='$id' name='gg1'>
                <button type='submit'>Свободна</button>
                </form>";
                
                echo "<br>";
                }
            }

        }
    ?>



</body>
</html>