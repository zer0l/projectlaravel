<?php 
session_start();
require_once('connect.php');

$fio = $_POST['fio'];
$login = $_POST['login'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password === $confirm_password) {
   
    mysqli_query($connect, "INSERT INTO users(login,password,fio,phone,role) VALUES('$login','$password','$fio','$phone','student')");
    header("Location: ../signin.php");
}


?>
