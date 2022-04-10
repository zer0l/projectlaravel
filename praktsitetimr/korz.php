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
    <title>SK-Корзина</title>
</head>

<body>
<?php require_once('header.php');?>
<div class="nazad">
        <div class="strelka">
            <a href="index.php"> <img src="img/strelka.png"></a>
        </div>
        <p> <a href="index.php">Главная / Корзина</a></p>
    </div><br>
    <h1 style="text-align: center;" >Корзина</h1>
        <br>
        <div class="aye">
    <div class="korzz">
        <div class="korz1">
           <? 
           $id_user = $_SESSION['user']['id'];
        $result = mysqli_query($connect, "SELECT * FROM `attachment` WHERE id_user='$id_user' AND status='Новый' ") or die(mysqli_error($connect));
        $row = mysqli_num_rows($result);
        $sum =0;
        foreach ($result as $row) {
            $vkys=$row['id_dish'];
            $result1 = mysqli_query($connect, "SELECT * FROM `dish` WHERE id_dish='$vkys'") or die(mysqli_error($connect));
            $row1 = mysqli_num_rows($result1);
             foreach ($result1 as $row1) {
            $img=$row1['Photo'];
            $name=$row1['Name'];
            $price=$row['price'];
            $number=$row['number'];
            $sum = $sum + $price*$number;
           echo"
            <div class='korz11'>
               
                    
                        <img src='$img'>
                    
                
                    <h2>$name</h2>
                
                    
                       <h2> Кол-во: $number</h2> 
                       
               
                <h2  >$price р</h2>
            
                
            </div>";}}
            ?>
        </div>
       
        <div class="korz2">
             <form method="post">
                <input type="hidden" name="itog" value="<?echo $sum;?>">
            <div class="korz3">
            <h1>Итого:</h1><h1 style="color:rgb(0, 0, 55);" ><?echo $sum;?>р.</h1>
        </div>
            <button style="margin-top: 20px;width: 100%;" class="but" name="ofor"  type="submit" >Оформить заказ</button>
        </form>
        <form method="post">
            <div class="butbut">
                <button style="margin-top: 20px;width: 45%; background-color: rgb(255, 161, 55);" class="but"  type="submit" name="prod">Продолжить покупки</button>
                <button style="margin-top: 20px;width: 45%; background-color: rgb(255, 161, 55);" class="but"  type="submit" name="clear">Очистить корзину</button><br>
            </div>
        </form>
        </div>
    </div>
</div>
<?
if(isset($_POST['prod'])){
    echo "<script>self.location='menu.php';</script>";
}

if(isset($_POST['ofor'])){
    $id_user = $_SESSION['user']['id'];
    $date_up = ltrim(date('Y-m-d Hч:iм'), 0);
    $sel = $_POST['select'];
    $itog =$_POST['itog'];

    $query1 = "UPDATE `attachment` SET status = 'Ожидание', datatime='$date_up' WHERE id_user='$id_user' AND status='Новый' ";
    $result3 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
    $query40 = "INSERT INTO `orders`  (`id_user`,`total`,`status`,`datatime`,`stol`) values ('$id_user', '$itog','Ожидание','$date_up','$sel')";
    $result4 = mysqli_query($connect, $query40) or die(mysqli_error($connect));
    echo "<script>self.location='profile.php';</script>";
}

if(isset($_POST['clear'])){
    $id_user = $_SESSION['user']['id'];
    $query = "DELETE FROM `attachment` WHERE id_user='$id_user' AND status='Новый' ";
    $result2 = mysqli_query($connect, $query) or die(mysqli_error($connect));
    echo '<meta http-equiv="refresh" content="0">';
}

?>

<?php require_once('footer.php');?>
</body>
</html>