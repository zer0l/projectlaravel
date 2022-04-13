<?php
session_start();
require_once('connect.php');

$fio = $_POST['fio'];
$login = $_POST['login'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$password_r = $_POST['password_r'];

if ($password == $password_r) {
    mysqli_query($connect, "INSERT INTO users(fio,login,email,phone,password,role) VALUES('$fio','$login','$email','$phone','$password','worker')");
    header('Location: ../signin.php');
} else {
    header('Location: ../signup.php');
}
