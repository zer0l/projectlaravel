<?php

    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $login = $_POST['login'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    if ($password === $password_confirm) {


        $password = md5($password);

        mysqli_query($connect, "INSERT INTO users (name, surname, telephone, login, password, role) VALUES ('$name', '$surname', '$telephone', '$login', '$password', 'user')");

        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('Location: ../signin.php');


    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../signup.php');
    }

?>
