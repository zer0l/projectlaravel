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
    <div class="propusk">
        <div class="propusk_conteiner">
            <div class="number_conteiner">
                <?php
                $propusk = "SELECT * FROM  propusk
                JOIN users ON users.id = propusk.user_id
                JOIN zone ON zone.id = propusk.zone_id ";
                if ($result = $connect->query($propusk)) {
                    foreach ($result as $row) {
                        $name_zone = $row['name_zone'];
                        $email = $row['email'];
                        $login = $row['login'];
                        $fio = $row['fio'];
                        $phone = $row['phone'];
                        $role = $row['role'];
                        $num_propusk = $row['num_propusk'];
                    }
                }
                echo "<div class='propusk_number'>Номер пропуска: $num_propusk</div>
                <div class='propusk_number'>ФИО: $fio</div>
                <div class='propusk_number'>Телефон: $phone</div>
                <div class='propusk_number'>Роль: $role</div>
                <div class='zone_propusk'>Зоны пропуска: $name_zone</div>";
                ?>
            </div>
            <div class="img">
                <img src="img/7R4C85zMcDobpR3efpLEeXwCooA_CZRTzOao8ShDStgwwWqd-tTS_TD74JyFXE_apk3z0d36jmVjjgRDzwVZrdrP.jpg" alt="1">
            </div>
        </div>
    </div>
</body>

</html>