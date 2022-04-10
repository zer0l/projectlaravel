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
    <title>SF-Главная</title>
</head>

<body>
<?php require_once('header.php');?>
    <ul id="slides">
        <li class="slide showing">
            <div class="item">
                <h1>SKY FOOD</h1>
                <br>
                <hr class="hr" >
                <br><br>
                <p>Любимая кухня, богатый бар, танцы и караоке – на первый взгляд, в SKY FOOD уже есть все привычные составляющие успеха.</p><br>
                <p>Однако есть «секретный» ингредиент, благодаря которому у ресторана особое место на гастрономической карте города.</p>
            </div>
        </li>
        <li class="slide">
            <div class="item">
                <h1>SKY FOOD</h1>
                <br>
                <hr class="hr">
                <br><br>
                <p>Любимая кухня, богатый бар, танцы и караоке – на первый взгляд, в SKY FOOD уже есть все привычные составляющие успеха.</p><br>
                <p>Однако есть «секретный» ингредиент, благодаря которому у ресторана особое место на гастрономической карте города.</p>
            </div>
        </li>
        <li class="slide">
            <div class="item">
                <h1>SKY FOOD</h1>
                <br>
                <hr class="hr" >
                <br><br>
                <p>Любимая кухня, богатый бар, танцы и караоке – на первый взгляд, в SKY FOOD уже есть все привычные составляющие успеха.</p><br>
                <p>Однако есть «секретный» ингредиент, благодаря которому у ресторана особое место на гастрономической карте города.</p>
            </div>
        </li>
    </ul>
    <div class="pop">
        <br>
        <h2>Популярные блюда</h2>
        <br>
        <div class="pop1">
            
            <div class="pop2">
                <div class="img1">
                <img style="width: 300px;
     height: 250px;" src="img/kaif1.jpg" >
                </div>
                <br>
                <h3>Семга с лаймом</h3>
            </div>
            <div class="pop2">
                <div class="img12">
                    <img style="width: 300px;
     height: 250px;" src="img/kaif.jpg" >
                </div>
                <br>
                <h3>Стейк Ангус</h3>
            </div>
            <div class="pop2">
                <div class="img13">
                <img style="width: 300px;
     height: 250px;" src="img/kaif2.jpg" >
                </div>
                <br>
                <h3>Солянка московская</h3>
            </div>
        </div>
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
                    <a href='menu+.php?type=$row[id_types]' style='z-index: 10; color: #fff' class='menu-link'>
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
<script src="js/script.js"></script>	
</body>
</html>