<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Регистрация</title>
</head>

<body>
    <div class="form">
        <form action="vendor/signup-submit.php" method="post" class="form-sub">
            <h2>Регистрация</h2>
            <input type="text" name="fio" id="fio" placeholder="Введите ФИО" class="inps">
            <input type="text" name="login" id="login" placeholder="Введите логин" class="inps">
            <input type="email" name="email" id="email" placeholder="Введите Эл.почту" class="inps">
            <input type="tel" name="phone" id="phone" placeholder="Введите телефон" class="inps">
            <input type="password" name="password" id="password" placeholder="Введите пароль" class="inps">
            <input type="password" name="password_r" id="password_r" placeholder="Введите повтор пароля" class="inps">
            <input type="submit" value="Войти" class="btn">
        </form>
    </div>
</body>

</html>