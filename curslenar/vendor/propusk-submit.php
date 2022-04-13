<?php
session_start();
require_once('connect.php');

$zone = $_POST['zone'];
$user = $_POST['user'];
$number_propusk = rand();

$rel = "UPDATE `users` SET `num_propusk` = '$number_propusk' WHERE `id` = $user";
$connect->query($rel);

mysqli_query($connect, "INSERT INTO `propusk`(`zone_id`,`user_id`) VALUES ('$zone','$user')");

header('Location: ../addpropusk.php');
