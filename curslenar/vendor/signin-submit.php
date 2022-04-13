<?php
session_start();
require_once('connect.php');

$login = $_POST['login'];
$password = $_POST['password'];

$check_user = mysqli_query($connect, "SELECT * FROM users WHERE login = '$login' AND password ='$password'");

if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);

    $_SESSION['user'] = [
        "id" => $user['id'],
        "fio" => $user['fio'],
        "login" => $user['login'],
        "email" => $user['email'],
        "phone" => $user['phone'],
        "password" => $user['password'],
        "role" => $user['role'],
    ];

    header('Location: ../profile.php');
} else {
    header('Location: ../signin.php');
}
