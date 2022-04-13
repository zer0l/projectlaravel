<?php
session_start();
require_once('vendor/connect.php');
($_SESSION['user']['login']);
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
    <a href="addzone.php">Добавить зону</a>
    <a href="addpropusk.php">Создать пропуск</a>
    <a href="vendor/logout.php">Выйти</a>
</body>

</html>