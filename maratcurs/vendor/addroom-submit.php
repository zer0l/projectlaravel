<?php 
session_start();
require_once('connect.php');

$corpus = $_POST['corpus'];
$floor = $_POST['floor'];
$room = $_POST['room'];
$mest = $_POST['mest'];
$price = $_POST['price'];


mysqli_query($connect, "INSERT INTO rooms(corpus,floor,room,price,status,mest) VALUES ('$corpus','$floor','$room','$price','Свободна','$mest') ");

header("Location: ../addroom.php");
?>