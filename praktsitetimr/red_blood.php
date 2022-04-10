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
            <a href="profile.php"> <img src="img/strelka.png"></a>
        </div>
        <p> <a href="profile.php">Главная / Профиль</a></p>
    </div>
</div>



<div class="admin1">
                        <h1 style="text-align: center;" >Профиль</h1>
                            <p>Имя:    <?= $_SESSION['user']['name'] ?></p>
                            <p>Фамилия:    <?= $_SESSION['user']['surname'] ?></p>
                            <p>Телефон:    <?= $_SESSION['user']['telephone'] ?></p>
                            <p>Логин:    <?= $_SESSION['user']['login'] ?></p>
                            <p>Статус:    <?= $_SESSION['user']['role'] ?></p>
                        </div>
                        <br>
                        <br><br>


<?

if ( $_SESSION['user']['role'] == 'admin' )  {

      echo "
      <div class='addzakz1'>
        <form method='post' enctype='multipart/form-data'>
        Наименование
            <input type='text' name='name' id='tele' required>
            Цена
            <input type='text' name='price' id='tele' required>
            Граммы (гр. или мл.)
            <input type='text' name='gram' id='tele' required>
            Категория
            <select  name='select' required id='tele'> 
                    <option disabled>Выберите из списка:</option>
                    ";
                    $result3 = mysqli_query($connect, "SELECT * FROM `types`") or die(mysqli_error($connect));
                    $row3 = mysqli_num_rows($result3);
                    foreach ($result3 as $row3) {
                        echo " <option value='".$row3['id_types']."'>".$row3['Name']."</option>";

                    }

            echo"</select> 
            Фото
            <input type='file' name='path' required>
            <button  class='but11' name='add'  type='submit' >Добавить</button>
        </form>
    </div>
        <div class='zakz'>
        ";
     $result = mysqli_query($connect, "SELECT * FROM `dish`") or die(mysqli_error($connect));
        $row = mysqli_num_rows($result);
        foreach ($result as $row) {
        $id = $row['id_dish'];
        $name = $row['Name'];
        $img = $row['Photo'];
        $price = $row['Price'];
        $gra = $row['Gramme'];
        echo "
        <form method='post' class='types1'>
        <input type='hidden' value='$id' name='id_type'>
                                <img src='$img' alt=''>
                               <p>$name</p>
                               <p>$price р.</p>
                               <p>$gra</p>
                                <button  class='but11' name='del'  type='submit' >Удалить</button>
                        </form>
        ";
        
        }

}
$file = "img/".$_FILES['path']['name'];

if (isset($_POST['del'])) {
                    $id = $_POST['id_type'];
                    $query = "DELETE FROM `dish` WHERE id_dish = '$id' ";
                    $result2 = mysqli_query($connect, $query) or die(mysqli_error($link));
                    echo '<meta http-equiv="refresh" content="0">';
            }
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $gram = $_POST['gram'];
    $select = $_POST['select'];
    $query40 = "INSERT INTO `dish`  (`Name`,`Photo`, Price, Gramme, id_types) values ('$name', '$file', '$price', '$gram', '$select')";
    $result4 = mysqli_query($connect, $query40) or die(mysqli_error($connect));
    $file = "img/".$_FILES['path']['name'];
    move_uploaded_file($_FILES['path']['tmp_name'], $file);
    echo '<meta http-equiv="refresh" content="0">';
}
?>
</div>



<div style='min-height:350px' ></div>
<?php require_once('footer.php');?>
</body>
</html>