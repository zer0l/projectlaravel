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
    <title>SK-Профиль</title>
</head>

<body>
<?php require_once('header.php');?>
<div class="nazad">
        <div class="strelka">
            <a href="index.php"> <img src="img/strelka.png"></a>
        </div>
        <p> <a href="index.php">Главная / Профиль</a></p>
    </div>
</div>



<div class="profile-block">
   <h1 style="text-align: center;" >Профиль</h1>
    <p>Имя:    <?= $_SESSION['user']['name'] ?></p>
    <p>Фамилия:    <?= $_SESSION['user']['surname'] ?></p>
    <p>Эл.Почта:    <?= $_SESSION['user']['telephone'] ?></p>
    <p>Логин:    <?= $_SESSION['user']['login'] ?></p>
    <p>Статус:    <?= $_SESSION['user']['role'] ?></p>
</div>
                        <br>
                        <br><br>
    
<?php
                    if ( $_SESSION['user']['role'] == 'user' ) {
                         echo'
                            <h1 style="text-align: center;" >Панель пользователя</h1>
                            <div class="zakz">';
                        $id_user = $_SESSION['user']['id'];
                        $result = mysqli_query($connect, "SELECT * FROM `orders` WHERE id_user='$id_user' ") or die(mysqli_error($connect));
                        $row = mysqli_num_rows($result);
                        foreach ($result as $row) {
                            $data = $row['datatime'];
                            $stol = $row['stol'];
                            $total = $row['total'];
                            $status = $row['status'];
                            echo'
                            <div class="profile-block">
                                <p>Блюда и их кол-во в заказе: </p>';
                               
                                    $result2 = mysqli_query($connect,"SELECT * FROM `attachment` WHERE id_user='$id_user' AND datatime='$data'") or die (mysqli_query($connect));
                                    while ($row2 = mysqli_fetch_array($result2)) {
                                        $menunum = $row2['id_dish'];
                                        $kolvo=$row2['number'];
                                        $result3=mysqli_query($connect,"SELECT * FROM dish WHERE id_dish='$menunum'")
                                        or die (mysqli_query($connect));
                                        while ($row = mysqli_fetch_array($result3)) {
                                        $name=$row['Name'];
                                        echo "$name x$kolvo; ";}

                                    }

                               echo" <p>Время: $data </p> <p>Статус: $status</p> <p>Сумма: $total р.</p> 
                            </div>

                       ";}echo"</div> ";
                    } if ( $_SESSION['user']['role'] == 'worker' ) {
                         echo'
                        <h1 style="text-align: center;" >Панель работника</h1>
                            <div class="zakz">';
                        $result = mysqli_query($connect, "SELECT * FROM `orders` WHERE status!='Заказ готов' ") or die(mysqli_error($connect));
                        $row = mysqli_num_rows($result);
                        foreach ($result as $row) {
                            $id_user1=$row['id_user'];
                            $data1 = $row['datatime'];
                            $stol = $row['stol'];
                            $total = $row['total'];
                            $status = $row['status'];
                            echo'
                            <div class="profile-block">
                                <p>Блюда и их кол-во в заказе: </p>';
                               
                                    $result2 = mysqli_query($connect,"SELECT * FROM `attachment` WHERE id_user='$id_user1' AND datatime='$data1'") or die (mysqli_query($connect));
                                    while ($row2 = mysqli_fetch_array($result2)) {
                                        $menunum = $row2['id_dish'];
                                        $kolvo=$row2['number'];
                                        $result3=mysqli_query($connect,"SELECT * FROM dish WHERE id_dish='$menunum'")
                                        or die (mysqli_query($connect));
                                        while ($row = mysqli_fetch_array($result3)) {
                                        $name=$row['Name'];
                                        echo "$name x$kolvo; ";}

                                    }

                               echo" <p>Время: $data1 </p> <p>Статус: $status</p> <p>Сумма: $total р.</p>
                               <form class='foma' method='post'>
                               <input type='hidden' value='$id_user1' name='id_us'>
                               <input type='hidden' value='$data1' name='dat'>
                               ";

                            
                               if ($status=='Ожидание') {
                                  
                               
                            echo" <button  class='but11' name='prin'  type='submit' >Принять заказ</button>
                            ";
                        }elseif ($status=='Готовиться') {
                            echo" <button  class='but11'  name='got'  type='submit' >Заказ готов</button>
                            ";
                       }echo "</form></div>";
                   }echo"</div> ";


                   if(isset($_POST['prin'])){
                        $id_worker = $_SESSION['user']['id'];
                        $id_us =$_POST['id_us'];
                        $dat =$_POST['dat'];
                        $query1 = "UPDATE `attachment` SET status = 'Готовиться' WHERE id_user='$id_us' AND datatime='$dat' ";
                        $result3 = mysqli_query($connect, $query1) or die(mysqli_error($connect));

                        $query1 = "UPDATE `orders` SET status = 'Готовиться', id_worker='$id_worker' WHERE id_user='$id_us' AND datatime='$dat' ";
                        $result3 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
                        echo '<meta http-equiv="refresh" content="0">';
                   }

                   if(isset($_POST['got'])){
                        $date_up3 = ltrim(date('Y-m-d Hч:iм'), 0);
                        $id_us =$_POST['id_us'];
                        $dat =$_POST['dat'];
                        $query1 = "UPDATE `attachment` SET status = 'Заказ готов' WHERE id_user='$id_us' AND datatime='$dat' ";
                        $result3 = mysqli_query($connect, $query1) or die(mysqli_error($connect));

                        $query1 = "UPDATE `orders` SET status = 'Заказ готов', last_data='$date_up3' WHERE id_user='$id_us' AND datatime='$dat' ";
                        $result3 = mysqli_query($connect, $query1) or die(mysqli_error($connect));
                        echo '<meta http-equiv="refresh" content="0">';
                   }


                    } if ( $_SESSION['user']['role'] == 'admin' )  {

                        echo'    <h1 style="text-align: center;" >Админ-панель</h1>
                        <br>
                        <div class="admin">
                        <a class="but1" href="red_food.php">Редактирование категорий блюд</a>
                        <a class="but1" href="red_blood.php">Редактирование блюд</a>
                        </div>';
                
                }?>

<div style='min-height:400px' ></div>
<?php require_once('footer.php');?>
</body>
</html>