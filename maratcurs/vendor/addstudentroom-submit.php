<?php 
session_start();
require_once('connect.php');
$room_id = $_POST['room_id'];
$user_id = $_POST['user_id'];
$price = $_POST['price'];
$kolvom = $_POST['kolvom'];
$rel = "UPDATE `rooms` SET `mest`=`mest`-1 WHERE `id` = $room_id";
$connect->query($rel);
$res2 =mysqli_query($connect, "SELECT * FROM rooms WHERE id = '$room_id'");
while($row = mysqli_fetch_assoc($res2)){
    $mest = $row['mest'];
    $price = $row['price'];
}
if ($mest == 0) {
    $rel = "UPDATE `rooms` SET `status` = 'Заселена' WHERE `id` = $room_id";
    $connect->query($rel);
}
$total_price = $price * $kolvom;
mysqli_query($connect, "INSERT INTO `oplata`(`room_id`, `user_id`, `kolvom`, `total_price`) VALUES ('$room_id','$user_id','$kolvom','$total_price') ");
header("Location: ../addstudentroom.php");
?>