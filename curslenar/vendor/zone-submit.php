<?php
session_start();
require_once('connect.php');

$name_zone = $_POST['name_zone'];

mysqli_query($connect, "INSERT INTO `zone`(`name_zone`) VALUES ('$name_zone')");

header('Location: ../addzone.php');
