<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
<form action="vendor/signup-submit.php" method="post">
        <input type="text" name="fio" id="fio" placeholder="Введите ФИО">
        <input type="text" name="login" id="login" placeholder="Введите логин">
        <input type="email" name="email" id="email" placeholder="Введите Эл.почту">
        <input type="tel" name="phone" id="phone" placeholder="Введите телефон">
        <input type="password" name="password" id="password" placeholder="Введите пароль">
        <input type="password" name="password_r" id="password_r" placeholder="Введите повтор пароля">
        <input type="submit" value="Войти">
    </form>
</body>
</html>