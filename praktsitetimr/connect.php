<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'prakt');

if (!$connect) {
    die('Error connect to DataBase');
}
