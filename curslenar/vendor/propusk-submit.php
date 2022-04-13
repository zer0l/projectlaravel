<?php
session_start();
require_once('connect.php');

$zone = $_POST['zone'];
$user = $_POST['user'];
$number_propusk = rand();

mysqli_query($connect, "INSERT INTO `propusk`(`zone_id`,`user_id`,`number_propusk`) VALUES ('$zone','$user','$number_propusk')");

header('Location: ../addpropusk.php');
