<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>
<body>
    <div class="form">
    <form action="vendor/signup-submit.php" method="post" class="form-sub" >
    <h2>Регистрация</h2>
        <input type="text" name="fio" id="fio" required placeholder="Введите ФИО" class="inps">
        <input type="text" name="login" id="login" required placeholder="Введите логин" class="inps">
        <input type="tel" name="phone" id="phone" required placeholder="Введите телефон" class="inps">
        <input type="password" name="password" id="password" required placeholder="Введите пароль" class="inps">
        <input type="password" name="confirm_password" id="confirm_password" required placeholder="Введите повтор пароля" class="inps">
        <input type="submit" value="Зарегистрироваться" class="btn">
    </form>
    </div>
</body>
</html>