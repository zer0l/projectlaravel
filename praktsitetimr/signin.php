<?php
session_start();
require 'vendor/connect.php';
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SK-Авторизация</title>
</head>

<body>
<?php require_once('header.php');?>
    <div class="nazad">
        <div class="strelka">
            <a href="index.php"> <img src="img/strelka.png"></a>
        </div>
        <p> <a href="index.php">Главная / Авторизация</a></p>
    </div><br>
    <div class="vhod">
        <h1 style="text-align: center;" >Авторизация</h1>
        <br>
        <p>Заполните поля для входа:</p><br>
        <form action="vendor/signin-submit.php" method="post">
            <b><label  for="login">Логин*</label></b>
            <p><input placeholder="Введите логин" id="tele" type="text" name="login"></p><br>
            <b><label  for="password">Пароль*</label></b>
            <p><input id="tele" type="password" name="password" placeholder="Введите пароль"></p><br>
            <center><button class="but"  type="submit" >Войти</button></center>
            <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
        </form><br>
        <p>У вас еще нет аккаунта? <a style="color: red;" href="signup.php" >Регистрация</a> </p> <br>
    </div>

<?php require_once('footer.php');?>
</body>
</html>