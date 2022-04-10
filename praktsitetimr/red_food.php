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
      <div class='addzakz'>
        <form method='post' enctype='multipart/form-data'>
        Наименование
            <input type='text' name='name' required id='tele'>
               Фото
            <input type='file' name='path' required >
            <button  class='but11' name='add'  type='submit' >Добавить</button>
        </form>
    </div>
        <div class='zakz'>
        ";
     $result = mysqli_query($connect, "SELECT * FROM `types`") or die(mysqli_error($connect));
        $row = mysqli_num_rows($result);
        foreach ($result as $row) {
        $id = $row['id_types'];
        $name = $row['Name'];
        $img = $row['url'];
        echo "
        <form method='post' class='types'>
        <input type='hidden' value='$id' name='id_type'>
                                <img src='$img' alt=''>
                               <p>$name</p>
                                <button  class='but11' name='del'  type='submit' >Удалить</button>
                        </form>
        ";
        
        }

}

if (isset($_POST['del'])) {
                    $id = $_POST['id_type'];
                    $query = "DELETE FROM `types` WHERE id_types = '$id' ";
                    $result2 = mysqli_query($connect, $query) or die(mysqli_error($link));
                    echo '<meta http-equiv="refresh" content="0">';
            }
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $file = "img/".$_FILES['path']['name'];
    move_uploaded_file($_FILES['path']['tmp_name'], $file);
    $query40 = "INSERT INTO `types`  (`Name`,`url`) values ('$name', '$file')";
    $result4 = mysqli_query($connect, $query40) or die(mysqli_error($connect));
    echo '<meta http-equiv="refresh" content="0">';
}
?>
</div>



<div style='min-height:350px' ></div>
<?php require_once('footer.php');?>
</body>
</html>