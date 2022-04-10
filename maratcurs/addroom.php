<?php 
session_start();
require_once('vendor/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="profile.php">Профиль</a>
    <a href="index.php">Главная</a>
    <form method="post" action = "vendor/addroom-submit.php">
        <input type="text" name="corpus" id="corpus" required>
        <input type="text" name="floor" id="floor" required>
        <input type="text" name="room" id="room" required>
        <input type="text" name="mest" id="mest" required>
        <input type="text" name="price" id="price" required>
        <input type="submit" value="Зарегистрироваться">
    </form>
</body>
</html>