<?php 
session_start();
require_once('connect.php');

$room_id = $_POST['room_id'];
$user_id = $_POST['user_id'];
$price = $_POST['price'];
$kolvom = $_POST['kolvom'];
$total_price = $price * $kolvom;

mysqli_query($connect, "INSERT INTO `oplata`(`id`, `room_id`, `user_id`, `kolvom`, `total_price`) VALUES ('$room_id','$user_id','$kolvom','$price','$total_price') ");

$rel = "UPDATE `rooms` SET `mest`=`mest`-1 WHERE `id` = $room_id";
$connect->query($rel);



header("Location: ../addstudentroom.php");
?>