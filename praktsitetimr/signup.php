<?php
session_start();
require 'vendor/connect.php';
if ($_SESSION['user']) {
    header('Location: signin.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>SK-Регистрация</title>
</head>

<body>
<?php require_once('header.php');?>
    <div class="nazad">
        <div class="strelka">
            <a href="index.php"> <img src="img/strelka.png"></a>
        </div>
        <p> <a href="index.php">Главная / Регистрация</a></p>
    </div><br>
    <div class="vhod">
        <h1 style="text-align: center;" >Регистрация</h1>
        <br>
        <p>Заполните поля для регистрации:</p><br>
        <form action="vendor/signup-submit.php" method="post">
            <b><label for="name">Имя*</label></b>
            <p><input id="tele" placeholder="Введите свое Имя" pattern="[а-яА-ЯёЁ\s]+" required type="text" name="name"></p><br>
            <b><label for="surname">Фамилия*</label></b>
            <p><input id="tele" placeholder="Введите свою Фамилию" pattern="[а-яА-ЯёЁ\s]+" required type="text" name="surname"></p><br>
            <b><label for="login">Логин*</label></b>
            <p><input id="tele" required type="text" name="login" placeholder="Введите свой логин"></p><br>
            <b><label for="telephone">Эл.Почта*</label></b>
            <p><input id="tele"  required type="email" name="telephone" placeholder="Введите эл.почту"></p><br>
            <b><label for="password">Пароль*</label></b>
            <p><input  id="tele" required type="password" name="password" placeholder="Введите пароль"></p><br>
            <b><label for="password-confirm">Повторите пароль*</label></b>
            <p><input  id="tele" required type="password" name="password_confirm" placeholder="Подтвердите пароль"></p><br>
            <div style="display: flex;" >
        <input style="margin-right:5px" required class="checkbox" type="checkbox" id="chek" >
        <label  for="chek">Согласие на обработку персональных данных</label>
  </div><br>
  <button class="but"  type="submit" >Зарегистрироваться</button>
        </form><br>
        <p>У вас уже есть аккаунт? <a style="color: red;" href="signin.php" >Войти</a> </p> <br>
    </div>

<?php require_once('footer.php');?>
</body>
</html>