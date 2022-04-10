<?php
session_start();
require 'vendor/connect.php';
($_SESSION['user']['login']);
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
            <a href="index.php"> <img src="img/strelka.png"></a>
        </div>
        <p> <a href="index.php">Главная / Меню</a></p>
    </div>
    <div class="vetrina">
            <br>
            <h1>Меню</h1>
            <br>
            
        <div class="men11">
            <?php
                $query = "SELECT * FROM types";
                $result = mysqli_query($connect, $query);
                while ($row = mysqli_fetch_array($result)) {
                    echo "
                    <a href='menu+.php?type=$row[id_types]' style='z-index: 10; color: #fff'>
                    <div id='men1' class='men1' style='position: relative;'>
                                <img src='$row[2]' alt='' style='position: absolute; top:0; left:0; width: 100%; height:100%; z-index: -10;'>
                                <div class='item1'>
                               <p>$row[1]</p>
                                </div>
                        </div></a>";
                }
            ?>
            
        </div>
    </div>

<?php require_once('footer.php');?>
</body>
</html>