<?php
session_start();
require 'vendor/connect.php';
($_SESSION['user']['login']);

if (isset($_GET['type'])) {
    $query = "SELECT dish.id_dish, dish.Name, dish.Price, dish.Photo, dish.Gramme, types.Name FROM dish JOIN types ON dish.id_types = types.id_types WHERE dish.id_types = $_GET[type]";
    $result = mysqli_query($connect, $query);
    $query2 = "SELECT * FROM types WHERE id_types = $_GET[type]";
    $result2 =mysqli_fetch_array(mysqli_query($connect, $query2));
}





?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SK-Меню</title>
</head>

<body>
<?php require_once('header.php');?>
<div class="nazad">
        <div class="strelka">
            <a href="menu.php"> <img src="img/strelka.png"></a>
        </div>
        <p> <a href="menu.php">Главная / Меню / <? echo "$result2[1]" ?></a></p>
    </div>
    <h1 style="text-align: center;" ><? echo "$result2[1]" ?></h1>
    <div class="menu1">
        <?php

            while ($row = mysqli_fetch_array($result)){
                echo "<a href='menu++.php?dish=$row[0]&type=$_GET[type]'><div class='menu2'>
                        <img src='$row[3]' ><br><br>
                        <h4>$row[1]</h4><br>
                        <p style='color: red;' >$row[2] Руб.</p><br>
                        
                        </div>
                    </div></a>";
            }
        
        ?>
        
    </div>

<?php require_once('footer.php');?>
</body>
</html>