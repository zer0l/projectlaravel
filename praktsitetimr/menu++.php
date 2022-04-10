<?php
session_start();
require 'vendor/connect.php';
($_SESSION['user']['login']);

$id_user = $_SESSION['user']['id'];

if (isset($_GET['dish'])) {
$query = "SELECT dish.id_dish, dish.Name, dish.Price, dish.Photo, dish.Gramme, types.Name FROM dish JOIN types ON dish.id_types = types.id_types WHERE dish.id_dish = $_GET[dish]";
$result = mysqli_fetch_array(mysqli_query($connect, $query));
$query2 = "SELECT * FROM types WHERE id_types = $_GET[type]";
$result2 =mysqli_fetch_array(mysqli_query($connect, $query2));
}

if ( $_SESSION['user']['role'] == 'user' ) {
if (isset($_POST['gg'])) {
    $number = $_POST['number'];
    $query40 = "INSERT INTO `attachment`  (`id_dish`,`number`,`price`,`status`,`id_user`) values ('$result[0]', '$number', '$result[2]','Новый','$id_user')";
    $result2 = mysqli_query($connect, $query40) or die(mysqli_error($connect));
    echo "<script>self.location='korz.php';</script>";
}}else {
    echo "<script>self.location='signin.php';</script>";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SK-Блюдо</title>
</head>

<body>
<?php require_once('header.php');?>
<div class="nazad">
        <div class="strelka">
            <a href="menu+.php"> <img src="img/strelka.png"></a>
        </div>
        <p> <a href="menu+.php">Главная / Меню / <?echo "$result2[1]"?> / <?echo "$result[1]"?></a></p>
    </div>
    <h1 style="text-align: center;" ><?echo "$result[1]"?></h1><br><br>
        <div class="menu3">
            <div class="menu4">
                <img src="<?echo "$result[3]"?>">
            </div>
            <div class="menu5">
                <h1><?echo "$result[2]"?> руб.</h1>
                <br><p style="color: grey;font-size: 20px;" ><?echo "$result[4]"?> гр.</p><br>
                <div class="plusminus">
                    <div class="minus">
                    <button class="minus" id="minus" type="submit" >-</button>
                    </div><br>
                    <div class="plus">
                        <button class="plus" id="plus" type="submit" >+</button>
                    </div>
                    <form method="post">
                    <div class="kolvo"  style ="font-size:20px;">
                    Кол-во: <input class='kolv' type="number" readonly style='border:none;background:none; font-size:20px;' name="number" id="col" value="1">
                    </div>
                </div>
                <button style="margin-top: 20px;width: 50%;" class="but0" id="buy" name="gg"  type="submit" >Добавить в корзину</button>
                </form>
                
            </div>
        </div>
    <div class="menu6"><p>
    </p></div>

<?php require_once('footer.php');?>
<script src="js/script.js"></script>
</body>
</html>